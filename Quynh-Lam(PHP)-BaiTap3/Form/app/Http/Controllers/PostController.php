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

        $contact = Savecontact::find($request->id);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->content = $request->content;

        $contact->save();
        return redirect()->route('show');
        // $update = Savecontact::where('id',$request->id)->update($request->all());
    }
    public function deletes(Request $request)
    {
        #tìm button id mình đã chọn
        Savecontact::find($request->id)->delete();
        return redirect()->route('show');

       
    }
}
