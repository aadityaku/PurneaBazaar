@extends('admin/base')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body bg-primary text-white">
                                <h2 class="display-3">55+</h2>
                                <h5>Total Products</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body bg-info text-white">
                                <h2 class="display-3">55+</h2>
                                <h5>Total Orders</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body bg-warning text-white">
                                <h2 class="display-3">55+</h2>
                                <h5>Total Users</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                         <div class="card  bg-primary text-white">
                             <div class="card-body bg-dark text-white">
                                 <h2 class="display-3">55+</h2>
                                 <h5>Total Products</h5>
                             </div>
                         </div>
                    </div>
                    <div class="col-4">
                         <div class="card  bg-primary text-white">
                             <div class="card-body bg-secondary text-white">
                                 <h2 class="display-3">55+</h2>
                                 <h5>Total Orders</h5>
                             </div>
                         </div>
                    </div>
                    <div class="col-4">
                         <div class="card  bg-primary text-white">
                             <div class="card-body">
                                 <h2 class="display-3">55+</h2>
                                 <h5>Total Users</h5>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection