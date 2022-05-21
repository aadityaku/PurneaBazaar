@extends('admin.base')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <h3>Insert Products</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Category</label>
                            <select name="category_id" class="form-control" value="{{ old('category_id') }}">
                                <option value="0">Main Category</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id}}">{{$item->cat_title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Brand</label>
                            <select name="brand_id" class="form-control" value="{{ old('brand_id') }}">
                                <option value="0">Main Category</option>
                                @foreach ($brands as $item)
                                    <option value="{{ $item->id}}">{{$item->cat_title}}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for=""> Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                            @error('title')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for=""> price</label>
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control">
                            @error('price')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">DIscount price</label>
                            <input type="text" name="discount_price" value="{{ old('discount_price') }}" class="form-control">
                            @error('discount_price')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Stock</label>
                            <input type="text" name="stock" value="{{ old('stock') }}" class="form-control">
                            @error('stock')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" value="{{ old('image') }}" class="form-control">
                            @error('image')
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