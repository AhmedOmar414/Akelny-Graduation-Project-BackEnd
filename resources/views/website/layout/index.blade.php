<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.layout.head')
</head>
<body>

@include('website.layout.header')

<!------------------------product------------------->
<section class="product" >

    <div class="tistemonial ">

        <button type="button" class="slider-btn btn1 " onclick="prev()">
            <i class="bi bi-chevron-left" aria-hidden="true"></i>
        </button>
        <button type="button" class="slider-btn btn2" onclick="next()">
            <i class="bi bi-chevron-right" aria-hidden="true"></i>
        </button>

        <div class="slider-wrap ">
            <div class="slider-main " id="slider-main">

                <div class="item">
                    <a href="website/trendingPage.html"class="likPages">
                        <div class="content-cover">
                            <div class="content-meals">
                                <img src="{{asset('website/images/fries.png')}}" alt="">
                                <p>Fries</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="website/trendingPage.html" class="likPages">
                        <div class="content-cover">
                            <div class="content-meals">
                                <img src="{{asset('website/images/pizza.png')}}" alt="">
                                <p>Pizza</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="website/trendingPage.html" class="likPages">
                        <div class="content-cover">
                            <div class="content-meals">
                                <img src="{{asset('website/images/burger.png')}}" alt="">
                                <p>Burger</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="website/trendingPage.html" class="likPages">
                        <div class="content-cover">
                            <div class="content-meals">
                                <img src="{{asset('website/images/sandwitch.png')}}" alt="">
                                <p>Sandwitch</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="website/trendingPage.html" class="likPages">
                        <div class="content-cover">
                            <div class="content-meals">
                                <img src="{{asset('website/images/coffee.png')}}" alt="">
                                <p>Coffee</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="website/trendingPage.html" class="likPages">
                        <div class="content-cover">
                            <div class="content-meals">
                                <img src="{{asset('website/images/steak.png')}}" alt="">
                                <p>Steak</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="website/trendingPage.html" class="likPages">
                        <div class="content-cover">
                            <div class="content-meals">
                                <img src="{{asset('website/images/colacan.png')}}" alt="">
                                <p>Colacan</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="website/trendingPage.html" class="likPages">
                        <div class="content-cover">
                            <div class="content-meals">
                                <img src="{{asset('website/images/breakfast.png')}}" alt="">
                                <p>Breakfast</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="website/trendingPage.html" class="likPages">
                        <div class="content-cover">
                            <div class="content-meals">
                                <img src="{{asset('website/images/salad.png')}}" alt="">
                                <p>Salad</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>

</section>


<!------------------------offers--------------------->
<section class="offers">

    <div class="tistemonial">

        <button type="button" class="slider-btn btn1  " onclick="prev1()">
            <i class="bi bi-chevron-left" aria-hidden="true"></i>
        </button>
        <button type="button" class="slider-btn btn2 " onclick="next1()">
            <i class="bi bi-chevron-right" aria-hidden="true"></i>
        </button>

        <div class="slider-wrap ">
            <div class="slider-main " id="slider-main-offers">

                <div class="item-offers">
                    <a href="website/trendingPage.html" class="likPages">
                        <img src="{{asset("website/images/ballons.webp")}}" alt="">
                        <div class="text-offer">OFFER</div>
                    </a>
                </div>

                <div class="item-offers">
                    <a href="website/trendingPage.html" class="likPages">
                        <img src="{{asset("website/images/spac.jpg")}}" alt="">
                        <div class="text-offer">DISCOUNT</div>
                    </a>
                </div>

                <div class="item-offers">
                    <a href="website/trendingPage.html" class="likPages">
                        <img src="{{asset("website/images/skater-dudes.webp")}}" alt="">
                        <div class="text-offer">TRY&nbsp;NOW</div>
                    </a>
                </div>


                <div class="item-offers">
                    <a href="website/trendingPage.html" class="likPages">
                        <img src="{{asset("website/images/table.jpg")}}" alt="">
                        <div class="text-offer">EXPLORE</div>
                    </a>
                </div>

                <div class="item-offers">
                    <a href="website/trendingPage.html" class="likPages">
                        <img src="{{asset("website/images/spac.jpg")}}" alt="">
                        <div class="text-offer">OFFER</div>
                    </a>
                </div>
            </div>
        </div>

    </div>

    </div>

    </div>

</section>


<!------------------------view_All---------------------->
<section class="view_All">
    <div class="collecter">
        <div class="links">
            <h5>Trending this week</h5>
            <a href="website/trendingPage.html">View all <i class="bi bi-chevron-double-right"></i></a>
        </div>

        <div class="tistemonial-Views ">

            <button type="button" class="slider-btn btn1  " onclick="prev2()">
                <i class="bi bi-chevron-left" aria-hidden="true"></i>
            </button>
            <button type="button" class="slider-btn btn2 " onclick="next2()">
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </button>


            <div class="slider-wrap ">
                <div class="slider-main " id="slider-main-Views">

                    <div class="item-Views">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/noodle.webp")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a class="down-part-a" href="website/menuePage.html">Famous Dave's Bar-B-Que</a>
                            <p>Vegetarian <i class="bi bi-circle-fill"></i> Indian <i class="bi bi-circle-fill"></i> Pure veg</p>
                            <div class="time">
                                <span class="spn-time"><i class="bi bi-clock"></i> 15-30 min</span>
                                <p > $350 FOR TWO </p>
                            </div>
                            <p><span class="spn-views">OFFER</span> &nbsp;Use Coupon OSAHAN50 </p>
                        </div>
                    </div>

                    <div class="item-Views">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/salad.jpg")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">Famous Dave's Bar-B-Que</a>
                            <p>Vegetarian <i class="bi bi-circle-fill"></i> Indian <i class="bi bi-circle-fill"></i> Pure veg</p>
                            <div class="time">
                                <span class="spn-time"><i class="bi bi-clock"></i> 15-30 min</span>
                                <p> $350 FOR TWO </p>
                            </div>
                            <p><span class="spn-views">OFFER</span> &nbsp;Use Coupon OSAHAN50 </p>
                        </div>
                    </div>

                    <div class="item-Views">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/beef.jpg")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">Famous Dave's Bar-B-Que</a>
                            <p>Vegetarian <i class="bi bi-circle-fill"></i> Indian <i class="bi bi-circle-fill"></i> Pure veg</p>
                            <div class="time">
                                <span class="spn-time"><i class="bi bi-clock"></i> 15-30 min</span>
                                <p> $350 FOR TWO </p>
                            </div>
                            <p><span class="spn-views">OFFER</span> &nbsp;Use Coupon OSAHAN50 </p>
                        </div>
                    </div>

                    <div class="item-Views">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/salad.jpg")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">Famous Dave's Bar-B-Que</a>
                            <p>Vegetarian <i class="bi bi-circle-fill"></i> Indian <i class="bi bi-circle-fill"></i> Pure veg</p>
                            <div class="time">
                                <span class="spn-time"><i class="bi bi-clock"></i> 15-30 min</span>
                                <p> $350 FOR TWO </p>
                            </div>
                            <p><span class="spn-views">OFFER</span> &nbsp;Use Coupon OSAHAN50 </p>
                        </div>
                    </div>

                </div>
            </div>

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
                <a href="website/mostPopularPage.html">26 places <i class="bi bi-chevron-double-right"></i></a>
            </div>

            <div class="row-popular  ">
                <div class="col-popular">
                    <div class="card-popular ">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/tomato-soup.jpg")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">The osahan Restaurant</a>
                            <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                            <div class="time ">
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                            </div>
                            <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                        </div>
                    </div>
                </div>

                <div class="col-popular">
                    <div class="card-popular ">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/spaghetti.jpeg")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">The osahan Restaurant</a>
                            <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                            <div class="time ">
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                            </div>
                            <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                        </div>
                    </div>
                </div>

                <div class="col-popular">
                    <div class="card-popular ">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/French-food.jpg")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="#">The osahan Restaurant</a>
                            <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                            <div class="time ">
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                            </div>
                            <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                        </div>
                    </div>
                </div>

                <div class="col-popular">
                    <div class="card-popular ">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/seafood-paella.webp")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">The osahan Restaurant</a>
                            <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                            <div class="time ">
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                            </div>
                            <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                        </div>
                    </div>
                </div>

                <div class="col-popular">
                    <div class="card-popular ">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/noodle.webp")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">The osahan Restaurant</a>
                            <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                            <div class="time ">
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                            </div>
                            <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                        </div>
                    </div>
                </div>

                <div class="col-popular">
                    <div class="card-popular ">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/salad.jpg")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">The osahan Restaurant</a>
                            <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                            <div class="time ">
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                            </div>
                            <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                        </div>
                    </div>
                </div>

                <div class="col-popular">
                    <div class="card-popular ">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/beef.jpg")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">The osahan Restaurant</a>
                            <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                            <div class="time ">
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                            </div>
                            <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                        </div>
                    </div>
                </div>

                <div class="col-popular">
                    <div class="card-popular ">
                        <div class="up-part">
                            <a href="website/menuePage.html"><img src="{{asset("website/images/istock.jpg")}}" alt=""></a>
                            <div class="text-views ">
                                <p>Promoted</p>
                                <button type="button" class="views-btn  "  >
                                    <i class="bi bi-heart" aria-hidden="true"></i>
                            </div>
                            <div class="rate-views">
                                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                            </div>
                        </div>
                        <div class="down-part">
                            <a href="website/menuePage.html">The osahan Restaurant</a>
                            <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                            <div class="time ">
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn"> <i class="bi bi-star"></i> </span>
                                <span class="time-spn bg-black"> <i class="bi bi-star"></i> </span>
                            </div>
                            <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>

