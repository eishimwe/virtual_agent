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

        //https://refreshless.com/nouislider/examples/

        //Retrieve all suburbs data
        $suburbs  = Suburb::pluck('name','id');
        $suburbs->put('0',"Any");

        //Retrieve all properties
        $properties = Property::with('propType')->get();

        return view('search.search',compact('suburbs','properties'));

    }

    function getProperties(Request $request){

        //Retrieve all suburbs data
        $suburbs  = Suburb::pluck('name','id');
        $suburbs->put('0',"Any");

        //Retrieve all properties
        $suburb = ($request['suburb'] == 0)?'%':$request['suburb'];
        $properties = Property::with('propType')->where('suburb_id','like',$suburb)->where('no_bedrooms','>=',$request['no_bedroom'])->get();
        return view('search.search',compact('suburbs','properties'));

    }
}
