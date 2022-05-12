<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use HasFactory;
use App\Models\Product;


class PaypalPaymentController extends Controller
{
    //

    public function __construct()
    {
       // $this->middleware("auth");
        $this->middleware('auth');

    }

    public function handlePayment(){
        $data =[];
        $data['items'] = [     ];
        $total = 0;

        foreach(\Cart::getContent() as $item){
            array_push($data['items'],[
                'title' =>$item->title,
                'price '=> (int) ($item->price / 14),
                'description'=>$item ->associatedModel->description,
                //'desc' => $item->product->description,
                'qty' => $item->quantity
            ]);
            $total += $item['price'] * $item['quantity'];
        }

            $data['invoice_id'] = auth()->user()->id  ;
            $data['invoice_description'] = "Commande #{data['inovice_id']} ";
            $data['return_url'] = route('success.payment')      ;
            $data['cancel_url'] = route('cancel.payment')  ;



            $data['total'] = $total ;
            $paypalModule = new ExpressCheckout();


            $res =  $paypalModule ->setExpressCheckout($data);
            $res =  $paypalModule ->setExpressCheckout($data,true);


            return redirect($res['paypal_link']);



    }

    public function paymentCancel(){
        return redirect()->route('cart.index')->with([
            'info' => 'Vous avez annuler le paiement'
        ]);
    }

    public function paymentSuccess(Request $request){


        $paypalModule = new ExpressCheckout ;
        $response =$paypalModule->getExpressCheckoutDetails($request->token);

        if(in_array($response['ACK'],['SUCCESS','SUCCESSWITHWARNING'])){

            foreach(\Cart::getContent() as $item) {
            Order::create([
                "user_id"=>auth()->user()->id,
                "product_name"=> $item->name ,
                "qty"=>$item->quantity,
                "price"=>$item->price,
                "total"=>$item->price * $item->quantity,
                "paid"=>1,

            ]);
            \Cart::clear();

          }

          return redirect()->route('cart.index')->with([
            'success' => 'Paiement effectue avec succes'
          ]);

        }



    }
}

