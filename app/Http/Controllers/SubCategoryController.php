<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //
    public function index()
    {
        //
        return view('home')->with([
            "SubCategories" => Subcategory::latest()->paginate(10),
            "categories" => Category::has("SubCategories")->get(),
        ]);

    }

    public function getSubCategoryByCategory(Category $category)
    {
        $subCategories = $category->subCategories();

        return view('product')->with([
            "SubCategories" => $subCategories,
            "SubCategories" => Category::has("SubCategories")->get(),
        ]);

    }
}
