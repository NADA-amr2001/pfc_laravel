<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Auth;

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
            return view('products.create');

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
          return redirect('/');
           // return redirect()->route("admin.products")->withSucces("Updated Product");

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Product $product)
    // {
    //     //

    // }
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
             return redirect("/")->with("delete", "Product has been deleted");


             // Delete the product
         // Product::destroy($id);

          // Store a message
          //session()->flash('msg','Product has been deleted');

          // Redirect back
          //return redirect('admin/products');
    }

    public function search(){
         $q = request()->input('q');
    $products=Product::where('title','like',"%$q%")
    ->orwhere('description','like',"%$q%")
    ->paginate(6);


   return view('products.search')->with('products',$products);
    }

    public function updatewishlist( Request $request){
        //dd($request);
        // if($request->ajax()) {
            $data = $request->all();
            // dd($data['product_id']);
            $countWishlist = Wishlist::countWishlist($data['product_id']);

            if($countWishlist == 0) {
                $whishlist = Wishlist::create([
                    "user_id" => $data['user_id'],
                    "product_id" => $data['product_id'],
                ]);
                // $wishlist->user_id = $data['user_id'];
                // $wishlist->product_id = $data['product_id'];
                // $wishlist->save();
                return response()->json(['action' => 'add', 'message' => 'product Added Successefully to Wishlist']);
            }else{
                Wishlist::where(['user_id' => Auth::user()->id, 'product_id' => $data['product_id']])->delete();
                return response()->json(['action' => 'remove', 'message' => 'product Removed Successefully to Wishlist']);
            }
        // }

    }
    public function wishlist(){
        return $this-belongsToMany(Wishlist::class);
     }



}

