<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home')->with([
            "products" => Product::latest()->paginate(10),
            "categories" => Category::has("products")->get(),
        ]);

    }

    public function __construct()
    {
        $this->middleware(['auth','seller'], ['only' => ['create', 'store']]);

        // $this->middleware("auth:admin")->except([
        //        "index","show"
        //  ]);
    }

     /**
     * show products by category.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getProductByCategory(Category $category)
    {
        $products = $category->products()->paginate(10);

        return view('product')->with([
            "products" => $products,
            "categories" => Category::has("products")->get(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
         //return view("admin.products.create")->with(["categories" => Category::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
    //     //

    //    dd("request()->all()");
    //    return "hhhh";

        $this->validate(request(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'qty'=>'required|numeric',
            'image' => 'required|image',
            'category_id' => 'required|integer|exists:categories,id',

         ]);

          $product = $request->all();
          $name = $request->file('image')->getClientOriginalName();
          $request->image->move(public_path('uploads/images'), $name);
          $path = "/uploads/images/$name";
          $product['image']= $path;
          $product['in_stock']= $request->qty;
        //  Store data in database
        // $product = Product()
        auth()->user()->products()->create( $product);
        // dd($product);
        return back()->with('success', 'Your form has been submitted.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view("products.show")->with([
            "products" => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function search(){
         $q = request()->input('q');
    $products=Product::where('title','like',"%$q%")
    ->orwhere('description','like',"%$q%")
    ->paginate(6);


   return view('products.search')->with('products',$products);
    }



}

