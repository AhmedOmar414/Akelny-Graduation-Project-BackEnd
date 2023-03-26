@extends('website.layout.website')
@section('content')
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
              <a href="./trendingPage.html"class="likPages">
                <div class="content-cover">
                  <div class="content-meals">
                    <img src="{{asset('assets/website/images/fries.png')}}" alt="">
                    <p>Fries</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
            <a href="./trendingPage.html" class="likPages">
              <div class="content-cover">
                <div class="content-meals">
                  <img src="{{asset('assets/website/images/pizza.png')}}" alt="">
                  <p>Pizza</p>
                </div>
              </div>
            </a>
            </div>

            <div class="item">
            <a href="./trendingPage.html" class="likPages">
              <div class="content-cover">
                <div class="content-meals">
                  <img src="{{asset('assets/website/images/burger.png')}}" alt="">
                  <p>Burger</p>
                </div>
              </div>
            </a>
            </div>

            <div class="item">
            <a href="./trendingPage.html" class="likPages">
              <div class="content-cover">
                <div class="content-meals">
                  <img src="{{asset('assets/website/images/sandwitch.png')}}" alt="">
                  <p>Sandwitch</p>
                </div>
              </div>
            </a>
            </div>

            <div class="item">
            <a href="./trendingPage.html" class="likPages">
              <div class="content-cover">
                <div class="content-meals">
                  <img src="{{asset('assets/website/images/coffee.png')}}" alt="">
                  <p>Coffee</p>
                </div>
              </div>
            </a>
            </div>

            <div class="item">
            <a href="./trendingPage.html" class="likPages">
              <div class="content-cover">
                <div class="content-meals">
                  <img src="{{asset('assets/website/images/steak.png')}}" alt="">
                  <p>Steak</p>
                </div>
              </div>
            </a>
            </div>

            <div class="item">
            <a href="./trendingPage.html" class="likPages">
              <div class="content-cover">
                <div class="content-meals">
                  <img src="{{asset('assets/website/images/colacan.png')}}" alt="">
                  <p>Colacan</p>
                </div>
              </div>
            </a>
            </div>

            <div class="item">
            <a href="./trendingPage.html" class="likPages">
              <div class="content-cover">
                <div class="content-meals">
                  <img src="{{asset('assets/website/images/breakfast.png')}}" alt="">
                  <p>Breakfast</p>
                </div>
              </div>
            </a>
            </div>

            <div class="item">
            <a href="./trendingPage.html" class="likPages">
              <div class="content-cover">
                <div class="content-meals">
                  <img src="{{asset('assets/website/images/salad.png')}}" alt="">
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
            <a href="./trendingPage.html" class="likPages">
              <img src="{{asset('assets/website/images/ballons.webp')}}" alt="">
              <div class="text-offer">OFFER</div>
            </a>
          </div>

          <div class="item-offers">
          <a href="./trendingPage.html" class="likPages">
            <img src="{{asset('assets/website/images/spac.jpg')}}" alt="">
            <div class="text-offer">DISCOUNT</div>
          </a>
          </div>

          <div class="item-offers">
          <a href="./trendingPage.html" class="likPages">
            <img src="{{asset('assets/website/images/skater-dudes.webp')}}" alt="">
            <div class="text-offer">TRY&nbsp;NOW</div>
          </a>
          </div>


          <div class="item-offers">
          <a href="./trendingPage.html" class="likPages">
            <img src="{{asset('assets/website/images/table.jpg')}}" alt="">
            <div class="text-offer">EXPLORE</div>
          </a>
          </div>

          <div class="item-offers">
            <a href="./trendingPage.html" class="likPages">
              <img src="{{asset('assets/website/images/spac.jpg')}}" alt="">
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
    <a href="./trendingPage.html">View all <i class="bi bi-chevron-double-right"></i></a>
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
                  <a href="./menuePage.html"><img src="{{asset('assets/website/images/noodle.webp')}}" alt=""></a>
                  <div class="text-views ">
                    <p>Promoted</p>
                    <button type="button" class="views-btn  "  >
                      <i class="bi bi-heart" aria-hidden="true"></i>
                    </button>
                  </div>
                <div class="rate-views">
                  <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
              </div>
            <div class="down-part">
               <a class="down-part-a" href="./menuePage.html">Famous Dave's Bar-B-Que</a>
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
                  <a href="./menuePage.html"><img src="{{asset('assets/website/images/salad.jpg')}}" alt=""></a>
                  <div class="text-views ">
                    <p>Promoted</p>
                    <button type="button" class="views-btn  "  >
                      <i class="bi bi-heart" aria-hidden="true"></i>
                    </button>
                  </div>
                <div class="rate-views">
                  <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                </div>
              </div>
            <div class="down-part">
               <a href="./menuePage.html">Famous Dave's Bar-B-Que</a>
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
                 <a href="./menuePage.html"><img src="{{asset('assets/website/images/beef.jpg')}}" alt=""></a>
                  <div class="text-views ">
                    <p>Promoted</p>
                    <button type="button" class="views-btn  "  >
                      <i class="bi bi-heart" aria-hidden="true"></i>
                    </button>
                  </div>
                <div class="rate-views">
                  <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
              </div>
            <div class="down-part">
               <a href="./menuePage.html">Famous Dave's Bar-B-Que</a>
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
                  <a href="./menuePage.html"><img src="{{asset('assets/website/images/salad.jpg')}}" alt=""></a>
                  <div class="text-views ">
                    <p>Promoted</p>
                    <button type="button" class="views-btn  "  >
                      <i class="bi bi-heart" aria-hidden="true"></i>
                    </button>
                  </div>
                <div class="rate-views">
                  <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                </div>
              </div>
            <div class="down-part">
               <a href="./menuePage.html">Famous Dave's Bar-B-Que</a>
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
      <a href="./mostPopularPage.html">26 places <i class="bi bi-chevron-double-right"></i></a>
    </div>

    <div class="row-popular  ">
      <div class="col-popular">
        <div class="card-popular ">
          <div class="up-part">
              <a href="./menuePage.html"><img src="{{asset('assets/website/images/tomato-soup.jpg')}}" alt=""></a>
               <div class="text-views ">
                <p>Promoted</p>
                <button type="button" class="views-btn  "  >
                  <i class="bi bi-heart" aria-hidden="true"></i>
                </button>
               </div>
            <div class="rate-views">
              <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
          </div>
          <div class="down-part">
            <a href="./menuePage.html">The osahan Restaurant</a>
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
              <a href="./menuePage.html"><img src="{{asset('assets/website/images/spaghetti.jpeg')}}" alt=""></a>
               <div class="text-views ">
                <p>Promoted</p>
                <button type="button" class="views-btn  "  >
                  <i class="bi bi-heart" aria-hidden="true"></i>
                </button>
               </div>
            <div class="rate-views">
              <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
          </div>
          <div class="down-part">
            <a href="./menuePage.html">The osahan Restaurant</a>
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
              <a href="./menuePage.html"><img src="{{asset('assets/website/images/French-food.jpg')}}" alt=""></a>
               <div class="text-views ">
                <p>Promoted</p>
                <button type="button" class="views-btn  "  >
                  <i class="bi bi-heart" aria-hidden="true"></i>
                </button>
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
              <a href="./menuePage.html"><img src="{{asset('assets/website/images/seafood-paella.webp')}}" alt=""></a>
               <div class="text-views ">
                <p>Promoted</p>
                <button type="button" class="views-btn  "  >
                  <i class="bi bi-heart" aria-hidden="true"></i>
                </button>
               </div>
            <div class="rate-views">
              <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
          </div>
          <div class="down-part">
            <a href="./menuePage.html">The osahan Restaurant</a>
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
              <a href="./menuePage.html"><img src="{{asset('assets/website/images/noodle.webp')}}" alt=""></a>
               <div class="text-views ">
                <p>Promoted</p>
                <button type="button" class="views-btn  "  >
                  <i class="bi bi-heart" aria-hidden="true"></i>
                </button>
               </div>
            <div class="rate-views">
              <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
          </div>
          <div class="down-part">
            <a href="./menuePage.html">The osahan Restaurant</a>
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
              <a href="./menuePage.html"><img src="{{asset('assets/website/images/salad.jpg')}}" alt=""></a>
               <div class="text-views ">
                <p>Promoted</p>
                <button type="button" class="views-btn  "  >
                  <i class="bi bi-heart" aria-hidden="true"></i>
                </button>
               </div>
            <div class="rate-views">
              <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
          </div>
          <div class="down-part">
            <a href="./menuePage.html">The osahan Restaurant</a>
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
              <a href="./menuePage.html"><img src="{{asset('assets/website/images/beef.jpg')}}" alt=""></a>
               <div class="text-views ">
                <p>Promoted</p>
                <button type="button" class="views-btn  "  >
                  <i class="bi bi-heart" aria-hidden="true"></i>
                </button>
               </div>
            <div class="rate-views">
              <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
          </div>
          <div class="down-part">
            <a href="./menuePage.html">The osahan Restaurant</a>
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
              <a href="./menuePage.html"><img src="{{asset('assets/website/images/istock.jpg')}}" alt=""></a>
               <div class="text-views ">
                <p>Promoted</p>
                <button type="button" class="views-btn  "  >
                  <i class="bi bi-heart" aria-hidden="true"></i>
                </button>
               </div>
            <div class="rate-views">
              <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
          </div>
          <div class="down-part">
            <a href="./menuePage.html">The osahan Restaurant</a>
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
                <a href="./menuePage.html"><img src="{{asset('assets/website/images/istock.jpg')}}" alt=""></a>
                <div class="text-views ">
                  <p>Promoted</p>
                  <button type="button" class="views-btn  "  >
                    <i class="bi bi-heart" aria-hidden="true"></i>
                  </button>
                </div>
              <div class="rate-views">
                <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
            </div>
            <div class="down-part ">
              <a href="./menuePage.html">The osahan Restaurant</a>
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
                  <a href="./menuePage.html"><img src="{{asset('assets/website/images/beef.jpg')}}" alt=""></a>
                  <div class="text-views ">
                    <p>Promoted</p>
                    <button type="button" class="views-btn  "  >
                      <i class="bi bi-heart" aria-hidden="true"></i>
                    </button>
                  </div>
                <div class="rate-views">
                  <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
              </div>
              <div class="down-part">
                <a href="./menuePage.html">The osahan Restaurant</a>
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
                  <a href="./menuePage.html"><img src="{{asset('assets/website/images/salad.jpg')}}" alt=""></a>
                    <div class="text-views ">
                    <p>Promoted</p>
                    <button type="button" class="views-btn  "  >
                      <i class="bi bi-heart" aria-hidden="true"></i>
                    </button>
                    </div>
                <div class="rate-views">
                  <i class="bi bi-star"></i> &nbsp;3.1 (300+)
</div>
              </div>
              <div class="down-part">
                <a href="./menuePage.html">The osahan Restaurant</a>
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
@endsection