<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScootersController extends Controller
{
    public function newScooters(){
        return view('frontend.newscooters');
    }
    public function popularScooters(){
        return view('frontend.popularscooters');
    }
    public function upcomingScooters(){
        return view('frontend.upcomingscooters');
    }
    public function latestScooters(){
        return view('frontend.latestscooters');
    }
    public function electricScooters(){
        return view('frontend.electricscooters');
    }
}
