<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PublicController extends Controller
{
    public function index(Request $request,$cat_id=Null){
        $data['product']=Product::all();
        if($request->has("find")){
            $search=$request->search;
           
           $data['product']=Product::where("title","LIKE","%$search%")->get();
        }
        elseif($cat_id != Null){
            $data['product']=Product::where("category_id",$cat_id)->get();
        }
        $data['category']=Category::all();
        return view("public/home",$data);
    }
   
    public function catSeearch(){
        $data['category']=Category::all();
        $data['product']=Product::all();
        return view("public/home",$data);
    }
    public function viewProduct($p_id){
        $data['category']=Category::all();
        $data['product']=Product::find($p_id);
        return view("public/viewProduct",$data);
    }
    public function cart(Request $request){
         $data['order']=get_order();
        return view("public/cart",$data);
    }
    public function checkOut(){
        return view("public/checkout");
    }

    public function addTCart(Request $request,$p_id){
        $product=Product::find($p_id);
        $user=Auth::user();
        if($product){
           $order=get_order();
           if($order){
                $orderItem=OrderItem::where([['ordered',false],["order_id",$order->id],['product_id',$product->id]])->first();
                
                if($orderItem){
                 $orderItem->qty +=1;
                 $orderItem->save();
                }
                else{
                   $oi=new OrderItem();
                   $oi->ordered=false;
                   $oi->product_id=$product->id;
                   $oi->order_id=$order->id;
                   $oi->save();
                }
           }
           else{
               //New Order Create
            $ord=new Order();
            $ord->ordered=false;
            $ord->user_id=$user->id;
            $ord->save();

            $oi=new OrderItem();
            $oi->ordered=false;
            $oi->product_id=$product->id;
            $oi->order_id=$ord->id;
            $oi->save();

           }

        }   
        return redirect()->route("cart");
    }
    public function removeFromCart(Request $request,$p_id){
        $product=Product::find($p_id);
        $user=Auth::user();
        if($product){
           $order=Order::where([['ordered',false],['user_id',$user->id]])->first();
           if($order){
                $orderItem=OrderItem::where([['ordered',false],["order_id",$order->id],['product_id',$product->id]])->first();
                
                if($orderItem){
                    if($orderItem->qty > 1){
                        $orderItem->qty -=1;
                        $orderItem->save();
                    }
                    else{
                        $orderItem->delete();
                    }
                
                }
           }
           
        }   
        return redirect()->route("cart");
    }
   

    public function removeItemFromCart(Request $request,$p_id){
        $product=Product::find($p_id);
        $user=Auth::user();
        if($product){
           $order=Order::where([['ordered',false],['user_id',$user->id]])->first();
           if($order){
                $orderItem=OrderItem::where([['ordered',false],["order_id",$order->id],['product_id',$product->id]])->first();
                if($orderItem){
                    $orderItem->delete();
                }
           }
        }   
        return redirect()->route("cart");
    }
}
