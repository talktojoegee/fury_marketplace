<?php

namespace App\Http\Controllers;
use App\Models\BulkSmsAccount;
use Illuminate\Http\Request;
use Yabacon\Paystack;


class OnlinePaymentController extends Controller
{


    public function __construct()
    {
        $this->bulksmsaccount = new BulkSmsAccount();
    }

    public function initializePaystack(){

    }
    public function processOnlinePayment(Request $request){
       // return dd('hello');
        /*
         * Transaction Type (Transaction):
         *  1 = New tenant subscription
         *  2 = Subscription Renewal
         *  3 = Invoice Payment
         *  4 = SMS Top-up
         */
        $reference = isset($request->reference) ? $request->reference : '';
        if(!$reference){
            die('No reference supplied');
        }
        $paystack = new Paystack(config('app.paystack_secret_key'));
        try {
            // verify using the library
            $tranx = $paystack->transaction->verify([
                'reference'=>$reference, // unique to transactions
            ]);
        }catch (Paystack\Exception\ApiException $exception){
            session()->flash("error", "Whoops! Something went wrong.");
            return redirect()->route('top-up');
        }
        if ('success' === $tranx->data->status) {
            try {
                //return dd($tranx->data->metadata->cost);
                $transaction_type = $tranx->data->metadata->transaction ;
                switch ($transaction_type){
                    case 4:
                        $this->bulksmsaccount->creditAccount($reference,
                            $tranx->data->amount, //50900
                            $tranx->data->metadata->cost, $tranx->data->metadata->user); //cost = 500
                        break;
                }
                switch ($transaction_type){
                    case 4:
                        session()->flash("success", "Your top-up transaction was successful.");
                        return redirect()->route('top-up');
                }
            }catch (Paystack\Exception\ApiException $ex){

            }

        }
    }


}