<!------------------------most-sales--------------------->
<section class="most-sales">
    <div class="collecter">

        <div class="links">
            <h5>Most Sales</h5>
            <a href="#">26 places <i class="bi bi-chevron-double-right"></i></a>
        </div>

        <div class="container-sales">
            <div class="card-sales ">
                <div class="row-sales ">
                    <div class="up-part">
                        <a href="website/menuePage.html"><img src="{{asset("website/images/istock.jpg")}}" alt=""></a>
                        <div class="text-views ">
                            <p>Promoted</p>
                            <button type="button" class="views-btn  "  >
                                <i class="bi bi-heart" aria-hidden="true"></i>
                        </div>
                        <div class="rate-views">
                            <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                        </div>
                    </div>
                    <div class="down-part ">
                        <a href="website/menuePage.html">The osahan Restaurant</a>
                        <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                        <div class="time ">
                            <span class="spn-time"><i class="bi bi-clock"></i> 15-30 min</span>
                        </div>
                        <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                    </div>
                </div>
            </div>


            <div class="card-sales ">
                <div class="row-sales ">
                    <div class="up-part">
                        <a href="website/menuePage.html"><img src="{{asset("website/images/beef.jpg")}}" alt=""></a>
                        <div class="text-views ">
                            <p>Promoted</p>
                            <button type="button" class="views-btn  "  >
                                <i class="bi bi-heart" aria-hidden="true"></i>
                        </div>
                        <div class="rate-views">
                            <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                        </div>
                    </div>
                    <div class="down-part">
                        <a href="website/menuePage.html">The osahan Restaurant</a>
                        <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                        <div class="time ">
                            <span class="spn-time"><i class="bi bi-clock"></i> 15-30 min</span>
                        </div>
                        <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                    </div>
                </div>
            </div>


            <div class="card-sales ">
                <div class="row-sales">
                    <div class="up-part">
                        <a href="website/menuePage.html"><img src="{{asset("website/images/salad.jpg")}}" alt=""></a>
                        <div class="text-views ">
                            <p>Promoted</p>
                            <button type="button" class="views-btn  "  >
                                <i class="bi bi-heart" aria-hidden="true"></i>
                        </div>
                        <div class="rate-views">
                            <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                        </div>
                    </div>
                    <div class="down-part">
                        <a href="website/menuePage.html">The osahan Restaurant</a>
                        <p> <i class="bi bi-circle-fill"></i> &nbsp; North &nbsp; <i class="bi bi-circle-fill"></i> &nbsp; hamburgers</p>
                        <div class="time ">
                            <span class="spn-time"><i class="bi bi-clock"></i> 15-30 min</span>
                        </div>
                        <p ><span class="spn-views">OFFER</span> &nbsp;65% OSAHAN50 </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!------------------------footer--------------------->
