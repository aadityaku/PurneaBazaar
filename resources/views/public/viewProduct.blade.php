@extends('public/master')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-4">
                   <img src="http://via.placeholder.com/500.jpg" class="w-100" alt="">
                </div>
                <div class="col-8">
                   <table class="table">
                       <tr>
                           <th>Title</th>
                            <td>This is Product price</td>
                       </tr>
                       <tr>
                           <th>Category</th>
                            <td>Mobile</td>
                       </tr>
                       <tr>
                           <th>Price</th>
                            <td><h5><del>600/-</del></h5></td>
                       </tr>
                       <tr>
                           <th>Office Price</th>
                            <td><h5>200</h5></td>
                       </tr>
                       <tr>
                           <th>Brand</th>
                            <td>Tcs</td>
                       </tr>
                       <tr>
                           <th>qty</th>
                            <td>55</td>
                       </tr>
                   </table>
                   <div class="row">
                       <div class="col">
                           <a href="" class="btn btn-success">Add To Cart</a>
                           <a href="" class="btn btn-warning">Buy Now</a>
                       </div>
                      
                   </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="card p-0">
                    <div class="card-header bg-primary text-center text-white">Description</div>
                    <div class="card-body">
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus omnis repellendus aliquam voluptas, provident, amet veniam laborum distinctio ullam consectetur ipsam, modi eius optio quas odit molestiae neque fugiat officia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection