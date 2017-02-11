<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suburb;
use App\Property;
use App\PropertyType;

class HomeController extends Controller
{

    function index(){

       return view('home.home');
    }


    function search() {

        //Retrieve all suburbs data
        $suburbs  = Suburb::pluck('name','id');

        //Retrieve all properties
        $properties = Property::with('propType')->get();

        return view('search.search',compact('suburbs','properties'));

    }

}
