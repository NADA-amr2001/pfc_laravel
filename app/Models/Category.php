<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $fillable =["title"];

    /*public function getRouteKeyName(){
        return "slug";
    }*/

    protected $table = "categories";


    public function categories(){
        return $this->hasMany(Category::class, 'category_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
