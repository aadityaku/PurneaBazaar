@extends('admin.base')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <h3>Insert Category</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Parent</label>
                            <select name="parent_id" class="form-control" value="{{ old('parent_id') }}">
                                <option value="0">Main Category</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id}}">{{$item->cat_title}}</option>
                                @endforeach
                            </select>
                            @error('parent_id')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Category Title</label>
                            <input type="text" name="cat_title" value="{{ old('cat_title') }}" class="form-control">
                            @error('cat_title')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit"  class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection