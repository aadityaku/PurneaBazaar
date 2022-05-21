<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coupon;
use Illuminate\Http\Request;


class CouponController extends Controller
{
    
    public function index()
    {
        return view("admin.manageCoupon",['coupon'=>Coupon::all()]);
    }

    
    public function create()
    {
        return view("admin.insertCoupon");
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'amount'=>'required',
            'code'=>'required',
        ]);
        $coupon=new Coupon();
        $coupon->code=$request->code;
        $coupon->amount=$request->amount;
        $coupon->status=True;
        $coupon->save();
        return redirect()->route("coupon.index")->with("success","Wow Data inserted successfully!");
    }

    
    public function show(Coupon $coupon)
    {
        //
    }

    
    public function edit(Coupon $coupon)
    {
        return view("admin.editCoupon",['coupon'=>$coupon]);
    }

    
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'amount'=>'required',
            'code'=>'required',
        ]);
        
        $coupon->code=$request->code;
        $coupon->amount=$request->amount;
        $coupon->status=True;
        $coupon->save();
        return redirect()->route("coupon.index")->with("success","Wow Data Updated successfully!");
    }

    
    public function destroy(Coupon $coupon)
    {
       $coupon->delete();
       return redirect()->route("coupon.index")->with("error","Data Deleted successfully");
    }
}
