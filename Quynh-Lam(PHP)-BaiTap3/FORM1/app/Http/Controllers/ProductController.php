<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function saveproduct(Request $request)
    {
        $saveproduct = new Product();
        $saveproduct->name =$request->name;
        $saveproduct->type =$request->type;
        $saveproduct->price =$request->price;
        $saveproduct->inventory =$request->inventory;
        $saveproduct->save();
        return redirect()->route('showproduct');

    }
    public function showproduct(Product $product)
    {
        $products = Product::all();
        return view('products' ,["products"=>$products]);
    }
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('showproduct');
    }
    #lay gia tri tra ve
    public function getbyid(Request $request)
    {
        $infoproduct = Product::find($request->id);
        return response()->json($infoproduct);
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $updateproduct = Product::find($request->id);
        $updateproduct->name =$request->name;
        $updateproduct->type =$request->type;
        $updateproduct->price =$request->price;
        $updateproduct->inventory =$request->inventory;
        $updateproduct->save();



    }
}
