<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

class CartPageController extends Controller
{
    public function MyCart()
    {
    	return view('frontend.wishlist.view_mycart');
    }

    public function GetCartProduct()
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
    } //end method

    public function RemoveCartProduct($rowId)
    {
        Cart::remove($rowId);

        return response()->json(['success' => 'Successfully Remove From Cart']);
    }

    // Cart Increment
    public function CartIncrement($rowId)
    {
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty + 1);

        return response()->json('increment');
    } // end mehtod


   // Cart Decrement
    public function CartDecrement($rowId)
    {
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty - 1);

        return response()->json('Decrement');
    }// end mehtod
}
