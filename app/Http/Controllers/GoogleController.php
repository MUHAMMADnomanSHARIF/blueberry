<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class GoogleController extends Controller
{
    public function index(): View
    {
        return view('googleAutocomplete');
    }
    public function calculate(Request $request)
    {
        $latitud = $request->latitude;
        $longitud = $request->longitude;
        $latitud2 = $request->latitude1;
        $longitud2 = $request->longitude1;
        $ridetype = $request->ridetype;
        $source = $request->source;
        $dest = $request->dest;
        $hour = "";



        $theta = $longitud - $longitud2;
        $miles = (sin(deg2rad($latitud)) * sin(deg2rad($latitud2))) + (cos(deg2rad($latitud)) * cos(deg2rad($latitud2)) * cos(deg2rad($theta)));
        $miles = acos($miles);
        $miles = rad2deg($miles);
        $miles = $miles * 60 * 1.1515;
        $feet = $miles * 5280;
        $yards = $feet / 3;
        $kilometers = $miles * 1.609344;
        $meters = $kilometers * 1000;


        $sclass = round(($miles * 12.12), 2);
        $vclass = round(($miles * 12.12), 2);
        $eclass = round(($miles * 10.63), 2);


        return view('theam.selectYourCar', compact('sclass', 'vclass', 'eclass', 'ridetype', 'source', 'dest', 'hour'));
    }

    public function calculateHour(Request $request)
    {

        $source = $request->source;
        $hour = $request->hour;
        $ridetype = $request->ridetype;

        $sclass = round(($hour * 75), 2);
        $vclass = round(($hour * 75), 2);
        $eclass = round(($hour * 65), 2);
        $dest = "";


        return view('theam.selectYourCar', compact('sclass', 'vclass', 'eclass', 'ridetype', 'source', 'dest', 'hour'));
    }

    public function booking()
    {
        return view('theam.bookingDetail');
    }

    public function fare(Request $request)
    {

        if (isset($request->sclass)) {
            $carFare = $request->sclass;
        } elseif (isset($request->vclass)) {
            $carFare = $request->vclass;
        } elseif (isset($request->eclass)) {
            $carFare = $request->eclass;
        } else {
            $carfare = '';
        }
        if (isset($request->sclassname)) {
            $carName = $request->sclassname;
        } elseif (isset($request->vclassname)) {
            $carName = $request->vclassname;
        } elseif (isset($request->eclassname)) {
            $carName = $request->eclassname;
        } else {
            $carName = '';
        }
        $dest = $request->dest;
        $ridetype = $request->ridetype;
        $source = $request->source;
        $hour = $request->hour;


        return view('theam.bookingDetail', compact('carName', 'carFare', 'ridetype', 'source', 'dest', 'hour'));
    }
}
