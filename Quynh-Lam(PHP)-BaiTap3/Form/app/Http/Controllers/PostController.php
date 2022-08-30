<?php

namespace App\Http\Controllers;

use App\Models\Savecontact;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function save(Request $requset)
    {
        $info = new Savecontact;
        $info->name =$requset->name;
        $info->email =$requset->email;
        $info->subject=$requset->subject;
        $info->content =$requset->content;
        $info->save();
        return redirect()->route('login');
    }
    public function show(Savecontact $savecontact)
    {
        $savecontact = Savecontact::all();
        return view('view',compact('savecontact'));
    }
}
