<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    //return cart items
    public function index(){
        $cart = \Cart::getContent();
        $total = 0;
        foreach ($cart as $item){
            $total += $item["price"]*$item["quantity"];
        }
        // return $cart;
        // dd(\Cart::getContent());

        return view("cart.index")->with([
            "items" =>$cart,
            "total"=>$total
        ]);
    }

    //add item to cart
    public function addProductToCart(Request $request,Product $product){
       // dd($request);
        \Cart::add(array(
            "id" => $product->id,
            "name" => $product->title,
            // "name" => $product->title,
            "price" => $product->price,
           // "description" => $product->description,
            "quantity" => $request->qty,
            "attributes" => array(),
            "associatedModel" => $product,
        ));
        return redirect()->route("cart.index");

    }

    //update item to cart
    public function updateProductOnCart(Request $request,Product $product){
        \Cart::update($product->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qty
            )
        ));
        return redirect()->route("cart.index");

    }
    //remove item from cart
    public function removeProductFromCart(Product $product){
        \Cart::remove($product->id);
        return redirect()->route("cart.index");

    }

    public function store(Request $request){


      $duplicata =  \Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id == $request->product_id;
        });

        if($duplicata->isNotEmpty()) {

        return redirect()->route('products')->with('success', 'the product has already been added');
        }

        $product = Product::find($request->product_id);

        \Cart::add($product->id, $product->title, 1, $product->price)->associate('App\Product');

        return redirect()->route('products')->with('success', 'the product has been added');
    }

}
