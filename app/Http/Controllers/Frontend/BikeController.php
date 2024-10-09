<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    
    public function newBikes(){
        return view('frontend.newbike');
    }
    public function electricBikes(){
        return view('frontend.electricbikes');
    }
    public function latestBikes(){
        return view('frontend.latestbikes');
    }
    public function upcomingBikes(){
        return view('frontend.upcomingbikes');
    }
    public function popularBikes(){
        return view('frontend.popularbikes');
    }
}
