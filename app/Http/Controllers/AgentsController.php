<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AgentRequest;
use Yajra\Datatables\Facades\Datatables;
use App\Agent;
use App\Lead;



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


        $imageName = $_FILES['agent_profile_file']['name'];

        if($request->file('agent_profile_file')) {

            $request->file('agent_profile_file')->move(base_path() . '/public/images/agent/profile/'.$agent->id.'/', $imageName);

        }

        \Session::flash('agent_success', 'well done! Agent '.$request['first_name'].' has been successfully added!');

        return view('agents.listing');



    }

    function contact($property_id,$agent_id) {

        return view('agents.contact',compact('agent_id','property_id'));
    }

    function save_lead(Request $request) {

        $agent               = Agent::find($request['agent_id']);

        $lead                = new Lead();
        $lead->first_name    = $request['first_name'];
        $lead->last_name     = $request['last_name'];
        $lead->subject       = $request['subject'];
        $lead->email         = $request['email'];
        $lead->description   = $request['description'];
        $lead->property_id   = $request['property_id'];
        $lead->agent_id      = $agent->id;
        $lead->save();

        $data = array(
            'first_name'    => $request['first_name'],
            'last_name'     => $request['last_name'],
            'subject'       => $request['subject'],
            'email'         => $request['email'],
            'description'   => $request['description'],
            'agent_name'    => $agent->first_name

        );

       \Mail::send('emails.contact', $data, function ($message) use($agent) {
            $message->from('info@wendy.co.za', 'Wendy Properties');
            $message->to($agent->email)->subject("Wendy Properties - Ref: ");

        });
    }


}
