<section class="nav">
    <nav class="navbar navbar-expand-lg" >
        <div class="collecter ">
            <div class="container p-0 ">

                <div class="logo ">
                    <a href="{{url('')}}"><img src="{{asset('website/images/spoon-and-a-fork-in-a-circle-640w.png')}}" > </a>
                </div>
                <div class="location d-flex " onclick="toggleMenu() " >
                    <i class="bi bi-geo-alt"></i>
                    <p style="width:115px ; "> <span>Select location </span></br>Jawaddi ludhiana...</p>
                    <i class="bi bi-caret-down-fill "></i>
                    <div class="sub-menue-wrap " id="subMenu">
                        <div class="back bg-white">

                            <div class="sub-menue ">
                                <div class="input-group ">
                                    <button class="btn" type="button" ><i class="bi bi-search"></i></button>
                                    <input type="text" class="form-control " placeholder="Enter Your Location" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                </div>
                            </div>

                            <div class="body-sub-menu">

                                <a href="#" class="link-location">
                                    <div>
                                        <i class="bi bi-send"></i> &nbsp;New York, USA
                                    </div>
                                </a>

                                <h6 class="bg-light header">Choose your country</h6>

                                <li class="list-item">
                                    <div>
                                        <label class="form-check-label" for="secondRadio">Afghanistan</label>
                                        <input class="form-check-input me-1 " type="radio" name="listGroupRadio" value="" id="secondRadio">
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div>
                                        <label class="form-check-label" for="secondRadio">India</label>
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div>
                                        <label class="form-check-label" for="secondRadio">USA</label>
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div>
                                        <label class="form-check-label" for="secondRadio">Australia</label>
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div>
                                        <label class="form-check-label" for="secondRadio">Japan</label>
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div>
                                        <label class="form-check-label" for="secondRadio">China</label>
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="container p-0" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link active "aria-current="page" href="website/searchPage.html"><i class="bi bi-search bii "></i> &nbsp;Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active "aria-current="page" href="website/ofersPage.html"><button type="button" class="redBtn"><i class="bi bi-vinyl"></i>&nbsp;Offers</button></a>
                    </li>
                    @if(!Auth::user())
                    <li class="nav-item">
                        <a class="nav-link active "aria-current="page" href="{{url('website/join-us')}}"><i class="bi bi-person "></i> &nbsp;Join Us</a>
                    </li>
                    @endif
                    @if(Auth::user())
                    <li class="nav-item nav-item-menu " onclick="togglMnu()">
                        <a class="nav-link active "  aria-current="page" href="#"> <img src="{{asset('website/images/girl-names-that-start-with-c-zz-221027-768b76.webp')}}" class="nav-item-img" alt=""> &nbsp;Hi {{Auth::user()->name}}&nbsp;<i class="bi bi-caret-down-fill "></i></a>
                        <div class="account " id="subMnu">
                            <div class="menue-group  ">
                                <div  class="sub-account">
                                    <a href="website/myAccount.html">My account</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="website/deliverySupportPage.html">Delivery support</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="website/contactUsPage.html">Contact us</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="website/termOfUsePage.html">Term of user</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="website/privacyPolicyPage.html">Privacy policy</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="{{route('restaurant.logout')}}">Logout</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    <li class="nav-item ">
                        <a class="nav-link active " aria-current="page" href="website/deliveryAddressPage.html"><i class="bi bi-cart2  "></i> &nbsp;Cart</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active  d-flex justify-content-center align-content-center" aria-current="page" href="#">
                            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                                <span class="hamb-top"></span>
                                <span class="hamb-middle"></span>
                                <span class="hamb-bottom"></span>
                            </button>
                        </a>
                    </li>
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
