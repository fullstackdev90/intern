<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view("main");
    }
    public function policy(){
        return view ("policy");
    }
    public function about(){
        return view ("about");
    }
    public function task(){
        return view ("tasks");
    }
}
