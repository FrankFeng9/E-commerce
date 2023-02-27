<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

class WishlistController extends Controller
{

	public function ViewWishlist()
    {
		return view('frontend.wishlist.view_wishlist');
	}

	public function GetWishlistProduct()
    {
		$wishlist = Wishlist::has('product')->where('user_id', Auth::id())->latest('id')->get();

        $wishlist = $wishlist->map(function ($item) {
            $product_url = route('product.details', [$item->product->id]);
            $item->product->product_url = $product_url;
            return $item;
        });

		return response()->json($wishlist);
	} // end mehtod


	public function RemoveWishlistProduct($id)
    {
		Wishlist::where('user_id',Auth::id())->where('id',$id)->delete();
		return response()->json(['success' => 'Successfully Product Remove']);
	}
}
