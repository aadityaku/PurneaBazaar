@extends('admin.base')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-8">
                    <h6>Manage Order</h6>
                </div>
                <div class="col-4">
                    <a href="" class="btn btn-success">Add New order</a>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>User</th>
                    <th>Address</th>
                    <th>Coupon</th>
                    <th>IsDeleverid</th>
                    <th>Isshepped</th>
                    <th>DateofforOrdered</th>
                    <th>Ordered</th>
                    <th>Action</th>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection