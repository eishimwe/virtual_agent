<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lead;

class LeadsController extends Controller
{
    function list_leads(){

        return view('leads.listing');
    }


    function list_leads_data() {

        $leads = Lead::select(array('id','property_id','agent_id','first_name','last_name','subject','description','email'));
        return \Datatables::of($leads)
            ->addColumn('actions','<a class="btn btn-xs btn-alt" data-toggle="modal">Edit</a>')
            ->make(true);

    }

}
