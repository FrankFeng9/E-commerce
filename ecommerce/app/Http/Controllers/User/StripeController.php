<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use App\Rules\PhoneRule;
use App\Rules\PostalCodeRule;
use Faker\Core\Number;
use Illuminate\Support\Facades\Log;

class StripeController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;

    public function __construct()
    {
        $this->orderRepository = new OrderRepository();
    }

    public function test(Request $request)
    {
        $order_id = 16;

        $auth_user = Auth::user();
        // Start Send Email
        $invoice = Order::findOrFail($order_id);
        $data = [
            'invoice_no' => $invoice->invoice_no,
            'amount' => $invoice->amount,
            'amount_subtotal' => $invoice->amount_subtotal,
            'amount_ship' => $invoice->amount_ship,
            'amount_tax' => $invoice->amount_tax,
            'name' => $auth_user->name,
            'email' => $auth_user->email,
        ];
        return view('mail.order_mail', ['order' => $data]);

        Mail::to($auth_user->email)->send(new OrderMail($data));
    }

    public function StripeOrder(Request $request)
    {

        $request->validate([
            'ship_method' => 'required',
            'bill_first_name' => 'required',
            'bill_last_name' => 'required',
            'bill_phone' => ['required', new PhoneRule],
            'bill_address' => 'required',
            'bill_city' => 'required',
            'bill_province' => 'required',
            'bill_postal_code' => ['required', new PostalCodeRule],
        ]);

        $amount_subtotal = round(Cart::total(), 2);
        $amount_tax = $this->orderRepository->calcTax($amount_subtotal);
        $amount_ship = $this->orderRepository->returnAmountShip($request->post('ship_method'));

        $total_amount = round($amount_subtotal + $amount_tax + $amount_ship, 2);

        $ApiKey = 'sk_test_51LlImKFoyekJx5dtotjNQabZtunwqXD14IIitpIPWya0JBiNlJ9E5Akg1lSB1q3QDJM13IpDNs4cWP1p7MXwvIiS00BnS4aRO5';
        \Stripe\Stripe::setApiKey($ApiKey);

        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => $total_amount*100,
            'currency' => 'usd',
            'description' => 'BestChoice',
            'source' => $token,
            'metadata' => ['order_id' => uniqid()],
        ]);
        $content_log = json_encode($charge, JSON_UNESCAPED_UNICODE);
        Log::info('stripe_StripeOrder: ' . $content_log);

        $curr_user = Auth::user();
        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'name' => $curr_user->name,
            'email' => $curr_user->email,
            'phone' => '',

            'payment_type' => 'Stripe',
            'payment_method' => 'Stripe',
            'payment_type' => $charge->payment_method,
            'transaction_id' => $charge->balance_transaction,
            'currency' => $charge->currency,
            'amount' => $total_amount,
            'order_number' => $charge->metadata->order_id,

            'invoice_no' => mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            // 'status' => 'pending',
            'status' => $charge->status,
            'created_at' => Carbon::now(),


            'bill_first_name' => $request->post('bill_first_name'),
            'bill_last_name' => $request->post('bill_last_name'),
            'bill_phone' => $request->post('bill_phone'),
            'bill_company' => $request->post('bill_company', '') ?: '',
            'bill_address' => $request->post('bill_address'),
            'bill_apt' => $request->post('bill_apt', '') ?: '',
            'bill_city' => $request->post('bill_city'),
            'bill_province' => $request->post('bill_province'),
            'bill_postal_code' => $request->post('bill_postal_code'),

            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'phone' => $request->post('phone'),
            'company' => $request->post('company', '') ?: '',
            'address' => $request->post('address'),
            'apt' => $request->post('apt', '') ?: '',
            'city' => $request->post('city'),
            'province' => $request->post('province'),
            'postal_code' => $request->post('postal_code'),

            'ship_method' => $request->post('ship_method'),

            'amount_subtotal' => $amount_subtotal,
            'amount_tax' => $amount_tax,
            'amount_ship' => $amount_ship,
        ]);

        // Start Send Email
        $invoice = Order::findOrFail($order_id);
        $data = [
            'invoice_no' => $invoice->invoice_no,
            'amount' => $invoice->amount,
            'amount_subtotal' => $invoice->amount_subtotal,
            'amount_ship' => $invoice->amount_ship,
            'amount_tax' => $invoice->amount_tax,
            'name' => $invoice->name,
            'email' => $invoice->email,
        ];

        Mail::to($invoice->email)->send(new OrderMail($data));
        // End Send Email

        $carts = Cart::content();
        foreach ($carts as $cart) {
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'price' => $cart->price,
                'created_at' => Carbon::now(),
            ]);
        }

        Cart::destroy();

        $notification = array(
            'message' => 'Your Order Place Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('order.detail', [$order_id])->with($notification);
    } // end method

    // Stripe Webhook for charge.succeeded
    public function StripeSucceeded()
    {
        $ApiKey = 'sk_test_51LlImKFoyekJx5dtotjNQabZtunwqXD14IIitpIPWya0JBiNlJ9E5Akg1lSB1q3QDJM13IpDNs4cWP1p7MXwvIiS00BnS4aRO5';
        \Stripe\Stripe::setApiKey($ApiKey);
        $payload = @file_get_contents('php://input');
        $event = null;
        try {
            $event = \Stripe\Event::constructFrom(
                json_decode($payload, true)
            );
        } catch(\UnexpectedValueException $e) {
            // Invalid payload
            http_response_code(400);
            exit();
        }
        // Handle the event
        switch ($event->type) {
            case 'charge.succeeded':
                $succeeded = $event->data->object;
                $content_log = json_encode($succeeded, JSON_UNESCAPED_UNICODE);
                Log::info('stripe_StripeSucceeded: ' . $content_log);
                if ($succeeded->status == 'succeeded'){
                    $balance_transaction = $succeeded->balance_transaction;
                    $data_order = $this->orderRepository->getByTransactionId($balance_transaction);
                    if (!$data_order) {
                        Log::info('stripe_StripeSucceeded_notexist: ');
                        return true;
                    }
                    if ($data_order->status !== 'pending') {
                        Log::info('stripe_StripeSucceeded_notpending: ');
                        return true;
                    }

                    $this->orderRepository->updateStatus($data_order, $succeeded->status);
                }
                break;
            default:
                echo 'Received unknown event type ' . $event->type;
                Log::info('stripe_StripeSucceeded_default: ' . $event->type);
                break;
        }
        return true;
    }

    public function OrderDetail($order_id)
    {
        $data_order = $this->orderRepository->getByOrderId($order_id);
        if (!$data_order) {
            $notification = array(
                'message' => 'Order record does not exist',
                'alert-type' => 'error'
            );
            return redirect()->route('home_index')->with($notification);
        }
        $uid = Auth::id();
        if (!$this->orderRepository->checkOrderSelf($data_order, $uid)) {
            $notification = array(
                'message' => 'No permission to view order detail',
                'alert-type' => 'error'
            );
            return redirect()->route('home_index')->with($notification);
        }

        $data_order->ship_method_str = $this->orderRepository->returnStrShip($data_order->ship_method);
        $vars = [
            'data_order' => $data_order,
            'curr_user' => Auth::user(),
        ];
        return view('frontend.order.detail', $vars);
    }
}
