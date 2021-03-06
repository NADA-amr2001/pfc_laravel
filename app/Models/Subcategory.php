<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable =["title","category_id"];

    protected $table = "SubCategories";

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
