<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;

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
        $data['addresses'] = Address::where("user_id",Auth::id())->get();
        return view("public/checkout",$data);
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
    private function checkCode($code){
        $coupon=Coupon::where([['code',$code],['status',0]])->first();
        return $coupon;
    }

    public function applyCoupon(Request $request){
        $request->validate([
            'code'=>'required'
        ]);

        if($coupon=$this->checkCode($request->code)){
            $order=get_order();
            $order->coupon_id=$coupon->id;
            $order->save();
            return redirect()->route('cart');
        }
        else{
            return redirect()->route('cart')->with("msg","Invalid Coupon");
        }

    }

    public function removeCoupon(){
        $order=get_order();
        $order->coupon_id = null;
        $order->save();
        return redirect()->route('cart');
    }

    static public function assignAddress($id){
        $address=Address::findOrFail($id);
        $order=get_order();
        $order->address_id=$address->id;
        $order->save();
        return redirect()->route('checkout');
    }

    public function paymentProcess(Request $request){
         
        return $this->assignAddress($request->address_id);
    }

    public function order()
    {
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => "1232341",
          'user' => "1",
          'mobile_number' =>"6206536126",
          'email' => "aadityakumar368a@gmail.com",
          'amount' => 200,
          'callback_url' => 'http://127.0.0.1:8000/payment/call-back'
        ]);
        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        
        if($transaction->isSuccessful()){
          //Trans
         print_r($response);
        }else if($transaction->isFailed()){
          //Transaction Failed
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }    
  
}
