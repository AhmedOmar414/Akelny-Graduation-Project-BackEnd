@extends('admin.dashboard.layout.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Clients</h5>
                        <h6 class="card-subtitle mb-2 text-muted">+200</h6>
                    </div>
                </div>
                <div class="card" style="width: 18rem;margin-left: 15px">
                    <div class="card-body">
                        <h5 class="card-title">Restaurants</h5>
                        <h6 class="card-subtitle mb-2 text-muted">+200</h6>
                    </div>
                </div>
            </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
        @include('admin.dashboard.shared.footer')
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection