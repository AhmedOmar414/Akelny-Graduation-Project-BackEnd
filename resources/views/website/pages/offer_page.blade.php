@extends('website.layout.layout')
@section('content')
    <!--------------------offers-caption-------------->


    <!------------------------most-popular---------------------->
    <section >
        <div class="center d-flex justify-content-center ">
            <div class="collecter d-block pb-5 pt-4">
                <div class="links d-block mb-4">
                    <h5>All offers ({{$allOffers->count()}})</h5>
                    <p style="font-size: 14px;">All offers and deals, from restaurants near you</p>
                </div>
                <div class="container-popular">
                    <div class="row-popular  ">
                        @foreach($allOffers as $allOffer)
                            <div class="col-popular">
                                <div class="card-popular">
                                    <div class="up-part">

                                        <a href="{{route('menu',$allOffer->id)}}"><img src="{{url('images/restaurants/'.$allOffer->logo)}}" alt=""></a>
                                        <div class="text-views ">
                                            <input type="hidden" name="restaurant_id" class="restaurant_id" data-restaurant-id="{{ $allOffer->id }}">
                                            <button type="button" class="favorite views-btn">
                                                <i class="bi bi-heart" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="rate-views">

                                            <i class="bi bi-star"></i>{{ round($allOffer->reviews->avg('stars'),2)}} ({{$allOffer->reviews->count('id')}})
                                        </div>
                                    </div>
                                    <div class="down-part">
                                        <a href="">{{$allOffer->restaurant_name}}</a><br>
                                        @foreach($allOffer->categories as $categories)

                                            <i class="bi bi-circle-fill" ></i> <span style="font-size: 12px;color: grey" >{{$categories->name}} </span>
                                        @endforeach
                                        <br><br>
                                        <div class="time ">
                                            @for($i=1; $i<=5; $i++)
                                                @if($i<=$allOffer->reviews->avg('stars'))
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
        </div>
    </section>

@endsection
