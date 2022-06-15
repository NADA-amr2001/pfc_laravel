<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

use Illuminate\Http\Request;
class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth','admin'], ['only' => ['create', 'store']]);

        // $this->middleware("auth:admin")->except([
        //     "index","show"
        // ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $parentCategories = \App\Category::where('parent_id',null)->get();

        //  return view('products', compact('parentCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $this->validate(request(), [
            'title' => 'required|string',

         ]);

         if($this->category_id){
            $category = new Subcategory();
            $category->name = $this->name;
            $category->category_id = $this->category_id;
            $category->save();
         }
         else{
            $category = Category::create(request()->all());
         }
         $category = Category::create(request()->all());
        return back()->with('success', 'Your form has been submitted.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
            // $category = Category::findOrfail($id);

            return view('products')->with([
                "products" => $category->products()->with('user')->paginate(10),
                "categories" =>Category::has("products.user")->get(),
                "subCategories" => $category->subCategories()->with('product'),
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
