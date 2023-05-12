<section class="nav">
    <nav class="navbar navbar-expand-lg" >
        <div class="collecter ">
            <div class="container p-0" style="    margin-left: 55px;">

                <div class="logo ">
                    <a href="{{url('')}}"><img src="{{asset('website/images/spoon-and-a-fork-in-a-circle-640w.png')}}" > </a>
                </div>

            </div>

            <div class="container p-0"  style=" max-width: 660px; min-width: 550px" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link active "aria-current="page" href="website/searchPage.html"><i class="bi bi-search bii "></i> &nbsp;Search</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active "  aria-current="page" href="{{route('all.restaurants')}}"><button type="button" class="navBtn" style=" background: white; border: none;"><i style="color: red" class="bi bi-cup-straw "></i>AllRestaurants</button></a>
                    </li>
                    @if(Auth::user())
                    <li class="nav-item">
                        @if(\App\Models\Offer::all()->count()>0)
                        <a class="nav-link active " aria-current="page" href="{{route('offer.page')}}"><button type="button" class="navBtn" style=" background: white; border: none;"><i style="color: red" class="bi bi-vinyl "></i>&nbsp;Offers</button></a>
                        @else
                            <a class="nav-link active " aria-current="page" href="{{route('offer.page')}}"><button type="button" class="navBtn" style=" background: white; border: none;"><i style="color: gray" class="bi bi-vinyl "></i>&nbsp;Offers</button></a>
                            @endif
                    </li>
                    @endif

                    @if(!Auth::user())
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{url('website/join-us')}}"><i class="bi bi-person "></i> &nbsp;Join Us</a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{url('website/client-login')}}"><i class="bi bi-person "></i> &nbsp;Login</a>
                    </li>

                    @endif
                    <li class="nav-item ">
                        <a class="nav-link active " aria-current="page" href="website/deliveryAddressPage.html"><i class="bi bi-cart2  "></i> &nbsp;Cart</a>
                    </li>
                    <li class="nav-item ">
                        @if(\App\Models\FavoriteProduct::where('user_id',\Illuminate\Support\Facades\Auth::id())->count()>0)
                            <a class="nav-link active " aria-current="page" href="{{route('favorite.products')}}"><button type="button" class="navBtn" style=" background: white; border: none;"><i style="color: red" class="bi bi-heart-fill  "></i> Products</button></a>
                        @else
                            <a class="nav-link active " aria-current="page" href="{{route('favorite.products')}}"><button type="button" class="navBtn" style=" background: white; border: none;"><i style="color: gray" class="bi bi-heart-fill  "></i>  Products</button></a>
                        @endif
                    </li>
                    <li class="nav-item ">
                        @if(\App\Models\Favorite::where('user_id',\Illuminate\Support\Facades\Auth::id())->count()>0)
                            <a class="nav-link active " aria-current="page" href="{{route('favorite.restaurants')}}"><button type="button" class="navBtn" style=" background: white; border: none;"><i style="color: red" class="bi bi-heart-fill  "></i>Restaurant</button></a>

                        @else
                            <a class="nav-link active " aria-current="page" href="{{route('favorite.restaurants')}}"><button type="button" class="navBtn" style=" background: white; border: none;"><i style="color: gray" class="bi bi-heart-fill  "></i>Restaurant</button></a>
                        @endif

                    </li>
                    @if(Auth::user())
                    <li class="nav-item nav-item-menu " onclick="togglMnu()">
                        <a class="nav-link active "  aria-current="page" href="#">
                         @if(Auth::user()->photo)
                            <img src="{{url('images/users/'.Auth::user()->photo)}}" class="nav-item-img" alt="">
                                {{Auth::user()->name}}&nbsp;<i class="bi bi-caret-down-fill "></i>
                            @else
                                <img src="{{asset('website/images/girl-names-that-start-with-c-zz-221027-768b76.webp')}}" class="nav-item-img" alt="">
                       HI
                            @endif
                        </a>
                        <div class="account " id="subMnu">
                            <div class="menue-group  ">
                                @if(Auth::user()->user_type_id ==\App\Models\User::ADMIN)
                                    <div  class="sub-account">
                                        <a href="{{route('admin.dashboard')}}">Dashboard</a>
                                    </div>
                                @elseif(Auth::user()->user_type_id ==\App\Models\User::RESTAURANT)
                                    <div  class="sub-account">
                                        <a href="{{route('restaurant.dashboard')}}">Dashboard</a>
                                    </div>
                                @endif
                                <div  class="sub-account">
                                    <a href="{{route('user_profile.index')}}">My profile</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="{{route('contact_us')}}">Contact us</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="{{route('website.logout')}}">Logout</a>
                                </div>

                            </div>
                        </div>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</section>

<section class="substitute-Nav">
    <div class="sub-menue ">
        <div class="header-substitute-Nav d-flex align-items-center ps-0">
            <h4>Browse</h4>
            <div class="d-flex justify-content-end ">
                <button class="btnFilter view-modal1" onclick="toggle()">Filter</button>
                <li class="nav-item ">
                    <a class="nav-link active  d-flex justify-content-center align-content-center" aria-current="page" href="#">
                        <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                            <span class="hamb-top"></span>
                            <span class="hamb-middle"></span>
                            <span class="hamb-bottom"></span>
                        </button>
                    </a>
                </li>
            </div>
        </div>
        <div class="footer-substitute-Nav d-flex justify-content-center ">
            <div class="input-group mb-1">
                <button class="btn" type="button" ><i class="bi bi-search"></i></button>
                <input type="text" class="form-control " placeholder="Enter Your Location" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
        </div>
    </div>
</section>

<div class="bar bg-danger" id="wrapper">

    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <div class="sidebar-header">
                <div class="sidebar-brand">
                    Askbootstrab
                </div>
            </div>
            <li><a href="website/main.html"><img src="{{asset('website/images/home-black.png')}}"> Homepage</a></li>
            <li><a href="myOrderPage.html"><img src="{{asset('website/images/menue.png')}}" alt=""> My Orders</a></li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown"><img src="{{asset('website/images/pen.png')}}" alt="">Authentication <span class="caret "></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li><a href="website/signInPage.html">Login</a></li>
                    <li><a href="website/signUpPage.html">Register</a></li>
                    <li><a href="website/forgotPasswordPage.html">Forgot Password</a></li>
                    <li><a href="website/verificationPage.html">Verification</a></li>
                    <li><a href="website/locationPage.html">Location</a></li>
                </ul>
            </li>
            <li><a href="website/favoritePage.html"><img src="{{asset('website/images/heart.png')}}" alt=""> Favorites</a></li>
            <li><a href="website/trendingPage.html"><img src="{{asset('website/images/increase.png')}}" alt=""> trending</a></li>
            <li><a href="website/mostPopularPage.html"><img src="{{asset('website/images/popular.png')}}" alt=""> Most Popular</a></li>
            <li><a href="website/deliveryAddressPage.html"><img src="{{asset('website/images/menue.png')}}" alt=""> Checkout</a></li>
            <li><a href="website/successfullPage.html"><img src="{{asset('website/images/successfal.png')}}" alt=""> Successful</a></li>
            <li><a href="website/liveMapPage.html"><img src="{{asset('website/images/location.png')}}" alt=""> Live Map</a></li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown"><img src="{{asset('website/images/person.png')}}" alt=""> Profile <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li><a href="website/myAccount.html">Profile</a></li>
                    <li><a href="website/deliverySupportPage.html">Delivery Support</a></li>
                    <li><a href="website/contactUsPage.html">Contact Us</a></li>
                    <li><a href="website/termOfUsePage.html">Terms of use</a></li>
                    <li><a href="website/privacyPolicyPage.html">Privacy & Policy</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown"><img src="{{asset('website/images/traingle.png')}}" alt=""> Error <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li><a href="website/notFoundPage.html">Not Found</a></li>
                    <li><a href="website/MaintencePage.html">Maintence</a></li>
                    <li><a href="website/comingSoonPage.html">Coming Soon</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown"><img src="{{asset('website/images/link.png')}}" alt=""> Navigation Link Example <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li><a href="#pictures">Link Example 1</a></li>
                    <li><a href="#pictures">Link Example 2</a></li>
                    <li><a href="#videos">Link Example 3</a></li>
                    <li><a href="#books">Link Example 4</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <nav class="navbar navbar-inverse fixed-bottom " id="sidebar-wrapper-footer" role="navigation">
        <div class="sidebar-footer">
            <div class="sidebar-brand-footer btn-group">
                <button type="button" class="btn btn-light text-center d-block">
                    <img src="{{asset('website/images/home-black.png')}}" alt="">
                    <p>Home</p>
                </button>

                <button type="button" class="btn btn-light">
                    <img src="{{asset('website/images/message.png')}}" alt="">
                    <p>FAQ</p>
                </button>

                <button type="button" class="btn btn-light">
                    <img src="{{asset('website/images/phone.png')}}" alt="">
                    <p>Help</p>
                </button>
            </div>
        </div>
    </nav>
</div>
<div class="popupFilter">
    <div class="popurBody ">
        <div class="links ">
            <h4 >Filter</h4>
            <div class="text-end">  <img src="{{asset('images/close.png')}}" onclick="close();" class="close"></div>
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
