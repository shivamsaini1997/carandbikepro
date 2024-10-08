<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewCarsController extends Controller
{
    public function newCars(){
        return view('frontend.newcars');
    }
}
