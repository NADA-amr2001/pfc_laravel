<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\User;
use App\Models\Product;

class WishlistController extends Controller
{
    //
    public function index()
{
    $user = Auth::user();
    // dd($wishlists);
    $wishlists = Wishlist::with('product')
    ->where('user_id', $user->id)
    ->orderby('id', 'desc')
    ->paginate(6);
    //dd($wishlists);
     return view('home', compact('user', 'wishlists'));

}

}
