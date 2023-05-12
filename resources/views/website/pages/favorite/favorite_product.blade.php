@extends('website.layout.layout')
@section('content')
    <!------------------------favorite products----------------------->
    <section class="most-popular trending"style="padding-bottom:80px ;">
        <div class="collecter">
            <div class="container-popular d-block ">

                <div class="links ">

                    <h3>Favorite Products</h3>
                </div>
@if($favorite_products->count()>0 )
                <div class="row-colleter ">
                    @foreach($favorite_products as $favorite)
                        <div class="col-popular">
                            <div class="card-popular">
                                <div class="up-part">
                                    <a href="{{ route('menu', $favorite->restaurant_id) }}"><img src="{{ url('images/products/'.$favorite->product->photo) }}" alt=""></a>
                                    <div class="text-views ">
                                        <input type="hidden" name="restaurant_id" class="restaurant_id" data-restaurant-id="{{ $favorite->restaurant_id }}">

                                        <button type="button" class="views-btn delete-favorite-product" data-id="{{ $favorite->id }}">
                                            <i class="bi bi-heart-fill" aria-hidden="true"></i>
                                        </button>
                                        @if($favorite->offer)
                                            <p style="background-color:crimson">OFFER</p>
                                        @endif

                                    </div>
                                    <div class="rate-views">
                                        <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                                    </div>
                                </div>
                                <div class="down-part">
                                    <div class="time" style="margin-bottom: 5px">
                                        <a class="down-part-a" href="">{{$favorite->product->name}}</a>
                                        <p style="color:crimson;"> ${{$favorite->product->price}} </p>
                                    </div>
                                    <p>{{$favorite->product->description}}</p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
                @else

                    <section class="notFound">
                        <div class="collecter" >
                            <div class="header">
                                <img src="{{asset('images/chef2.png')}}" style="width: 250px; height: 250px;" alt="">
                            </div>
                            <div class="body d-block text-center">
                                <h2> No products listed</h2>
                                <p class="p2">if you think this is a problem with us, please <span class="text-danger">tell us</span>.</p>
                            </div>
                            <div class="down d-flex justify-content-center mt-5">
                                <a class="nav-link active me-1 "aria-current="page" href="{{route('/')}}"><button type="button" class="btn btn-danger">Go Back</button></a>
                                <a class="nav-link active me-1"  href="{{route('contact_us')}}"><button type="button" class="btn btn-light">Help</button></a>
                            </div>
                        </div>
                    </section>


                @endif
            </div>
        </div>
    </section>

@endsection
