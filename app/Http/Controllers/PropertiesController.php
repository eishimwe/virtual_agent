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

        $properties = Property::select(array('id','description','title','price','no_bedrooms'));
        return \Datatables::of($properties)
            ->addColumn('actions','<a class="btn btn-xs btn-alt" data-toggle="modal"  data-target=".modalEditDepartment">Edit</a>')
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

       /* if ($request['agent_profile_file']) {

            $file_name             = $_FILES['agent_profile_file']['name'];
            $img_url               = "/images/agent/profile/$agent->id/" . $file_name;
            $target_file_directory = "/images/agent/profile/$agent->id/";

            if (!is_dir($target_file_directory)) {

                \File::makeDirectory(public_path().'/'.$target_file_directory,0777,true);

                move_uploaded_file($_FILES["agent_profile_file"]["tmp_name"],$img_url);
                $agent = Agent::find($agent->id);
                $agent->photo_url = $img_url;
                $agent->save();

            }


        }*/

        \Session::flash('property_success', 'well done! Property '.$request['ref_number'].' has been successfully added!');

        return view('properties.listing');



    }
}
