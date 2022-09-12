<?php

namespace App\Http\Controllers;

use App\Models\SaveContact;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    #luu thong tin nguoi dung nhap vao
    public function saveinfo(Request $request)
    {
        $saveinfo = new SaveContact();
        $saveinfo->id =$request->id;
        $saveinfo->name =$request->name;
        $saveinfo->email =$request->email;
        $saveinfo->subject =$request->subject;
        $saveinfo->content =$request->content;
        $saveinfo->save();
        return redirect()->route('showcontact');
    }
    public function showcontactinfo(SaveContact $savecontact)
    {
        $info = SaveContact::all();
        return view('dashboard' ,["info"=>$info]);


    }
    
    public function save(Request $request)
    {
        // dd($request->all());
        $savecontact = SaveContact::find($request->id);
        $savecontact->name = $request->name;
        $savecontact->email = $request->email;
        $savecontact->subject =$request->subject;
        $savecontact->content =$request->content;
        $rs=$savecontact->save();
        if($rs){
            session()->flash("message","Sửa thành công!");
        }else{
            session()->flash("message","Sửa thất bại!");
        }
        return response()->json(["message"=>"Sửa thành công!"]);
    }
    public function view(Request $request)
    {
        $view = SaveContact::find($request->id);
        $view->name =$request->name;
        $view->email =$request->email;
        $view->subject =$request->subject;
        $view->content =$request->content;
    }
    #show content ng dung nhap
    public function show(SaveContact $savecontact)
    {
        $savecontact = SaveContact::all();
        return view('dashboard',["savecontact"=>$savecontact]);

    }
    public function getbyid(Request $request){
        $contact = SaveContact::find($request->id);
        return response()->json($contact);
    }
    public function delete($id)
    {
        SaveContact::find($id)->delete();
        return redirect()->route('showcontact');
    }
}
