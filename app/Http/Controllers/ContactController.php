<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller {

      public function index() {

       return view('contact-us');
     }

      public function save(Request $request) {

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'need' => 'required',
            'msg' => 'required'
        ]);

        $contact = new Contact;

        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->need = $request->need;
        $contact->msg = $request->msg;

        $contact->save();

        return back()->with('success', 'Thank you for contact us!');

    }
}
