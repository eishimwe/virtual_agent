<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AgentRequest;
use Yajra\Datatables\Facades\Datatables;
use App\Agent;



class AgentsController extends Controller
{
    function list_agents() {

        return view('agents.listing');
    }

    function list_agents_data() {

        $agents = Agent::select(array('id','first_name','last_name','cellphone','email'));
        return \Datatables::of($agents)
            ->addColumn('actions','<a class="btn btn-xs btn-alt" data-toggle="modal" onClick="launchUpdateDepartmentModal({{$id}});" data-target=".modalEditDepartment">Edit</a>')
            ->make(true);

    }

    function add_agent() {

        return view('agents.add');

    }

    function save_agent(AgentRequest $request) {

        $agent                = new Agent();
        $agent->first_name    = $request['first_name'];
        $agent->last_name     = $request['last_name'];
        $agent->cellphone     = $request['cellphone'];
        $agent->email         = $request['email'];
        $agent->save();

        \Session::flash('agent_success', 'well done! Agent '.$request['first_name'].' has been successfully added!');

        return view('agents.listing');



    }


}
