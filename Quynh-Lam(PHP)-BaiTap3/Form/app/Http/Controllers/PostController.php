<?php

namespace App\Http\Controllers;

use App\Models\Savecontact;
use Illuminate\Http\Request;
use SaveContact as GlobalSaveContact;

class PostController extends Controller
{
    //
    public function save(Request $requset)
    {
        $info = new Savecontact();
        $info->name = $requset->name;
        $info->email = $requset->email;
        $info->subject = $requset->subject;
        $info->content = $requset->content;
        $info->save();
        return redirect()->route('login');
    }
    public function show(Savecontact $savecontact)
    {
        $savecontact = Savecontact::paginate(5);
        return view('view', compact('savecontact'));
    }
   
    public function update(Request $request)
    {
        $infoupdate = Savecontact::find($request->id);
        $infoupdate->name = $request->name;
        $infoupdate->email =$request->email;
        $infoupdate->subject = $request->subject;
        $infoupdate->content = $request->content;
        $infoupdate->save();
        return redirect()->route('show');
    }
    public function delete($id)
    {
        Savecontact::find($id)->delete();
        return redirect()->route('show');
    }
}
   
