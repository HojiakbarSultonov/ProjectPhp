<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function welcome()
    {
        return view('welcome',['name'=>'Hojiakbar']);
    }


}
