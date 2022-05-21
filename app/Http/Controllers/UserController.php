<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
            "users" => User::latest()->paginate(10),
            "orders" => Order::all(),
        ]);

    }
    public function __construct(){
       // $this->middleware('auth', ['only' => ['showAdminLoginForm', 'adminLogin']]);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        return view("Profile.edit")->with([
            "user" => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $request = request();
       // dd($request);

        $this->validate(request(), [
            'name' => 'min:3',

            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
         ]);



         $user = User::findOrfail($id);
        // dd('helloooooooooooo');
        //update data
        if($request->has("image")){
            $image_path = public_path($user->image);
            if(File::exists($image_path)){
            try {
                unlink($image_path);
            } catch (\Throwable $th) {
                //throw $th;
            }
            }
            $file = $request->image;
            $imageName = "uploads/profile/".time()."_".$file->getClientOriginalName();
            $file->move(public_path("uploads/profile/"),$imageName);
            $user->image = $imageName;
        }
        $name = $request->name;

            $user->update([
                "name" => $name,
                "adress" => $request->adress,
                "phone" => $request->phone,
                "image" =>  $user->image,

            ]);
            // Store a message in session
          $request->session()->flash('msg', 'User has been updated');

          // Redirect
          return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function myprofile()
    {
       return view('profile');
    }
    // public function myOrder()
    // {
    //    return view('myOrder');
    // }
    public function showOrders()
    {  $orders = Order::where('user_id',Auth::id())->get();
        return view('myOrder',compact('orders'));
    }
    public function showProducts()
    {
        //dd('hellooooooo');
         $products = Product::where('user_id',Auth::id())->get();
        return view('myProduct',compact('products'));
    }
    public function pass()
    {

       return view('changePassword');
    }
     /**
     * Change the current password
     * @param Request $request
     * @return Renderable
     */
    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $userPassword = $user->password;

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password'=>'password not match']);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->back()->with('success','password successfully updated');
    }
}
