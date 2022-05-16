<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        return view('products')->with([
            "products" => Product::latest()->paginate(10),
            "categories" => Category::has("products")->get(),
        ]);

    }

    public function __construct()
    {
        $this->middleware(['auth','seller'], ['only' => ['create', 'store']]);

        $this->middleware("auth:admin", ['except' => ['index', 'show', 'getProductByCategory']]);

        // $this->middleware("auth:admin")->except([
        //     "index","show"
        // ]);
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
        if (Auth::guard('admin')->check()) {
            return view("admin.products.create")->with(["categories" => Category::all()]);
        } else {
            return view('products.create');
        }
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
        //

       dd("request()->all()");
       return "hhhh";

       $this->validate(request(), [
        'title' => 'required|min:3',
        'description' => 'required|min:5',
        'price' => 'required|numeric',
        'qty'=>'required|numeric',
        'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        'category_id' => 'required|integer|exists:categories,id',

     ]);

        $this->validate(request(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'qty'=>'required|numeric',
            'image' => 'required|image',
            'category_id' => 'required|integer|exists:categories,id',

         ]);


          $product = $request->all();
        //   $name = $request->file('image')->getClientOriginalName();
        //   $path = $request->file('image')->store('public/uploads/images');
        //   $product['image']= $path;
        //  Store data in database
        // $product = Product()
        $product = auth()->user()->products()->create( $product);
        dd($product);
        return back()->with('success', 'Your form has been submitted.');

        //add data
        if($request->has('image')){
            $file = $request->image;
            $imageName = "imagges/products/".time()."_".file->getClientOriginalName();
            $file->move(public_path("images/products"),$imageName);
            $title = $request->title;
            Product::create([
                "title" => $title,
                "price" => $request->price,
                "old_price" => $request->old_price,
                "description" => $request->description,
                "in_stock" => $request->in_stock,
                "category_id" => $request->category_id,
                "image" => $imageName,

            ]);
            return redirect()->route("admin.products")->withSuccess("added product");
        }


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
        return view("admin.products.edit")->with([
            "products" => $product,
            "categories" => Category::all()
        ]);
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
        $this->validate(request(), [
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'price' => 'required|numeric',
            'qty'=>'required|numeric',
            'image' => '|image|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required|integer|exists:categories,id',

         ]);

         //update data

         if($request->has('image')){
             $image_path = public_path("images/products/".$product->image);
             if(File::exists()($image_path)){
                 unlink($image_path);
             }
            $file = $request->image;
            $imageName = "imagges/products/".time()."_".file->getClientOriginalName();
            $file->move(public_path("images/products"),$imageName);
            $product->image = $imageName;
        }
        $title = $request->title;
            $product->update([
                "title" => $title,
                "price" => $request->price,
                "old_price" => $request->old_price,
                "description" => $request->description,
                "in_stock" => $request->in_stock,
                "category_id" => $request->category_id,
                "image" => $product->image,

            ]);
            return redirect()->route("admin.products")->withSuccess("updated product");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Product $product)
    // {
    //      //delete data
    //          $image_path = public_path("images/products/".$product->image);
    //          if(File::exists()($image_path)){
    //              unlink($image_path);
    //          }

    //         $product->delete();
    //         return redirect()->route("admin.products")->withSuccess("deleted product");

    // }
    
    public function search(){
         $q = request()->input('q');
    $products=Product::where('title','like',"%$q%")
    ->orwhere('description','like',"%$q%")
    ->paginate(6);


   return view('products.search')->with('products',$products);
    }



}
