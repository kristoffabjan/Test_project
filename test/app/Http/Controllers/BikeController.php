<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function new_bike(){
        return view('newBike');
    }
}
