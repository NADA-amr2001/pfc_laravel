<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livery;

class CheckOutController extends Controller
{
    //
    public function index() {

        return view('check-out');
      }

       public function save(Request $request) {

         $this->validate($request, [
             'fname' => 'required',
             'lname' => 'required',
             'email' => 'required|email',
             'phone' => 'required',
             'adress' => 'required'
         ]);

         $check = new Livery;

         $check->fname = $request->fname;
         $check->lname = $request->lname;
         $check->email = $request->email;
         $check->phone = $request->phone;
         $check->adress = $request->adress;

         $check->save();


         return back()->with('success', 'Order checked!');

       }
}
