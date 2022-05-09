@extends('public/master')

@section('content')
    <div class="container mt-3">
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
                    <div class="col-3">
                        <div class="card">
                            <img src="http://via.placeholder.com/300x400.png" class="w-100" style="object-fit: cover;height:220px" alt="">
                            <div class="card-body">
                                <strong>Product Title</strong>
                                <p class="m-0 p-0">Rs. 400/- <del>600/-</del></p>
                                <p class="m-0 p-0">Mobile</p>
                                <a href="{{ route('viewproduct',['p_id'=>1] ) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection