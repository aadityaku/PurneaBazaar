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
                    <h6>Manage Users</h6>
                </div>
                <div class="col-4">
                    <a href="" class="btn btn-success">Add New user</a>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>UserType</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection