<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // luu contact form vo db
    // luu xong thi return ve login de dang nhap vào admin coi thong tin contact
    public function postContact(){
    return view('auth.login');
    }
    public function store(Request $request)
    {
        $infoss = new Info;
        $infoss->name = $request->name;
        $infoss->email =$request->email;
        $infoss->subject =$request->subject;
        $infoss->content =$request->content;
        $infoss->save();
        return redirect()->route('login');

    }
    public function show()
    {
        $infos=Info::all();
        return view('info',compact('infos'));
    }
}
