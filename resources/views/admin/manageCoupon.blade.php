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
                    <h6>Manage Coupon</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('coupon.create') }}" class="btn btn-success">Add New Coupon</a>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Code </th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
                @foreach ($coupon as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->code}}</td>
                        <td>{{$item->amount}}</td>
                        <td>
                            <form action="{{ route('coupon.destroy',[$item]) }}" method="post" class="d-inline">
                                @csrf
                                @method("delete")
                                <input type="submit" value="X" class="btn btn-danger">
                            </form>
                            <a href="{{ route('coupon.edit',$item)}}" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection