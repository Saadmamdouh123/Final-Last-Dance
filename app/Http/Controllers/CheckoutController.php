<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Checkout\Session as CheckoutSession;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    //
    public function checkout (){
        Stripe::setApiKey(config('stripe.sk'));
        
        $session = CheckoutSession::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            "name" => "LionsGeek Product",
                            "description"=> "nyehehehehe"
                        ],
                        'unit_amount'  =>50*100 ,
                    ],
                    'quantity'   => 2,
                ],

            ],
            'mode'        => 'payment', 
            'success_url' => route('checkout.success'),
            'cancel_url'  => route('calorie_calculator.index'),
        ]);

        return redirect()->away($session->url);
    }
    public function success()
    {
        
        // $user = Auth::user();


        $trainerRequest = Trainer::where('user_id', Auth::user()->id)->first();

            // $trainerRequest->update(['payment' => true]);
            
            return redirect()->route('sessions.create')->with('success', 'Payment successful, your trainer request is now active.');
        
        
    }
    
}
