@extends('admin.dashboard.layout.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">

                @if(\App\Models\User::class)
                    <a href="{{route('client.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                        <div class="card-body" >

                            <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Clients</h5>
                            <div class="row">
                                <h6 class="text-dark text-center">clients <span style="margin-left: 20px;color:white">{{\App\Models\User::where('user_type_id',\App\Models\User::CLIENT)->count()}}</span></h6>
                            </div>
                        </div>
                    </a>
                @endif
                    @if(\App\Models\Restaurant::class)
                    <a href="{{route('restaurant.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                        <div class="card-body" >

                            <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Restaurant</h5>
                            <div class="row">
                                <h6 class="text-dark text-center">restaurants <span style="margin-left: 20px;color:white">{{\App\Models\Restaurant::all()->count()}}</span></h6>
                            </div>
                        </div>
                    </a>
                @endif
                    @if(\App\Models\Order::class)
                    <a href="{{route('all_orders.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                        <div class="card-body" >

                            <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Orders</h5>
                            <div class="row">
                                <h6 class="text-dark text-center">orders <span style="margin-left: 20px;color:white">{{\App\Models\Order::all()->count()}}</span></h6>
                            </div>
                        </div>
                    </a>
                @endif
                    @if(\App\Models\Review::class)
                    <a href="{{route('all_reviews.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                        <div class="card-body" >

                            <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Reviews</h5>
                            <div class="row">
                                <h6 class="text-dark text-center">reviews <span style="margin-left: 20px;color:white">{{\App\Models\Review::all()->count()}}</span></h6>
                            </div>
                        </div>
                    </a>
                @endif
                    @if(\App\Models\Message::class)
                    <a href="{{route('messages.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                        <div class="card-body" >

                            <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Messages</h5>
                            <div class="row">
                                <h6 class="text-dark text-center">messages <span style="margin-left: 20px;color:white">{{\App\Models\Message::all()->count()}}</span></h6>
                            </div>
                        </div>
                    </a>
                @endif
            </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
        @include('admin.dashboard.shared.footer')
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection