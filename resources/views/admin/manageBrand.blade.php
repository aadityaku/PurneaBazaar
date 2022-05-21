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
                    <h6>Manage Brand</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('brand.create') }}" class="btn btn-success">Add New Category</a>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Action</th>
                   
                </tr>
                @foreach ($brands as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->brand_title}}</td>
                        <td>
                            <form action="{{ route('brand.destroy',[$item]) }}" method="post" class="d-inline">
                                @csrf
                                @method("delete")
                                <input type="submit" value="X" class="btn btn-danger">
                            </form>
                           
                            <a href="{{ route('brand.edit',[$item] )}}" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection