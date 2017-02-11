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


    function listProperties(){

        //Retrieve all suburbs data
        $suburbs  = Suburb::pluck('name','id');

        //Retrieve all properties
        $properties = Property::with('propType')->get();

        return view('search.search',compact('suburbs','properties'));

    }

    function getProperties(Request $request){

        //Retrieve all suburbs data
        $suburbs  = Suburb::pluck('name','id');

        //Retrieve all properties
        $properties = Property::with('propType')->where('suburb_id',$request['suburb'])->where('no_bedrooms',$request['no_bedroom'])->get();

        return view('search.search',compact('suburbs','properties'));

    }
}
