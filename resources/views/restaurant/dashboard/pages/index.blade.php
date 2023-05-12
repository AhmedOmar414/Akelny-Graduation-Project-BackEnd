@extends('restaurant.dashboard.layout.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                @if(\App\Models\RestaurantGallery::class)
                 <a href="{{route('restaurant_gallery.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                    <div class="card-body" >

                        <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Restaurant Gallery</h5>
                        <div class="row">
                            <h6 class="text-dark text-center">photos <span style="margin-left: 20px;color:white">{{\App\Models\RestaurantGallery::all()->count()}}</span></h6>
                        </div>
                    </div>
                </a>
                @endif
                    @if(\App\Models\Category::class)
                <a href="{{route('category.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                    <div class="card-body" >
                        <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Categories</h5>
                        <div class="row">
                            <h6 class="text-dark text-center">categories <span style="margin-left: 20px;color:white">{{\App\Models\Category::all()->count()}}</span></h6>
                        </div>
                    </div>
                </a>
                    @endif
                    @if(\App\Models\Subcategory::class)
                    <a href="{{route('sub_category.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                    <div class="card-body" >
                        <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Sub Categories</h5>
                        <div class="row">
                            <h6 class="text-dark text-center">sub category <span style="margin-left: 20px;color:white">{{\App\Models\Subcategory::all()->count()}}</span></h6>
                        </div>
                    </div>
                </a>
                    @endif
                    @if(\App\Models\Product::class)
                        <a href="{{route('product.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                            <div class="card-body" >
                                <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Products</h5>
                                <div class="row">
                                    <h6 class="text-dark text-center">products <span style="margin-left: 20px;color:white">{{\App\Models\Product::all()->count()}}</span></h6>
                                </div>
                            </div>
                        </a>
                    @endif
                    @if(\App\Models\Order::class)
                    <a href="{{route('order.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                    <div class="card-body" >
                        <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Orders</h5>
                        <div class="row">
                            <h6 class="text-dark text-center">orders<span style="margin-left: 20px;color:white">{{\App\Models\Order::all()->count()}}</span></h6>
                        </div>
                    </div>
                </a>
                    @endif
                    @if(\App\Models\Review::class)
                    <a href="{{route('review.index')}}" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                    <div class="card-body" >
                        <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Review</h5>
                        <div class="row">
                            <h6 class="text-dark text-center">reviews <span style="margin-left: 20px;color:white">{{\App\Models\Review::all()->count()}}</span></h6>
                        </div>
                    </div>
                </a>
                    @endif
                    @if(\App\Models\Offers::class)
                    <a href="" class="dropdown-item btn btn-akelni btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" style="width: 18rem;">
                    <div class="card-body" >
                        <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">Offers</h5>
                        <div class="row">
                            <h6 class="text-dark text-center">offers <span style="margin-left: 20px;color:white">{{\App\Models\Offer::all()->count()}}</span></h6>
                        </div>
                    </div>
                </a>
                    @endif
            </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
        @include('restaurant.dashboard.shared.footer')
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection