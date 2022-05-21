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
                    <form action="{{ route('category.update',$coupon) }}" method="post">
                        @csrf
                        @method("put")
                        <div class="mb-3">
                            <label for="">Code</label>
                            <input name="code" type="text" class="form-control" value="{{ $coupon->code }}">
                               
                            @error('code')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Amount</label>
                            <input type="text" name="amount" value="{{ $coupon->amount }}" class="form-control">
                            @error('amount')
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