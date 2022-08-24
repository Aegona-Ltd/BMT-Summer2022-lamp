<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


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

//Muốn gọi từ route -> view
Route::get('/',function(){
    return view('welcome');
});
//quên ; sau }) miết vậy . nhớ phải chấm nhé
//tạo routing có đường dẫn là post
Route::get('/post',function(){
return "Đây là đường dẫn tới bạn post";
});

//tạo đường dẫn dành riêng cho admin
Route::get('/admin',function(){
    return "Đây là đường dẫn tới bạn admin";

});

//đường dẫn admin/tênadmin 
Route::get('/admin/quynh',function(){
    return "Quỳnh là nhất";
});
//làm việc với model post có tham số là id
Route::get('/post/{id}',function($id)
{
    return "ID : ".$id;
});

//Làm việc với model post có nhiều tham số
Route::get('post/{id}/name/{name}',function($id,$name){
    return "ID : ".$id." Name: ".$name;
});
//cách để truy xuất vào 1 định tuyến và xuất tên định tuyến ra ngoài màn hình
Route::get('user/admin/next',function(){
    return route('admin.next');
})->name('admin.next');
//Định tuyến có tham số tùy chọn có thể có hoặc k
//doamin/user/danhsachuser=>hiện thị ra danh sách user
//doamain/user/danhsachuer/{id =4}=>hiện thị ra chi tiết người dùng 4
//note thêm dấu ? sau tham số và gán giá trị mặc định cho $id = 0
#3
Route::get('user/action/{id?}',function($id = 0)
{
    if($id==null)
    {
        return "Không có giá trị của id";
    }
    else{
        return $id;
    }
});
//định tuyến tham số có ràng buộc
//dấu + ở where để quy định có ít nhất 1 kí tự
//cài đặt ràng buộc cho id ở trong - provider ->RouterServiecsProvider
#3
Route::get('user/{id}/{name}/{age}',function($id,$name,$age)
{
    return $id."----".$name."-----".$age."------";
})->where(['name'=>'[a-zA-Z]+','age'=>'[0-9]+']);
//định tuyến qua 1 view
Route::view('/welcome','welcome');
//tạo 1 view : view->filenew->tenview.blade.php
//truyền dữ liệu từ router-> view
//gán giá trị bằng ['id'=>số thì k cần '' đâu nha]
//thực hiện xuất giá trị id ra ngoài màn hình
Route::view('post','post',['id'=>20]);
//muốn định tuyến tới 1 controller -> ta cần tạo controller
//Lệnh tạo controller : php artisan make:controller tên controller 
//viết function tại controller để thực hiện action
//gọi action bằng cách khai báo controller và gọi use\App\Http\Controller\têncontroller
#3
Route::get('/postcontroller/{id}',[PostController::class,'detail']);
                          //BÀI TẬP VỀ ROUTING
                          //tạo cấu trúc url của trang quản lý bài viết trong admin
                          #1.Trang thêm bài viết .
                          #2.Trang danh sách bài viết 
                          #3.Trang cập nhật bài viết
                          #4.Trang xóa bài viết
                          //NOTE : quản lý bài viết trong trang admin ->routing('admin/post/add')
#3.
#1.admin/post/add
Route::get('admin/post/add',function(){
    return "Admin:Thêm bài viết";

});
Route::get('admin/post/show',function(){
    return "Admin:Danh Sách Bài Viết";

});
Route::get('admin/post/update/{id}',function($id){
    return "Admin:Cập nhật bài viết tại id {$id}";

});
Route::get('admin/post/delete/{id}',function($id){
    return "Admin:Đây là trang xóa bài viết tại id {$id}";
});













