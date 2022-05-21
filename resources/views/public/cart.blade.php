@extends('public/master')

@section('content')
<div class="container-fluid bg-secondary text-white p-3 shadow-sm sticky-top">
   <div class="container">
       <h4 class=" h2 fw-lighter">Your Cart</h4>
   </div>
</div>
    <div class="container">
        <div class="row">
            @foreach ($order as $item)
            <div class="col-8 mt-3">
                {{-- <h4>My cart</h4> --}}
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="row g-0">
                               
                                    
                                
                                <div class="col-3">
                                    <img src="{{asset('image/'.$item->orderItem->image) }}" class="w-100" alt="">
            
                                </div>
                                <div class="col-9 card-body">
                                    <h5>{{$item->orderItem->title}}</h5>
                                    <p>{{$item->orderItem->category_id}}</p>
                                    <h6>Rs {{$item->orderItem->discount_price}}/- <del>{{$item->orderItem->price}}/-</del></h6>
                                    <a href="" class="btn btn-success">-</a>
                                    <span class="lead fw-bolder">0</span>
                                    <a href="" class="btn btn-warning">+</a>
                                    <a href="" class="btn btn-dark float-end me-3">Delete</a>
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
                    <div class="list-group-item list-group-item-action">Total Amount <span class="float-end">Rs. 5000/-</span> </div>
                    <div class="list-group-item list-group-item-action bg-success text-dark">Total Amount <span class="float-end">rs. 4000/-</span> </div>
                    <div class="list-group-item list-group-item-action">Tax (%18) <span class="float-end">Rs. 400/-</span> </div>
                    <div class="list-group-item list-group-item-action bg-warning">Coupon Discount <span class="float-end">Rs. 100/-</span> </div>
                    <div class="list-group-item list-group-item-action">Payable Amount <span class="float-end">Rs. 100342/-</span> </div>
                </div>
                <div class="row mt-3 px-2">
                    <a href="" class="btn btn-success col">Continue Shoping</a>
                    <a href="{{ route('checkout') }}" class="btn btn-danger col ms-2">Checkout</a>
                </div>
            </div>
        </div>
    </div>
@endsection