<section class="footer">
    <div class="container-footer">
        <div class="row-footer">

            <div class="col-footer" style="grid-column: span 2;">
                <div style=" width: 65px;">
                    <img src="{{asset("website/images/spoon-and-a-fork-in-a-circle-640w.png")}}" class="logo bg-white">
                </div>
                <Div class="content-footer ">
                    <h5>About Us</h5>
                    <p>some short text about company like you might <br> remember the Dell computer commercials in <br> which a youth report</p>
                    <span>
          <a href="" ><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-youtube"></i></a>
          <a href=""><i class="bi bi-twitter"></i></a>
        </span>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <h5>Error Pages</h5>
                    <a href="website/notFoundPage.html">Not found</a><br>
                    <a href="website/MaintencePage.html">Maintence</a><br>
                    <a href="website/comingSoonPage.html">Coming Soon</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <h5>Services</h5>
                    <a href="website/deliverySupportPage.html">Delivery Support</a><br>
                    <a href="website/contactUsPage.html">Contact Us</a><br>
                    <a href="website/termOfUsePage.html">Terms of use</a><br>
                    <a href="website/privacyPolicyPage.html">Privace policy</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <h5>For users</h5>
                    <a href="website/signInPage.html">User login</a><br>
                    <a href="website/signUpPage.html">User register</a><br>
                    <a href="/forgotPasswordPage.html">Forgot Password</a><br>
                    <a href="website/myAccount.html">Account Setting</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <h5>More Pages</h5>
                    <a href="website/trendingPage.html">Trending</a><br>
                    <a href="website/mostPopularPage.html">Most Popular</a><br>
                    <a href="website/menuePage.html">Resturant Details</a><br>
                    <a href="website/favoritePage.html">Favoraits</a>
                </Div>
            </div>
        </div>

        <hr style="color: rgb(119, 118, 118);">

        <div class="row-footer">

            <div class="col-footer">
                <Div class="content-footer ">
                    <h5>Countries</h5>
                    <a href="#">India</a><br>
                    <a href="#">Indonesia</a><br>
                    <a href="#">Ireland</a><br>
                    <a href="#">Italy</a><br>
                    <a href="#">Lebanon</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <br>
                    <a href="#">Malaysia</a><br>
                    <a href="#">New Zelanda</a><br>
                    <a href="#">Philippines</a><br>
                    <a href="#">Poland</a><br>
                    <a href="#">Partugal</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <br>
                    <a href="#">Australia</a><br>
                    <a href="#">Brasil</a><br>
                    <a href="#">Canada</a><br>
                    <a href="#">Chile</a><br>
                    <a href="#">Czech Republic</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <br>
                    <a href="#">turkey</i></a><br>
                    <a href="#">UAE</a><br>
                    <a href="#">United Kingdom</a><br>
                    <a href="#">United States</a><br>
                    <a href="#">Sri Lanka</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <br>
                    <a href="#">Qatar</i></a><br>
                    <a href="#">Singapora</a><br>
                    <a href="#">Slovakia</a><br>
                    <a href="#">South Africa</a><br>
                    <a href="#">Green Land</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <br>
                    <a href="#">Pakistan</i></a><br>
                    <a href="#">Bangladesh</a><br>
                    <a href="#">Bhutaan</a>
                    <a href="#">Nepal</a>
                </Div>
            </div>
        </div>
    </div>
    <div class="rights">
        <div class="container-rights">
            <p><i class="bi bi-c-circle"></i> &nbsp; 2020 Company All rights reserved</p>
            <div class="app-stors">

                <div class="app-btn ">
                    <a href="#"> <img src="{{asset("website/images/App_Store.png")}}" alt=""></a>
                </div>

                <div class="app-btn">
                    <a href="#"><img src="{{asset("website/images/google-play.png")}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="simplefooter">
    <div class="right d-flex" >
        <a href="website/main.html">
            <button type="button" class="bg-light">
                <img src="{{asset("website/images/home-red.png")}}" alt="">
                <p class="text-danger" style="font-size: 12px;">Home</p>
            </button>
        </a>

        <a href="website/trendingPage.html">
            <button type="button">
                <img src="{{asset("website/images/location.png")}}" alt="">
                <p>Trending</p>
            </button>
        </a>
    </div>

    <div class="middle ">
        <a href="website/deliveryAddressPage.html">
            <button type="button" >
                <img src="{{asset("website/images/shopping-card.png")}}" style="width: 35px; height: 35px;"  alt="">
            </button>
        </a>
    </div>

    <div class="left  d-flex">
        <a href="website/favoritePage.html">
            <button type="button" >
                <img src="{{asset("website/images/heart.png")}}"  alt="">
                <p>Favorite</p>
            </button>
        </a>

        <a href="website/myAccount.html">
            <button type="button" >
                <img src="{{asset("website/images/person.png")}}" alt="">
                <p>Profile</p>
            </button>
        </a>
    </div>
