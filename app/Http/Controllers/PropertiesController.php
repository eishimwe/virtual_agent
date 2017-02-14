<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Suburb;

class PropertiesController extends Controller
{
    function list_properties(){

        return view('properties.listing');
    }


    function add_property() {

        //Retrieve all suburbs data
        $suburbs  = Suburb::pluck('name','id');

        return view('properties.add',compact('suburbs'));

    }

    function list_properties_data() {

        $properties = Property::select(array('id','description','title','price','no_bedrooms'));
        return \Datatables::of($properties)
            ->addColumn('actions','<a class="btn btn-xs btn-alt" data-toggle="modal"  data-target=".modalEditDepartment">Edit</a>')
            ->make(true);

    }
}
