<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ResouceController;
use App\Http\Controllers\AdminPostController;
use App\Models\Order;
use App\Post;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckUser;
use App\Http\Middleware\RoleMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route ::get('/post',function(){
//     return "Ban";
// });
// Route ::get('posts/{id}',function($id){
//     return $id;
// });
// Route ::get('posts/{cat_id}/page/{page}',function($cat_id,$page){
//     return $cat_id."page".$page;

// })->where(['id'=>'[0-9]+','page'=>'[A-Za-z0-9-_]+']);
// Route ::get('users/profile',function(){
//     return route('profile');
// })->name('profile');
// //Định tuyến có ts mặc định
// Route ::get('user/{id?}',function($id =0){
//     return $id;
// })->where('id','[0-9]+');
// //định tuyến qua 1 view trên hệ thống
// Route::view('/welcome','welcome');
// Route::view('/post','post',['id'=>20]);
//định tuyến đến 1 controler
// Route ::get('/show/{id}',[PostController::class,'show']);
// // Route ::get('/create',[PostController::class,'create']);
// Route ::get('/update/{id}',[PostController::class,'update']);
// Route ::get('show',[ResouceController::class ,'index']);
// Route ::get('admin/post/show',[AdminPostController::class,'Show']);
// Route ::get('child',function()
// {
//     return view('child' ,['data' =>"Phan Van Cuong"]);
// });
// Route ::get('post/insert',function(){
//     DB::table('orders')->insert(
//         ['name'=>'Nguyễn Thị Quỳyyy', 'email'=>'qu0697@gmail.com','user_id'=>'1']
//     );
// });
// Route ::get('post/inserttable',function(){
//     DB::table('user')->insert(
//         ['user_id'=>'8','fullname'=>'Nguyễn Thị Quỳnh', 'age'=>'10']
//     );
// });
// Route ::get('post/get',[PostController::class,'show']);
// Route::get('read',function(){
//     $post = Order::all();
//     return $post;
// });
// Route::get('order/controller',[PostController::class,'read']);
//tham số bắt buộc có trong định tuyến 
// Route::get('/hello/{yeah}',function($yeag)
// {
//     echo ("Hello".$yeag);

// });
//Tham số tùy chọn trong định tuyến để ý dấu ? ở sau thuộc tính có hoặc k
// Route::get('/hello/{yeah}/{age?}',function($yeah , $age = null)
// {
//     $hellostr =' ';
//     if($age==null)
//     {
//         $hellostr ="Năm nay " .$yeah."tuổi";
//     }
//     else{
//         $hellostr ="năm nay là năm ".$yeah."và ".$age." tuổi";
//     }
//     //truyền tham số cho view hello
//     return view('hello-word')->with('hellostr',$hellostr);

// });
// Route::get('/dashbord/{age?}',function()
// {

// })->middleware('checkage');
// Route::get('/role/{name?}',[MainController::class,'checkRole'])->middleware('role:quynh123');


//hiểu truyền tham số chứ j// ý là cái middleware này để làm gì . lý thuyết ns xác thực vai trò . mà t thấy chả khác j controller
// nhìn ne` d m
Route::get('/check/{name?}',function(){})->middleware('checkuser:q');

