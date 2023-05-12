@extends('website.layout.layout')
@section('content')
<!------------------------most-popular----------------->
<section class="most-popular mst-ppulr"style="padding-bottom:80px ;">
    <div class="collecter ">
        <div class="container-popular ">

            <div class="links  mb-2 ">

                <h3>Most Popular</h3>
                <button type="button" onclick="toggle()" style=" width:70px;" class="redBtn view-modal1">Filters</button>
            </div>

            <div class="row-colleter ">
                    @foreach($mostPopulars as $mostPopular)
                        <div class="col-popular">
                            <div class="card-popular ">
                                <div class="up-part">

                                    <a href="{{route('menu',$mostPopular->id)}}"><img src="{{url('images/restaurants/'.$mostPopular->logo)}}" alt=""></a>
                                    <div class="text-views">
                                        <input type="hidden" name="restaurant_id" class="restaurant_id" data-restaurant-id="{{ $mostPopular->id }}">
                                        <button type="button" class="favorite views-btn">
                                            <i class="bi bi-heart" aria-hidden="true"></i>
                                        </button>


                                        @if($mostPopular->offers->count() >=1)
                                            <p style="background-color:crimson">OFFER</p>
                                        @endif

                                    </div>
                                    <div class="rate-views">

                                        <i class="bi bi-star"></i>{{ round($mostPopular->reviews->avg('stars'),2)}} ({{$mostPopular->reviews->count('id')}})
                                    </div>
                                </div>
                                <div class="down-part">
                                    <a href="{{ route('menu', $mostPopular->id) }}">{{ $mostPopular->restaurant_name }}</a><br>
                                    @foreach ($mostPopular->categories as $category)
                                        <i class="bi bi-circle-fill"></i> <span style="font-size: 12px;color: grey">{{ $category->name }}</span>
                                    @endforeach
                                    <br><br>
                                    <div class="time">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $mostPopular->reviews->avg('stars'))
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
