<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\User\Trashed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PostController extends Controller
{
    function show()
    {
    //    $posts = DB::table('post')->get();
    //    foreach($posts as $post)
    //    {
    //     echo $post->name;
    //    }
    // //    return $posts;
    //     # code...
    // $posts = DB::table('post')->where('id',2)->first();
    // $post = DB::table('post')->where('user_id',10)->count();
    // $posts = DB::table('post')->join('user','user.user_id','=','post.user_id')->select('user.fullname','post.name')->get();
    $posts = DB::table('post')->selectRaw("count('id') as number_post, user_id")->groupBy('user_id')->get();
    echo($posts) ;
    }
    
    function add()
    {

        // $oder = Order::find(2);
        // $oder->name ="Quynhf nhes";
        // $oder->save();
        // return $oder;
        //dùng created để tạo 
        // Order::create([
        //     'name'=>'Nguyễn Thị Quỳnh',
        //     'email'=>'quynh@gmail.com',
        //     'user_id'=>5
        // ]);
        
    }
    function delete($id)
    {
        // $order = Order::where('id',$id)
        // ->update
        //     ([
        //             'name'=>'Nguyễn Thị ',
        //           'email'=>'quynhil.com',
        //           'user_id'=>5
        // ]

        //     );
        // Order::destroy([1,2,5]);
       $oder = Order::find($id);
       $oder->delete();
       

    }
    function read()
    {
        // $oder = Order::where('user_id',1)->first();
       $post = Order::withTrashed()->get();
       return $post;
      
    }
    //
}
