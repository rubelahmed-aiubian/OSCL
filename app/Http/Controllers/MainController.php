<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function App\Helpers\get_header_template;

class MainController extends Controller
{
    function home(){
        return view('home');
    }
    function about(){
        return view('about');
    }
    function blog(){
        return view('blog');
    }
    function contact(){
        return view('contact');
    }

}
