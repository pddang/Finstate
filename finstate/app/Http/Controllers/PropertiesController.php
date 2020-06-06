<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertiesController extends Controller
{
    public function show($id){
        $listing = Property::find($id);
        return view('properties.show',['listing' => $listing]);
    }

    public function index(){
        $listings = Property::all();
        return view('properties.index',['listings' => $listings]);
    }
}
