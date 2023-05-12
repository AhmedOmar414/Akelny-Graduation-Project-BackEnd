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
                                <li class="breadcrumb-item"><a href="{{route('profile.index')}}"> profile</a>
                                </li>
                                <li class="breadcrumb-item active">Edit
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger" style=" margin-right: 22px;  margin-left: 22px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                                <h3 class="mb-2 text-primary">Update Restaurant Details</h3>
                            </div>
                            <form  method="POST" action="{{route('profile.update',['profile'=>$restaurant->id])}}" enctype="multipart/form-data">
                                {{ method_field('patch') }}
                                {{ csrf_field() }}
                                <div class="input-group" style="align-items: center" >
                                    <img style="margin-left: 40%" id="image-preview" src="#" alt="No Image Selected" >
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="exampleInputLogo">logo</label>
                                    <input type="file" id="image"  style="width: 380px" value="{{$restaurant->logo}}" class="form-control form-control-lg" name="logo" placeholder="logo"/>
                                </div>
                                @error('logo')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName"> Name</label>
                                        <input  type="text" name="restaurant_name" class="form-control form-control-lg" id="fullName" value="{{$restaurant->restaurant_name}}">
                                    </div>
                                </div>
                                @error('restaurant_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">address</label>
                                        <input  type="text" name="address" class="form-control form-control-lg" id="eMail" value="{{$restaurant->address}}">
                                    </div>
                                </div>
                                @error('address')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <div id="map" style="height: 400px;"></div>
                                <input type="text" class="form-control" id="latitude" name="lat" value="{{$restaurant->lat}}">
                                <input type="text" class="form-control" id="longitude" name="lng" value="{{$restaurant->lng}}">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">open_at</label>
                                        <input  type="datetime-local" class="form-control form-control-lg" name="open_at" id="open_at" value="{{$restaurant->open_at}}">
                                    </div>
                                </div>
                                @error('open_at')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">close_at</label>
                                        <input  type="datetime-local" class="form-control form-control-lg" name="close_at" id="close_at" value="{{$restaurant->close_at}}">
                                    </div>
                                </div>
                                @error('close_at')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('js')
            <script>
                function initMap() {
                    const latitude = parseFloat(document.getElementById('latitude').value);
                    const longitude = parseFloat(document.getElementById('longitude').value);

                    const myLatlng = { lat: latitude, lng: longitude };
                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 8,
                        center: myLatlng,
                    });
                    const marker = new google.maps.Marker({
                        position: myLatlng,
                        map,
                        draggable: true,
                    });
                    google.maps.event.addListener(marker, "dragend", function (event) {
                        document.getElementById("latitude").value = this.getPosition().lat();
                        document.getElementById("longitude").value = this.getPosition().lng();
                    });
                }

                // Trigger the initMap() function to update the map
                initMap();
            </script>
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#image-preview').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#image").change(function() {
                    readURL(this);
                });
            </script>
@endsection
