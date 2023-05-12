@extends('website.layout.layout')
@section('content')
    <!------------------------favorite----------------------->
    <section class="most-popular trending"style="padding-bottom:80px ;">
        <div class="collecter">
            <div class="container-popular d-block ">

                <div class="links ">

                    <h3>Favorite Restaurants</h3>
                </div>
@if($favorite_restaurants->count()>0)
                <div class="row-colleter ">
                    @foreach($favorite_restaurants as $favorite)
                    <div class="col-popular">
                        <div class="card-popular ">
                            <div class="up-part">
                                <a href="{{ route('menu', $favorite->restaurant->id) }}"><img src="{{ url('images/restaurants/'.$favorite->restaurant->logo) }}" alt=""></a>
                                <div class="text-views">

                                    <input type="hidden" name="restaurant_id" class="restaurant_id" data-restaurant-id="{{ $favorite->restaurant->id }}">

                                    <button type="button" class="views-btn delete-favorite" data-id="{{ $favorite->id }}">
                                        <i class="bi bi-heart-fill" aria-hidden="true"></i>
                                    </button>
                                    @if($favorite->restaurant->offers->count() >=1)
                                        <p style="background-color:crimson">OFFER</p>
                                    @endif

                                </div>
                                <div class="rate-views">
                                    @if ($favorite->restaurant->reviews->count('id') >= 100)
                                        <i class="bi bi-star"></i> &nbsp;{{ round($favorite->restaurant->reviews->avg('stars'),2) }}( 100+ )
                                    @else
                                        <i class="bi bi-star"></i> &nbsp;{{ round($favorite->restaurant->reviews->avg('stars'),2) }}( {{ $favorite->restaurant->reviews->count('id') }} )
                                    @endif
                                </div>
                            </div>
                            <div class="down-part">
                                <a href="{{ route('menu', $favorite->restaurant->id) }}">{{ $favorite->restaurant->restaurant_name }}</a><br>
                                @foreach ($favorite->restaurant->categories as $category)
                                    <i class="bi bi-circle-fill"></i> <span style="font-size: 12px;color: grey">{{ $category->name }}</span>
                                @endforeach
                                <br><br>
                                <div class="time">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $favorite->restaurant->reviews->avg('stars'))
                                            <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                        @else
                                            <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                                        @endif
                                    @endfor
                                </div>
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
                                <h2> No restaurants listed</h2>
                                <p class="p2">if you think this is a problem with us, please <span class="text-danger">tell us</span>.</p>
                            </div>
                            <div class="down d-flex justify-content-center mt-5">
                                <a class="nav-link active me-1" aria-current="page" href="{{route('/')}}"><button type="button" class="btn btn-danger">Go Back</button></a>
                                <a class="nav-link active me-1"  href="{{route('contact_us')}}"><button type="button" class="btn btn-light">Help</button></a>
                            </div>
                        </div>
                    </section>
                @endif
            </div>
        </div>
    </section>

@endsection
