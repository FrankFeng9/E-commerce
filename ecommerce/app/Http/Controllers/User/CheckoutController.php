<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Repositories\BillingRepository;
use App\Http\Repositories\OrderRepository;
use App\Http\Repositories\ProvinceRepository;
use App\Http\Repositories\ShippingRepository;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Rules\PhoneRule;
use App\Rules\PostalCodeRule;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * @var ProvinceRepository
     */
    private $provinceRepository;

    public function __construct(ProvinceRepository $provinceRepository)
    {
        $this->provinceRepository = $provinceRepository;
    }

    public function ShipGetAjax(Request $request, ShippingRepository $shippingRepository)
    {
        $id = $request->input('id');
        $data = $shippingRepository->get($id);
        return response()->json($data);
    }

    public function BillGetAjax(Request $request, ShippingRepository $shippingRepository)
    {
        $id = $request->input('id');
        if ($id == -1) {
            $data = $request->session()->get('checkout_store');
            return response()->json($data);
        }
        $data = $shippingRepository->get($id);
        return response()->json($data);
    }

    public function CheckoutStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', new PhoneRule],
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postal_code' => ['required', new PostalCodeRule],
        ]);

        $data = $request->input();
        $cartTotal = round(Cart::total(), 2);

        $request->session()->put('checkout_store', $data);

        $list_province = $this->provinceRepository->listAll()->keyBy('id');
        return redirect()->route('checkout.stripe');
    }// end mehtod.

    public function CheckoutStripe(Request $request, ShippingRepository $shippingRepository, OrderRepository $orderRepository)
    {
        $data = $request->session()->get('checkout_store');
        $cartTotal = round(Cart::total(), 2);

        $list_province = $this->provinceRepository->listAll()->keyBy('id');
        $list_bill = $shippingRepository->list(Auth::id());

        $shipMethodRel = Order::shipMethodRel();

        // The tax rate is 13%
        $amount_tax = $orderRepository->calcTax($cartTotal);

        $vars = [
            'data' => $data,
            'cartTotal' => $cartTotal,
            'list_province' => $list_province,
            'list_bill' => $list_bill,
            'shipMethodRel' => $shipMethodRel,
            'amount_tax' => $amount_tax,
        ];
        return view('frontend.payment.stripe', $vars);
    }
}