</section>




<div class="popupFilter">
    <div class="popurBody ">
        <div class="links ">
            <h4 >Filter</h4>
            <div class="text-end"><img src="{{asset("website/images/close.png")}}" onclick="close();" class="close"></div>
        </div>
        <div class="scrolling-body" >
            <div class="body-sub-menu ">

                <h6 class="bg-light header">SORT BY</h6>

                <li class="form-check">
                    <div>
                        <label class="form-check-label" for="flexRadioDefault1">Top Rated</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                </li>
                <li class="list-unstyled">
                    <div>
                        <label class="form-check-label" for="flexRadioDefault2">Nearest Me</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    </div>
                </li>
                <li class="list-unstyled">
                    <div>
                        <label class="form-check-label" for="flexRadioDefault3">Cost High To Low</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    </div>
                </li>
                <li class=" list-unstyled">
                    <div>
                        <label class="form-check-label" for="flexRadioDefault4">Cost Low To High</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                    </div>
                </li>
                <li class=" list-unstyled">
                    <div>
                        <label class="form-check-label" for="flexRadioDefault5">Most Popular</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                    </div>
                </li>
            </div>
            <div class="body-sub-menu ">

                <h6 class="bg-light header">FILTER</h6>

                <li class="form-check">
                    <div>
                        <label class="form-check-label" for="flexCheckIndeterminate1">Open Now</label>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate1">
                    </div>
                </li>
                <li class="list-item list-unstyled">
                    <div>
                        <label class="form-check-label" for="flexCheckIndeterminate2">Credit Cards</label>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate2">
                    </div>
                </li>
                <li class="list-item list-unstyled">
                    <div>
                        <label class="form-check-label" for="flexCheckIndeterminate3">Alcohol Served</label>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate3">
                    </div>
                </li>
            </div>
            <div class="body-sub-menu ">

                <h6 class="bg-light header">ADDITIONAL FILTERS</h6>
                <div class="range">
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                    <div class="minMax d-flex">
                        <div class="min me-4">
                            <label > Min</label>
                            <input type="number"  class="form-control" placeholder="$0">
                        </div>
                        <div class="max">
                            <label class="text-end"> Max</label>
                            <input class="form-control" type="number"  placeholder="$1,0000">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup-footer fixed-bottom w-100">
            <button type="button" onclick="btnClose();" >Close</button>
            <button type="button" class="btn-danger" >Save Changes</button>
        </div>
    </div>
</div>

@include('website.layout.scripts')
</body>
</html>
