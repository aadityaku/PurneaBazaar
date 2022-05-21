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
                    <h6>Manage Address</h6>
                </div>
                
            </div>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>Contact</th>
                    <th>state</th>
                    <th>Landmark</th>
                    <th>Pincode</th>
                    <th>street</th>
                    <th>User_id</th>
                    <th>Type</th>
                    <th>Type</th>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection