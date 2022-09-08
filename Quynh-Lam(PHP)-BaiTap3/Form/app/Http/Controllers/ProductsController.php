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
    public function save(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'price'=>'integer',
                'inventory'=>'integer',
            ]
            );
        $info = new Product();
        $info->name = $request->name;
        $info->type = $request->type;
        $info->price = $request->price;
        $info->inventory = $request->inventory;
        $info->save();
        return redirect()->route('showproduct');
        
    }
    public function show(Product $product)
    {
        $save = Product::paginate(10);
        return view('product.viewproduct', compact('save'));
    }
    #UPDATE
    public function getinfoup($id)
    {
       $getproduct = Product::find($id);
       return view('layouts.DetailUpproduct',["infoproduct"=>$getproduct]);

    }
    public function saveupdate(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'price'=>'integer',
                'inventory'=>'integer',
            ]
            );
            $getproduct = Product::find($request->id);
            $getproduct->name = $request->name;
            $getproduct->type = $request->type;
            $getproduct->price = $request->price;
            $getproduct->inventory = $request->inventory;
            $getproduct->save();
            return redirect()->route('showproduct');

    }
    public function delete($id)
    {
        $delete = Product::find($id)->delete();
        return redirect()->route('showproduct');

    }
   
}
