<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    #viết chức năng lấy thông tin người nhập
    public function getinfo()
    {
        $getinfo = Product::all();
        return view('product.addproduct');

    }
    public function save(Request $requset)
    {
        $requset->validate(
            [
                'name'=>'required',
                'price'=>'integer',
                'inventory'=>'integer',
                'type'=>'regex:[a-zA-Z]'

            ]
            );
        $info = new Product();
        $info->name = $requset->name;
        $info->type = $requset->type;
        $info->price = $requset->price;
        $info->inventory = $requset->inventory;
        $info->save();
        return redirect()->route('showproduct');
        
    }
    public function show(Product $product)
    {
        $save = Product::paginate(5);
        return view('product.viewproduct', compact('save'));
    }
   
}
