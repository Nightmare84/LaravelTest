<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpinfoController extends Controller
{
    public function show() {
        //return phpinfo();
        //return '<div>TEST</div>';
        return view('phpinfo');
    }
}
