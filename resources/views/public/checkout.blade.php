@extends('public/master')

@section('content')
<div class="container-fluid bg-secondary text-white p-3 shadow-sm sticky-top">
    <div class="container">
        <h4 class=" h2 fw-lighter">CheckOut </h4>
    </div>
 </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8 mt-3">
                <h4>Address Fill</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('address.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Your Name">
                                    @error('name')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Contact</label>
                                    <input type="text" name="contact" value="{{ old('contact') }}" class="form-control" placeholder="Enter Contact">
                                    @error('contact')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label for="">Street / Village</label>
                                    <input type="text" name="street" value="{{ old('street') }}" class="form-control" placeholder="Enter Street">
                                    @error('street')
                                        <p class="text-danger small">{{ $message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">LandMark</label>
                                    <input type="text" name="landmark" value="{{ old('landmark') }}" class="form-control" placeholder="Enter Landmark">
                                    @error('landmark')
                                        <p class="text-danger small">{{ $message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label for="">City</label>
                                    <input type="text" name="city" value="{{ old('city') }}" class="form-control" placeholder="Enter City">
                                    @error('city')
                                        <p class="small text-danger">{{ $message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">State</label>
                                    <input type="text" name="state" value="{{ old('state') }}" class="form-control" placeholder="Enter State">
                                    @error('state')
                                        <p class="small text-danger">{{ $message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label for="">Pincode</label>
                                    <input type="text" name="pincode" value="{{ old('pincode') }}" class="form-control" placeholder="Enter Pincode">
                                    @error('pincode')
                                        <p class="small text-danger">{{ $message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                  <label for="">Address Type</label>
                                  <select name="type"  class="form-select">
                                      <option value="office">Office</option>
                                      <option value="home">Home</option>
                                  </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Add to " class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                @foreach ($addresses as $item)
                  
                <div class="card mt-3  @if ($item->type == "office")
                    border border-success
                @else
                    border border-danger
                @endif bg-light">
                    <div class="card-body">
                        <span class="@if ($item->type== "office")
                            bg-success
                        @else
                            bg-danger
                        @endif badge position-absolute shadow-sm text-capitalize" style="right:0;border-radius:5px 0px 0px 5px">
                            {{$item->type}}
                        </span>
                        <h5>{{$item->name}} ({{$item->contact}})</h5>
                        <p class="small mb-0">{{$item->street}} <br>{{$item->city}} ({{$item->state}}) - {{$item->pincode}}</p>
                        <p class="small mb-0">LandMark: {{$item->landmark}}</p>
                        <form action="{{route("paymentprocess")}}" method="POST">
                            @csrf
                            <input type="hidden" name="address_id" value="{{$item->id}}">
                           
                            <input type="submit" class="btn btn-warning small mt-2 " value="use This">
                        </form>
                    </div>
                </div>
              @endforeach
                
            </div>
        </div>
    </div>
@endsection