<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductsController extends Controller
{
    //
    #3.viết chức năng để thêm , xóa , sửa , cập nhật , xem
    function show($id)
    {
        // return "Thông tin sản phẩm ở vị trí id : " .$id;
        //muốn tạo giá trị trong productController tạo array(key=>$gtri)
        $price =200;
        $color =['red','blue'];
        return view('product.show',compact('id','price','color'));
    }
    function add()
    {
        // return "Thêm sản phẩm mới";
        $name ='Sản phẩm tốt';
        $price =200;
        $products =['bút','thước','tẩy'];
        return view('product.add',compact('name','price','products'));
    }
    function delete($id)
    {
        $name="Sản phẩm tốt";
        // return "Xóa tại vị trí có id :".$id;
        return view('product.delete',compact('id','name'));
    }
    function update($id)
    {
        $name="sản phẩm tuyệt vời";
        $price =1000000000000000;
        $quality =['kém','Bình dân','tốt'];
       return view('product.update',compact('id','name','price','quality'));
    }
}
