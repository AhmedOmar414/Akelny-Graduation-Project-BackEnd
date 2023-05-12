@extends('website.layout.layout')
@section('content')
<!------------------------most-popular----------------------->
<section class="most-popular trending"style="padding-bottom:80px ;">
    <div class="collecter">
        <div class="container-popular d-block ">

            <div class="links ">

                <h3>Trending</h3>
                <button type="button" onclick="toggle()" style=" width:70px;" class="redBtn view-modal1">Filters</button>
            </div>

            <div class="row-colleter ">
                @foreach($trendingProducts as $trendingProduct)
                <div class="col-popular">
                    <div class="card-popular ">
                        <div class="up-part">
                            <a href=""><img src="{{url("images/products/".$trendingProduct->photo)}}" alt=""></a>
                            <div class="text-views ">
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                                </button>
                                @if($trendingProduct->offer)
                                    <p style="background-color: crimson">OFFER</p>
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
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

@endsection
