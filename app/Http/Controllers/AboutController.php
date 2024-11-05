<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function show()
    {
        //if (view()->exists('about')) {abort(404);}
        return view('about');
    }
}
