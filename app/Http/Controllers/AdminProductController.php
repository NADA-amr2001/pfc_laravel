<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Category;

class AdminProductController extends Controller
{
    //

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
        $this->middleware("auth:admin")->except([
               "index","show"
         ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("admin.products.create")->with(["categories" => Category::all()]);

    }
    public function catg()
    {
         return view("admin.products.catg")->with(["categories" => Category::all()]);

    }

    public function add_catg(Request $request){
        //return ('hhhhhhhh');
       // dd($request);
        $this->validate(request(), [
            'title' => 'required|min:3',
         ]);

         $title = $request->title;

            Category::create([
                "title" => $title,
            ]);
             // Sessions Message
         $request->session()->flash('msg','Category has been added');

            // Redirect
            return redirect('admin/products');
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

       //  dd("request()->all()");
      // return "hhhh";

        $this->validate(request(), [
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'price' => 'required|numeric',
            'qty'=>'required|numeric',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required|integer',

         ]);


        //add data
        if($request->has("image")){
            $file = $request->image;
            $imageName = "images/products/".time()."_".$file->getClientOriginalName();
            $file->move(public_path("images/products"),$imageName);
            $title = $request->title;

            Product::create([
                "title" => $title,
                "description" => $request->description,
                "price" => $request->price,
                "in_stock" => $request->qty,
                "category_id" => $request->category_id,
                "image" => $imageName,
            ]);
             // Sessions Message
         $request->session()->flash('msg','Your product has been added');

            // Redirect
            return redirect('admin/products');
            //return redirect()->route("admin.products")->withSucces("Added Product");
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
    public function edit( $id)
    {
        //
        return view("admin.products.edit")->with([
            "product" => Product::find($id),
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
    public function update($id)
    {
        //
        $request = request();

        $this->validate(request(), [
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'price' => 'required|numeric',
            'qty'=>'required|numeric',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required|integer',

         ]);

         //dd($product->id);

         $product = Product::findOrfail($id);
        //update data
        if($request->has("image")){
            $image_path = public_path($product->image);
            if(File::exists($image_path)){
            try {
                unlink($image_path);
            } catch (\Throwable $th) {
                //throw $th;
            }
            }
            $file = $request->image;
            $imageName = "images/products/".time()."_".$file->getClientOriginalName();
            $file->move(public_path("images/products"),$imageName);
            $product->image = $imageName;
        }
        $title = $request->title;

            $product->update([
                "title" => $title,
                "description" => $request->description,
                "price" => $request->price,
                "in_stock" => $request->qty,
                "qty" => $request->qty,
                "category_id" => $request->category_id,
                "image" =>  $product->image,
            ]);
            // Store a message in session
          $request->session()->flash('msg', 'Product has been updated');

          // Redirect
          return redirect('admin/products');
           // return redirect()->route("admin.products")->withSucces("Updated Product");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd(id);
        //delete data

        $product = Product::findOrfail($id);

            $image_path = public_path("images/products".$product->image);
            if(File::exists($image_path)){
                unlink($image_path);
            }


           // dd($product);
             $product->delete();
             return redirect()->route("admin.products")->with("delete", "Product has been deleted");


             // Delete the product
         // Product::destroy($id);

          // Store a message
          //session()->flash('msg','Product has been deleted');

          // Redirect back
          //return redirect('admin/products');
    }


}
