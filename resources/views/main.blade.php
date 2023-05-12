@extends('website.layout.layout')
@section('content')
<!------------------------categories------------------->
@if($categories->count() >=1)
<section class="product" >

    <div class="tistemonial ">

        <button type="button" class="slider-btn btn1 " onclick="prev()">
            <i class="bi bi-chevron-left" aria-hidden="true"></i></button>
        <button type="button" class="slider-btn btn2" onclick="next()">
            <i class="bi bi-chevron-right" aria-hidden="true"></i></button>

        <div class="slider-wrap ">
            <div class="slider-main " id="slider-main">
                @foreach($categories as $category)
                    <div class="item">
                        <a href="{{route('menu',$category->restaurant_id)}}" class="likPages">
                            <div class="content-cover">
                                <div class="content-meals">
                                    <img src="{{url('images/categories/'.$category->photo)}}" alt="">
                                    <p>{{$category->name}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

</section>
@endif
<!------------------------offers--------------------->
@if($offers->count() >=1)
<section class="offers">
    <div class="tistemonial">

        <button type="button" class="slider-btn btn1  " onclick="prev1()">
            <i class="bi bi-chevron-left" aria-hidden="true"></i></button>
        <button type="button" class="slider-btn btn2 " onclick="next1()">
            <i class="bi bi-chevron-right" aria-hidden="true"></i></button>

        <div class="slider-wrap ">
            <div class="slider-main " id="slider-main-offers">
              @foreach($offers as $offer)
                <div class="item-offers">
                       <a class="likPages" href="{{route('menu',$offer->restaurant_id)}}"> <img src="{{url('images/offers',$offer->photo)}}" alt=""></a>
                        <div class="text-offer">OFFER</div>
                        <a href="{{route('menu',$offer->restaurant_id)}}"  style="margin-top: 40%;margin-left: 10%; text-decoration: none;position: absolute;color: white;font-weight: bold;font-size: 20px">{{$offer->title}}</a>
                        <a href="{{route('menu',$offer->restaurant_id)}}" style="margin-top: 50%;margin-left: 20%;text-decoration: none; position: absolute;color: white;font-weight: bold;font-size: 14px;overflow-wrap: break-word;" >{{$offer->description}}</a>


                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
@endif

<!------------------------view_All---------------------->
<section class="view_All">
    <div class="collecter">
        <div class="links">
            <h5>Trending this week</h5>
            <a href="{{route('trending')}}">View all <i class="bi bi-chevron-double-right"></i></a>
        </div>

        <div class="tistemonial-Views ">

            <button type="button" class="slider-btn btn1  " onclick="prev2()">
                <i class="bi bi-chevron-left" aria-hidden="true"></i>
            </button>
            <button type="button" class="slider-btn btn2 " onclick="next2()">
                <i class="bi bi-chevron-right" aria-hidden="true"></i></button>

            <div class="slider-wrap ">
                <div class="slider-main " id="slider-main-Views">
                  @foreach($trendingProducts as $trendingProduct)
                    <div class="item-Views">
                        <div class="up-part">
                            @if ($trendingProduct->category)
                            @if ($trendingProduct->category->restaurant)
                            <a href="{{route('menu',$trendingProduct->category->restaurant->id )}}"><img src="{{url("images/products/".$trendingProduct->photo)}}" alt=""></a>
                            @endif
                            @endif

                            <div class="text-views ">
                                <input type="hidden" name="product_id" class="product_id" data-product-id="{{ $trendingProduct->id }}">
                                <input type="hidden" name="restaurant_id" id="restaurant_id" data-restaurant-id="{{ $trendingProduct->category->restaurant->id }}">
                                <button type="button" class="views-btn favorite_product" >
                                    <i class="bi bi-heart" aria-hidden="true">
                                    </i>
                                </button>
                                @if($trendingProduct->offer)
                                    <p style="background-color:crimson">OFFER</p>
                                @endif

                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <div class="time" style="margin-bottom: 5px">
                                <a class="down-part-a" href="">{{$trendingProduct->name}}</a>
                                <p style="color:crimson;"> ${{$trendingProduct->price}} </p>
                            </div>
                            <p>{{$trendingProduct->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>


</section>

<!------------------------most-popular------------------->
<section class="most-popular">
    <div class="collecter">
        <div class="container-popular">

            <div class="links">

                <h5>Most popular</h5>
                <a href="{{route('most.popular')}}">{{$totalCountMostPopulars}} places <i class="bi bi-chevron-double-right"></i></a>
            </div>

            <div class="row-popular">
                @foreach($mostPopulars as $mostPopular)

                    <div class="col-popular">
                        <div class="card-popular">
                            <div class="up-part">
                                <a href="{{ route('menu', $mostPopular->id) }}"><img src="{{ url('images/restaurants/'.$mostPopular->logo) }}" alt=""></a>
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
                                    @if ($mostPopular->reviews->count('id') >= 100)
                                        <i class="bi bi-star"></i> &nbsp;{{ round($mostPopular->reviews->avg('stars'),2) }}( 100+ )
                                    @else
                                        <i class="bi bi-star"></i> &nbsp;{{ round($mostPopular->reviews->avg('stars'),2) }}( {{ $mostPopular->reviews->count('id') }} )
                                    @endif
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

<!------------------------most-sales--------------------->
<section class="most-sales">
    <div class="collecter">

        <div class="links">
            <h5>Most Sales</h5>
            <a href="{{route('most.sale')}}">{{$totalCountMostSales}} places <i class="bi bi-chevron-double-right"></i></a>
        </div>

        <div class="container-sales">
            @foreach($mostSales as $mostSale)
            <div class="card-sales ">
                <div class="row-sales card-popular">
                    <div class="up-part">
                        <a href="{{route('menu',$mostSale->id)}}"><img src="{{url("images/restaurants/".$mostSale->logo)}}" alt=""></a>
                        <div class="text-views ">
                            <input type="hidden" name="restaurant_id" class="restaurant_id" data-restaurant-id="{{ $mostSale->id }}">
                            <button type="button" class="favorite views-btn">
                                <i class="bi bi-heart" aria-hidden="true"></i>
                            </button>
                            @if($mostSale->offers->count() >=1)
                                <p style="background-color: crimson">OFFER</p>
                            @endif

                        </div>
                        <div class="rate-views">
                            @if($mostSale->reviews->count('id')>100)
                            <i class="bi bi-star"></i> &nbsp;{{ round($data->reviews->avg('stars'),2)}} (100+)
                            @else
                                <i class="bi bi-star"></i> &nbsp;{{ round($mostSale->reviews->avg('stars'),2)}} ({{$mostSale->reviews->count('id')}})
                            @endif
                        </div>
                    </div>
                    <div class="down-part ">
                        <div class="down-part">
                            <a href="{{route('menu',$mostSale->id)}}">{{$mostSale->restaurant_name}}</a><br>
                            @foreach($mostSale->categories as $categories)

                                <i class="bi bi-circle-fill" ></i> <span style="font-size: 12px;color: grey" >{{$categories->name}} </span>
                            @endforeach
                            <br><br>
                            <div class="time ">
                                @for($i=1; $i<=5; $i++)
                                    @if($i<=$mostSale->reviews->avg('stars'))
                                        <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                    @else
                                        <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>



@endsection

