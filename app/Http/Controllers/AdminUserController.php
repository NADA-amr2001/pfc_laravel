<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("auth:admin")->except([
               "index","show"
         ]);
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // dd($id);
        //delete data

        $user = User::findOrfail($id);

            // $image_path = public_path("images/users".$user->image);
            // if(File::exists($image_path)){
            //     unlink($image_path);
            // }


           // dd($user);
             $user->delete();
             return redirect()->route("admin.users")->with("delete", "User has been deleted");


             // Delete the product
         // Product::destroy($id);

          // Store a message
          //session()->flash('msg','Product has been deleted');

          // Redirect back
          //return redirect('admin/products');
    }

}
