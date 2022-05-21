@extends('public/master')

@section('content')
<div class="container-fluid bg-secondary text-white p-3 shadow-sm sticky-top">
   <div class="container">
       <h4 class=" h2 fw-lighter">Your Cart</h4>
   </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-8 mt-3">
                {{-- <h4>My cart</h4> --}}
                @foreach ($order->orderItem as $item)

                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-3">
                                    <img src="{{asset('image/'.$item->product->image) }}" class="w-100" alt="">
                                </div>
                                <div class="col-9 card-body">
                                    <h5>{{$item->product->title}}</h5>
                                    <p>{{$item->product->category->cat_title}}</p>
                                    <h6>Rs {{$item->product->discount_price}}/- <del>{{$item->product->price}}/-</del></h6>
                                    <a href="{{route('removefromcart',['p_id'=>$item->product->id])}}" class="btn btn-success">-</a>
                                    <span class="lead fw-bolder">{{$item->qty}}</span>
                                    <a href="{{route('addtocart',['p_id'=>$item->product->id])}}" class="btn btn-warning">+</a>
                                    <a href="{{route('removeitemfromCart',['p_id'=>$item->product->id])}}" class="btn btn-dark float-end me-3">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach  
            </div>
            <div class="col-4 mt-3">
                <h4>Bill Details</h4>
                <div class="list-group">
                    <div class="list-group-item list-group-item-action">Total Amount <span class="float-end">Rs. {{total_amount()}}/-</span> </div>
                    <div class="list-group-item list-group-item-action bg-success text-dark">Total Discount Amount <span class="float-end">rs. {{total_saving_amount()}}/-</span> </div>
                    <div class="list-group-item list-group-item-action">Tax (%18) <span class="float-end">Rs. {{get_tax()}}/-</span> </div>
                   @if ($order->coupon_id != null)
                   <div class="list-group-item list-group-item-action bg-warning">Coupon Discount <span class="float-end">Rs. {{$order->coupon->amount}}/-</span> </div>
                   
                   @endif
                    <div class="list-group-item list-group-item-action">Payable Amount <span class="float-end">Rs. {{get_payable_amount()}}/-</span> </div>
                </div>
                <div class="row mt-3 px-2">
                    <a href="" class="btn btn-success col">Continue Shoping</a>
                    <a href="{{ route('checkout') }}" class="btn btn-danger col ms-2">Checkout</a>
                </div>
            </div>
        </div>
    </div>
@endsection