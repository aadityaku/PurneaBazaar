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
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Your Name">
                                    @error('name')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Contact</label>
                                    <input type="text" name="contact" value="{{ old('contact') }}" class="form-control" placeholder="Enter Contact">
                                    @error('contact')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Alternative Contact</label>
                                    <input type="text" name="alt_contact" value="{{ old('alt_contact') }}" class="form-control" placeholder="Enter Alternamtive Conttact">
                                    @error('alt_contact')
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
                                  <input type="submit" value="Submit & Pay " class="btn btn-success mt-4 w-100">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <h4>Select Address Sved</h4>
                <div class="card mt-3 bg-light">
                    <div class="card-body">
                        <h5>Aaditya Kumar(8359393284)</h5>
                         <p class="small">Kalimandir Old bus stand road Purnea</p>
                         <a href="" class="btn  btn-sm btn-primary">Use This Address</a>
                    </div>
                </div>
                <div class="card mt-3 bg-light">
                    <div class="card-body">
                        <h5>Aaditya Kumar(8359393284)</h5>
                         <p class="small">Kalimandir Old bus stand road Purnea</p>
                         <a href="" class="btn  btn-sm btn-primary">Use This Address</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection