<?php
/**
 *File name : PageController.php  / Date: 5/4/2023 - 11:10 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;

class PageController extends Controller{
    public function index($page){
        $home = Config::get('home');
        if (!view()->exists("pages.{$page}")) {
            return view('404',compact('home'));
        }
        return view("pages.{$page}",compact('home'));
    }
}