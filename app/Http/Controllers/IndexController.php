<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show()
    {
        //if (view()->exists('index')) {abort(404);}
        return view('index')->withTitle('This is title');
    }
}
