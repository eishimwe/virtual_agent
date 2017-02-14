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

    public function ak_img_resize($target, $newcopy, $w, $h, $ext) {

        list($w_orig, $h_orig) = getimagesize($target);
        $scale_ratio = $w_orig / $h_orig;
        if (($w / $h) > $scale_ratio) {
            $w = $h * $scale_ratio;
        } else {
            $h = $w / $scale_ratio;
        }
        $img = "";
        $ext = strtolower($ext); if ($ext == "gif"){ $img = imagecreatefromgif($target); } else if($ext =="png"){ $img = imagecreatefrompng($target); } else { $img = imagecreatefromjpeg($target); } $tci = imagecreatetruecolor($w, $h); // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
        imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig); imagejpeg($tci, $newcopy, 80);
    }

    function save_agent(AgentRequest $request) {

        $agent                = new Agent();
        $agent->first_name    = $request['first_name'];
        $agent->last_name     = $request['last_name'];
        $agent->cellphone     = $request['cellphone'];
        $agent->email         = $request['email'];
        $agent->save();

        if ($request['agent_profile_file']) {

            $file_name             = $_FILES['agent_profile_file']['name'];
            $img_url               = "/images/agent/profile/$agent->id/" . $file_name;
            $target_file_directory = "/images/agent/profile/$agent->id/";

            if (!is_dir($target_file_directory)) {

                \File::makeDirectory(public_path().'/'.$target_file_directory,0777,true);

                //move_uploaded_file($_FILES["agent_profile_file"]["tmp_name"],$img_url);
                $agent = Agent::find($agent->id);
                $agent->photo_url = $img_url;
                $agent->save();

            }


        }


        \Session::flash('agent_success', 'well done! Agent '.$request['first_name'].' has been successfully added!');

        return view('agents.listing');



    }

    function contact() {

        return view('agents.contact');
    }


}
