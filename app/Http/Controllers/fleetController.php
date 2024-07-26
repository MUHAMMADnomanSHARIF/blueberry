<?php

namespace App\Http\Controllers;

use App\Models\bookingDetail;
use Illuminate\Http\Request;

class fleetController extends Controller
{
    public function store(Request $request)
    {
        // $request->validate([
        //     'firstname' => 'required|string',
        //     'lastname' => 'required|string',
        //     'phone' => 'required|string',
        //     'email' => 'required|email',
        //     'passengercount' => 'required|numeric',
        //     'suitcasecount' => 'required|numeric',
        //     'flightnumber' => 'required|string',
        //     'nameboard' => 'required|string',
        //     'pickLocation' => 'required|string',
        //     // Add more validation rules as needed...
        // ]);


        $booking = new bookingDetail();

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $fullname = $firstname . " " . $lastname;

        $booking->name = $fullname;
        $booking->phoneNumber = $request->phone;
        $booking->email = $request->email;
        $booking->pickLocation = $request->source;
        $booking->destination = $request->destination;
        $booking->noHour = $request->hour;
        $booking->rideType = $request->ridetype;
        $booking->noPassenger = $request->passengercount;
        $booking->noSuitcase = $request->suitcasecount;
        $booking->flightNumber = $request->flightnumber;
        $booking->nameBoard = $request->nameboard;
        $booking->additionalrequirments = $request->textarea;
        $booking->carname = $request->carname;
        $booking->fare = $request->carfare;
        $booking->pickDate = $request->date;
        $booking->pickTime = $request->time;
        $booking->save();
        $id = '';
        $checkout = [
            $id => [
                "name" => $fullname,
                "carname" => $request->carname,
                "fare" => $request->carfare,
                "pickdate" => $request->date,
                "picktime" => $request->time
            ]
        ];
        session()->put('detail', $checkout);

        return redirect()->route('stripe.index');
    }

    public function Payment(Request $request)
    {
        $userDetail = bookingDetail::first();
        $lastEntity = bookingDetail::latest()->first();

        return view('theam.stripe', compact('lastEntity'))->with(['userDetail' => $userDetail]);

    }
}
