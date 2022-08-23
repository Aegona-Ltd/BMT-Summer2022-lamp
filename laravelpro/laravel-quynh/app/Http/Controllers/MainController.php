<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function checkRole(Request $request)
    {
        // echo "Check function";
        # code...
        return view('welcome',["name"=>$request->name]);
    }
    //
}
