<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class WishlistController extends Controller
{
    public function addProductToWishlist(Request $request)
    {
        Cart::instance("wishlist")->add($request->id,$request->name,$request->price)->associate('App\Models\Product');
        return response()->json(['status'=> 200,'message'=> 'Success ! item successfully added to your wishlist.']);
    }
    
    public function getWishlistedProducts()
    {
        $items = Cart::instance("wishlist")->content();
        return view('users.shop',['items'=>$items]);
    }
}
