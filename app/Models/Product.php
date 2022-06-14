<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "title","description","price","old_price","image","in_stock","qty","category_id","user_id"
    ];
    protected $with = ["user"];
    /*public function getRouteKeyName(){
        return "slug";
    }*/

    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
    public function category()
{
    return $this->belongsTo(Category::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

public function wishlist(){
    return $this->belongsToMany(Wishlist::class);
 }
}
