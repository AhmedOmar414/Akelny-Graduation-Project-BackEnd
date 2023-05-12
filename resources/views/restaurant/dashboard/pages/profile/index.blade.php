@extends('restaurant.dashboard.layout.layout')
@section('content')

    <div class="container">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <div class="content-header-left col-md-6 col-12 mb-2"
                     style="margin-left: 20px;margin-top: 20px">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('restaurant.dashboard')}}"> dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Profile
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body" style="margin: 30px">
                        <div class="account-settings">
                            <div class="user-profile">

                                @if($restaurant->logo)
                                    <a href="{{asset('images/restaurants/'.$restaurant->logo)}}">
                                        <img src="{{url('images/restaurants/'.$restaurant->logo)}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;border-radius: 50%">
                                    </a>
                                @else
                                    <img src="{{url('images/download.png')}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;border-radius: 50%">
                                @endif


                                <h4 class="user-name" style="overflow-inline: visible">{{$restaurant->restaurant_name}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body" style="margin: 30px">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="mb-2 text-primary"> restaurant Details</h3>
                            </div>
                            <form  method="get" action="{{route('profile.edit',$restaurant->id)}}">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName"> Name</label>
                                        <input disabled type="text" name="name" class="form-control" id="fullName" value="{{$restaurant->restaurant_name}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">address</label>
                                        <input disabled type="text" name="address" class="form-control" id="eMail" value="{{$restaurant->address}}">
                                    </div>
                                </div>

                                <div id="map" style="height: 200px; width: 400px"></div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">tax_registration_number</label>
                                        <input disabled type="number" class="form-control" name="tax_registration_number" id="phone" value="{{$restaurant->tax_registration_number}}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">open_at</label>
                                        <input disabled type="datetime-local" class="form-control" name="tax_registration_number" id="phone" value="{{$restaurant->open_at}}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">close_at</label>
                                        <input disabled type="datetime-local" class="form-control" name="tax_registration_number" id="phone" value="{{$restaurant->close_at}}">
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('js')
            <script>
                initMap();
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmLXxdC27YMzr-MS8x2MgrVSr5qb0sRC4"></script>

            <script>
                function initMap() {
                    var restaurant = {lat: {{ $restaurant->lat }}, lng: {{ $restaurant->lng }}};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 16,
                        center: restaurant
                    });
                    var marker = new google.maps.Marker({
                        position: restaurant,
                        map: map
                    });
                }

                google.maps.event.addDomListener(window, 'load', initMap);
            </script>
@endsection
