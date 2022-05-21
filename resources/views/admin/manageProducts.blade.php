@extends('admin.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @if($msg = Session::get("success"))
            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Inserted</strong>{{$msg}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if($msg = Session::get("error"))
                
           
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$msg}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-8">
                        <h6>Manage Products</h6>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('product.create') }}" class="btn btn-success">Add New Proucts</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                       
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->category->cat_title}}</td>
                            <td>{{$item->brand_id}}</td>
                           
                            <td>{{$item->discount_price}}<del>{{$item->price}}</del></td>
                            <td>{{$item->stock}}</td>
                            <td><img src="{{ asset('image/'.$item->image) }}" alt=""></td>
                            <td></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection