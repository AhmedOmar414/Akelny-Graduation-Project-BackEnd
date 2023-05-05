@extends('admin.dashboard.layout.layout')
@section('content')

    <div class="row" style="  margin-right: 13px;  margin-left: 13px;">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="content-header-left col-md-6 col-12 mb-2" style="margin-left: 20px;margin-top: 20px">
                            <div class="row breadcrumbs-top">
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('/')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active"> Restaurants
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        @foreach($restaurants as $restaurant)
                            <a href="{{route('all_reviews.show',$restaurant->id)}}" class="card" style="width: 18rem;background-color: #5f61e6;margin-right: 10px;margin-bottom: 10px">
                                <div class="card-body" >
                                    <h5 class="card-title text-center" style="font-size: 25px;font-weight: bold;color:white">{{$restaurant->restaurant_name}}</h5>
                                    <div class="row">
                                        <h6 class="text-dark text-center">orders <span style="margin-left: 20px;color:white">{{$restaurant->reviews->count()}}</span></h6>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
