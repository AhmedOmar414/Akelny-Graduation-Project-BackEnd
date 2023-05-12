@extends('website.layout.layout')
@section('content')
    <!------------------------most-popular----------------->
    <section class="most-popular mst-ppulr"style="padding-bottom:80px ;">
        <div class="collecter ">
            <div class="container-popular ">

                <div class="links  mb-2 ">

                    <h3>All Restaurants</h3>
                </div>

                <div class="row-colleter ">
                    @foreach($restaurants as $restaurant)
                        <div class="col-popular">
                            <div class="card-popular ">
                                <div class="up-part">

                                    <a href="{{route('menu',$restaurant->id)}}"><img src="{{url('images/restaurants/'.$restaurant->logo)}}" alt=""></a>
                                    <div class="text-views ">
                                        <input type="hidden" name="restaurant_id" class="restaurant_id" data-restaurant-id="{{ $restaurant->id }}">
                                        <button type="button" class="favorite views-btn">
                                            <i class="bi bi-heart" aria-hidden="true"></i>
                                        </button>
                                        @if($restaurant->offers->count() >=1)
                                            <p style="background-color: crimson">OFFER</p>
                                        @endif
                                    </div>
                                    <div class="rate-views">
                                        <i class="bi bi-star"></i> {{ round($restaurant->reviews->avg('stars'),2)}} ({{$restaurant->reviews->count('id')}})
                                    </div>
                                </div>
                                <div class="down-part">
                                    <a href="">{{$restaurant->restaurant_name}}</a><br>
                                    @foreach($restaurant->categories as $categories)

                                        <i class="bi bi-circle-fill" ></i> <span style="font-size: 12px;color: grey" >{{$categories->name}} </span>
                                    @endforeach
                                    <br><br>
                                    <div class="time ">
                                        @for($i=1; $i<=5; $i++)
                                            @if($i<=$restaurant->reviews->avg('stars'))
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

            </div>
        </div>
    </section>

@endsection
