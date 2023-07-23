<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Models\payment;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
    public function form(){
        // $auth = auth::user()->bookings();
        // foreach( $auth as  $auths){
        //     dd($auths);die();
        // }
        return view('form');
     }
     public static function amount(){
        $auth = auth::user()->id;
        $booking = Booking::where('user_id', $auth)->first();
        $amount = $booking->amount;
        return  $amount ;
        print_r($amount);die();

     }


     /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        //  dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want

        $payment = new payment();
        $payment->email= $paymentDetails['data']['customer']['email'];
        $payment->status= $paymentDetails['data']['status'];
        $payment->amount= $paymentDetails['data']['amount'];
        $payment->trans_id= $paymentDetails['data']['id'];
        $payment->ref_id= $paymentDetails['data']['reference'];
        // dd($payment);

        return $payment->save();

    }




}
