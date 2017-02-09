<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index(){

       return view('home.home');
    }


    function search() {

        return view('search.search');
    }

}
