<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

use Illuminate\Http\Request;
class OrderController extends Controller
{
    public function __construct(){
        // $this->middleware(['auth'], ['except' => []]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Order::with("user")->all();
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $order = new Order();
        $order->total = 0;
        $cart = \Cart::getContent();
        foreach ($cart as $item){
            $product = Product::find($item["id"]);
            $product->in_stock = $product->in_stock-min($item["quantity"],$product->in_stock);
            $product->save();

            $order->product_name .= $product->title ."x(".$item["quantity"] .") | ";
            $order->total += $item["price"]*$item["quantity"];
            $order->user_id =$request->user()->id;

        }


        $order->qty = 0;
        $order->price = 0;
        $order->save();
        \Cart::clear();
        // return $cart;
        // dd(\Cart::getContent());
        return redirect('/?message=your order has been created!');

        // return view("welcome")->with([
        //     "info" => "your order has been created!",
        // ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        dd($order->id);
        $order = Order::findOrfail($id);
       // dd($order);
        $order->update([
            "delivered" => 1
        ]);
         return redirect()->back()->withSuccess("order updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        //dd($product->id);

        $order = Order::findOrfail($id);
       // dd($order);


        $order->delete();
         return redirect()->back()->with("delete", "Order has been deleted");
    }
}
