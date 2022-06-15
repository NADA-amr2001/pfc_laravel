<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //
    public function getSubCategoryByCategory(Category $category)
    {
        $subCategories = $category->subCategories();

        return view('product')->with([
            "subCategories" => $subCategories,
            "subCategories" => Category::has("subCategories")->get(),
        ]);

    }
}
