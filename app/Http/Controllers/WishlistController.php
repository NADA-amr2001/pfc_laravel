<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\User;
use App\Models\Product;

class WishlistController extends Controller
{
    //
    public function index()
{
    $user = Auth::user();
    // dd($wishlists);
    $wishlists = Wishlist::with('product')
    ->where('user_id', $user->id)
    ->orderby('id', 'desc')
    ->paginate(6);
    //dd($wishlists);
     return view('home', compact('user', 'wishlists'));

}

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

     $product = Wishlist::findOrfail($id);
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

public function destroy($id)
    {
        //dd(id);
        //delete data

         $product = Wishlist::findOrfail($id);


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


}
