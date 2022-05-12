<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware(['admin'], ['except' => ['showAdminLoginForm', 'adminLogin']]);
        $this->middleware('guest:admin', ['only' => ['showAdminLoginForm', 'adminLogin']]);

    }

    public function index(){
        // dd('dfgd');
        return view("admin.index")->with([
            "products" => Product::all(),
            "orders" => Order::all(),
        ]);
    }
    public function showAdminLoginForm(){
        return view("admin.auth.login");
    }
    public function adminLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        if(auth()->guard("admin")->attempt([
            'email' => $request->email,
            'password' => $request->password
        ],$request->get("remember"))){
            return redirect()->route("admin.index");
        }else{
            return redirect()->route("admin.login");
        }
    }
    public function adminLogout(){
        auth()->guard("admin")->logout();
        return redirect()->route("admin.login");
    }
    public function getProducts(){
        return view("admin.products.index")->with([
            "products" => Product::latest()->paginate(5)
        ]);

    }
    public function getOrders(){
        // return (Order::with("user")->get());
        return view("admin.orders.index")->with([
            "orders" => Order::with("user")->paginate(5),

        ]);

    }
    public function deleteOrders() {

    }
}
