<?php

namespace App\Http\Controllers;

use App\Models\bookingDetail;
use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(): View
    {
        // Retrieve the carfare value from the session
        // dd(session()->get('detail'));
        $fare = session()->get('fare');
        // dd($fare);
        $userDetails = bookingDetail::all();

        // Or retrieve it directly from the query parameters
        // $carfare = request()->query('carfare');

        return view('theam.stripe')->with(['userDetails' => $userDetails,]);
    }


    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        $userPayment = bookingDetail::value('fare');

        Stripe\Charge::create([
            "amount" => $userPayment * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);
        session()->forget('detail');

        return back()->with('success', 'Payment successful!');
    }
}
