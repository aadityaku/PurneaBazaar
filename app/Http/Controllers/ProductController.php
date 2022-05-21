<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products']=Product::all();
        return view("admin.manageproducts",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['brands']=Brand::all();
        $data['category']=Category::all();
        return view("admin.insertProduct",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'image'=>'required',
            'price'=>'required',
            'discount_price'=>'required',
            'description'=>'required',
            'stock'=>'required',
        ]);
        $product=new Product();
        $product->title=$request->title;
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->description=$request->description;
        $product->stock=$request->stock;
        $fileName=$request->image->getClientOriginalName();
        $request->image->move(public_path("image"),$fileName);
        $product->image=$fileName;
        $product->save();
        return redirect()->route("product.index")->with("success","SuccessFully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data['brands']=Brand::all();
        $data['category']=Category::all();
        return view("admin.editProduct",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
