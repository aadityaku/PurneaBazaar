@extends('admin.base')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <h3>Edit Brand</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('brand.update',$brands) }}" method="post">
                        @csrf
                       @method("put")
                        <div class="mb-3">
                            <label for="">Brand Title</label>
                            <input type="text" name="brand_title" value="{{$brands->brand_title}}" class="form-control">
                            @error('brand_title')
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