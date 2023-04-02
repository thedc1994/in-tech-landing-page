<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index(){
        $home = Config::get('home');
        return view('index',compact('home'));
    }
}
