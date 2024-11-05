<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        //if (view()->exists('admin')) {abort(404);}
        return view('admin');
    }
}
