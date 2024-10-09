<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewCarsController extends Controller
{
    public function newCars(){
        return view('frontend.newcars');
    }

    public function popularCars(){
        return view('frontend.popularcars');
    }
    public function upcomingCars(){
        return view('frontend.upcomingcars');
    }
    public function latestCars(){
        return view('frontend.latestcars');
    }
    public function electricCars(){
        return view('frontend.electriccars');
    }
}
