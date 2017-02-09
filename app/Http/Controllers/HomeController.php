<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suburb;

class HomeController extends Controller
{

    function index(){

       return view('home.home');
    }


    function search() {

        $suburbs = Suburb::pluck('name','id');
        return view('search.search',compact('suburbs'));

    }

}
