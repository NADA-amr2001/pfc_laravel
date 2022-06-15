<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\User;
use App\Models\Product;


class Wishlist extends Model
{
    use HasFactory;


    protected $table = "wishlists";

    protected $fillable = [
        'product_id',
        'user_id'
    ];
    public static function countWishlist($product_id) {
        $countWishlist = Wishlist::where(['user_id' => Auth::user()->id, 'product_id' => $product_id])->count();
        return $countWishlist;
    }

    public function user(){
        return $this->belongsTo(User::class);
        }

        public function product(){
        return $this->belongsToMany(Product::class,'wishlist','user_id', 'product_id');
        }
}
