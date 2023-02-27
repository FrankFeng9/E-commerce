<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ProvinceRepository;
use App\Http\Repositories\ShippingRepository;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * @var ProvinceRepository
     */
    private $provinceRepository;

    /**
     * @var ShippingRepository
     */
    private $shippingRepository;

    public function __construct(ProvinceRepository $provinceRepository, ShippingRepository $shippingRepository)
    {
        $this->provinceRepository = $provinceRepository;
        $this->shippingRepository = $shippingRepository;
    }

    public function AddToCart(Request $request, $id)
    {
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }

        $product = Product::findOrFail($id);

        Cart::add([
            'id' => $id,
            'name' => $request->product_name,
            'qty' => $request->quantity,
            'price' => $product->selling_price,
            'weight' => 1,
            'options' => [
                'image' => $product->product_thambnail,
            ],
        ]);
        return response()->json(['success' => 'Successfully Added on Your Cart']);
    } // end mehtod


    // Mini Cart Section
    public function AddMiniCart()
    {
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        $carts = $carts->map(function($item) {
            $item = $item->toArray();
            $item['product_url'] = route('product.details', [$item['id']]);
            return $item;
        });

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => round($cartTotal, 2),
        ));
    } // end method


    // remove mini cart
    public function RemoveMiniCart($rowId)
    {
        Cart::remove($rowId);
        return response()->json(['success' => 'Product Remove from Cart']);
    } // end mehtod


    // add to wishlist mehtod

    public function AddToWishlist(Request $request, $product_id)
    {
        if (Auth::check()) {
            $exists = Wishlist::where('user_id',Auth::id())->where('product_id',$product_id)->first();

            if (!$exists) {
                Wishlist::insert([
                    'user_id' => Auth::id(),
                    'product_id' => $product_id,
                    'created_at' => Carbon::now(),
                ]);
                return response()->json(['success' => 'Successfully Added On Your Wishlist']);
            } else {
                return response()->json(['error' => 'This Product has Already on Your Wishlist']);
            }
        } else {
            return response()->json(['error' => 'At First Login Your Account']);
        }
    } // end method


    // Checkout Method
    public function CheckoutCreate()
    {
        if (Auth::check()) {
            if (Cart::total() > 0) {

                $carts = Cart::content();
                $cartQty = Cart::count();
                $cartTotal = Cart::total();

                $list_province = $this->provinceRepository->listAll()->keyBy('id');
                $list_ship = $this->shippingRepository->list(Auth::id());

                return view('frontend.checkout.checkout_view',compact('carts','cartQty','cartTotal','list_province','list_ship'));
            } else {

                $notification = array(
                    'message' => 'Shopping At list One Product',
                    'alert-type' => 'error'
                );

                return redirect()->to('/')->with($notification);
            }
        } else {

            $notification = array(
                'message' => 'You Need to Login First',
                'alert-type' => 'error'
            );

            return redirect()->route('login')->with($notification);
        }
    } // end method
}
