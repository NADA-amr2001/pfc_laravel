<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use App\Models\Caregory;


class ShopComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-component');
    }

    // public function addToWishlist($product_id,$product_name,$product_price){
    //     \Cart::instance('wishlist')->add($product_id,$product_name,$product_price)->associated('App\Models\Product');
    // }
}
