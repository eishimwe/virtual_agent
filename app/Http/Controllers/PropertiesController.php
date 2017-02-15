<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PropertyRequest;
use App\Property;
use App\Suburb;
use App\Agent;

class PropertiesController extends Controller
{
    function list_properties(){

        return view('properties.listing');
    }


    function add_property() {

        //Retrieve all suburbs data
        $suburbs  = Suburb::pluck('name','id');

        //Retrieve all agents data
        $agents = Agent::select(\DB::raw("CONCAT(first_name,' ',last_name,' > ',cellphone) AS name"),'id')->pluck('name', 'id');

        return view('properties.add',compact('suburbs','agents'));

    }

    function list_properties_data() {

        $properties = Property::select(array('id','description','title','price','no_bedrooms','ref_number'));
        return \Datatables::of($properties)
            ->addColumn('actions','<a class="btn btn-xs btn-alt" data-toggle="modal" >Edit</a>')
            ->make(true);

    }

    function save_property(PropertyRequest $request) {

        $property                = new Property();
        $property->price         = $request['price'];
        $property->no_bedrooms   = $request['no_bedrooms'];
        $property->ref_number    = $request['ref_number'];
        $property->description   = $request['description'];
        $property->suburb_id     = $request['suburb'];
        $property->agent_id      = $request['agent'];
        $property->title         = $request['title'];
        $property->property_type_id         = 2;//2 = Flats
        $property->save();

        $imageName = $_FILES['property_file']['name'];

        if($request->file('property_file')) {

            $request->file('property_file')->move(base_path() . '/public/images/agent/properties/'.$property->id.'/', $imageName);


        }


        \Session::flash('agent_success', 'well done! Agent '.$request['first_name'].' has been successfully added!');



        \Session::flash('property_success', 'well done! Property '.$request['ref_number'].' has been successfully added!');

        return view('properties.listing');



    }
}
