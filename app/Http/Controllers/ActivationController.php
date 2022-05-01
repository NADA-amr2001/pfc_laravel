<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IlluminateSupport\Facades\Auth;
use IlluminateSupport\Facades\Email;
use App\Mail\ActivateYourAccount;

class ActivationController extends Controller
{
    //activate your account
    public function activation($code){
        $user = User::whereCode($code)->first();
        $user->code = null;
        $user->update([
            "activate" => 1
        ]);
        Auth::login($user);
        return redirect("/")->withSuccess("Connected");
    }
    
    //send email to activate user account
    public function resendCode($code){
        $user = User::whereEmail($email)->first();
        if($user->activate){
            return redirect("/");
        }

        Mail::to($user)->send(new ActivateYourAccount($user->code));
        return redirect("/login")->withSuccess("The activation link is sent");
    }
}
