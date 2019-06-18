<?php

namespace App\Http\Controllers;

use App\ServiceUnits;
use Illuminate\Http\Request;
use App\Http\Requests;

class ServiceUnitsController extends Controller
{
    public function index(Request $request)
    {
        $service_units = ServiceUnits::filter($request->all())->paginate(10);
        return view('service_units.index', ['service_units' => $service_units]);
        // print_r($service_units);
        // return view('home')->withUnits($units);
    }
}
