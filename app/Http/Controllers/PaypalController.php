<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalController extends Controller
{
    //
    public function index (Request $request){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AYSq3RDGsmBLJE-otTkBtM-jBRd1TCQwFf9RGfwddNXWz0uFU9ztymylOhRS',     // ClientID
                'EGnHDxD_qRPdaLdZz8iCr8N7_MzF-YHPTkjs6NKYQvQSBngp4PTTVWkPZRbL'      // ClientSecret
            )

    );
   // dd( $apiContext);
   $payer = new \PayPal\Api\Payer();
   $payer->setPaymentMethod('paypal');

$amount = new \PayPal\Api\Amount();
$amount->setTotal('1500.00');
$amount->setCurrency('dz');

$transaction = new \PayPal\Api\Transaction();
$transaction->setAmount($amount);

$redirectUrls = new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl(route('return.paypal'))
            ->setCancelUrl(route('cancel.paypal'));

$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale')
       ->setPayer($payer);

    //    try {
    //     $payment->create($apiContext);
    //     echo $payment;

    //     echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";

    //     return redirect($payment->getApprovalLink());
    // }
    // catch (\PayPal\Exception\PayPalConnectionException $ex) {
    //     // This will print the detailed information on the exception.
    //     //REALLY HELPFUL FOR DEBUGGING
    //     echo $ex->getData();
    // }
  }

  public function paypalreturn(){
    dd(\request()->all());

}

public function paypalcancel(){
    return("order canceled");

}


}
