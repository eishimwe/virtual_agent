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
        $suburb     = ($request['suburb'] == 0)?'%':$request['suburb'];
        $min_price = $request['minPrice'];
        $max_price  = $request['maxPrice'];
        $properties = Property::with('propType')->where('suburb_id','like',$suburb)
                                                ->where('no_bedrooms','>=',$request['no_bedroom'])
                                                ->whereBetween('price',[$min_price,$max_price])
                                                ->get();
        return view('search.search',compact('suburbs','properties'));

    }

    function getProperty($id) {

      $property = Property::with('propType')->where('id',$id)->first();
        return view('search.property',compact('property'));
    }
}
