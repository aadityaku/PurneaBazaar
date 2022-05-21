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
                    <h6>Manage Category</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('category.create') }}" class="btn btn-success">Add New Category</a>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Parent Id</th>
                    <th>Action</th>
                </tr>
                @foreach ($category as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->cat_title}}</td>
                        <td>{{$item->parent_id}}</td>
                        <td>
                            <form action="{{ route('category.destroy',[$item]) }}" method="post" class="d-inline">
                                @csrf
                                @method("delete")
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                            
                            <a href="{{ route('category.edit',[$item]) }}" class="btn btn-success">Edit</a>
                           
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection