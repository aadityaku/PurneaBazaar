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
                    <h6>Manage Payment</h6>
                </div>
                <div class="col-4">
                    <a href="" class="btn btn-success">Add New Payment</a>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Bank Name</th>
                    <th>Type</th>
                    <th>mode</th>
                    <th>Txn id</th>
                    <th>dateofPayment</th>
                    <th>Status</th>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection