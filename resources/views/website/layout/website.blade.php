<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/website/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/bootstrap.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600&family=Merriweather+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,900&family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>

</head>
<body>
<div class="buyNow d-flex justify-content-between">
    <h1><i class="bi bi-fire"></i>Akalni<span>resturant</span></h1>
    <button type="button" class="btn btn-success" >Buy now</button>
</div>
<section class="nav">
    <nav class="navbar navbar-expand-lg  " >
        <div class="collecter ">
            <div class="container p-0 ">

                <div class="logo ">
                    <a href="./main.html"><img src="{{asset('assets/website/images/spoon-and-a-fork-in-a-circle-640w.png')}}">
                    </a>
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
                        <a class="nav-link active "aria-current="page" href="./searchPage.html"><i class="bi bi-search bii "></i> &nbsp;Search</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active "aria-current="page" href="./ofersPage.html"><button type="button" class="redBtn"><i class="bi bi-vinyl"></i>&nbsp;Offers</button></a>
                    </li>
                    @if(!Auth::user())
                    <li class="nav-item">
                        <a class="nav-link active "aria-current="page" href="{{route('register.page')}}"><i class="bi bi-person "></i> &nbsp;Sign in</a>
                    </li>
                    @endif
                    <li class="nav-item nav-item-menu " onclick="togglMnu()">
                        <a class="nav-link active "  aria-current="page" href="#">
                            @if(Auth::user())
                            <img src="{{asset('assets/website/images/girl-names-that-start-with-c-zz-221027-768b76.webp')}}" class="nav-item-img" alt="">
                                Hi {{Auth::user()->name}}<i class="bi bi-caret-down-fill "></i>
                            @endif
                        </a>

                        <div class="account " id="subMnu">
                            <div class="menue-group  ">
                                <div  class="sub-account">
                                    <a href="#">My account</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="#">Delivery support</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="#">Contact us</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="#">Term of user</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="#">Privacy policy</a>
                                </div>
                                <div  class="sub-account">
                                    <a href="{{route('logout')}}">Logout</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active " aria-current="page" href="./deliveryAddressPage.html"><i class="bi bi-cart2  "></i> &nbsp;Cart</a>
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
            <li><a href="./main.html"><img src="{{asset('assets/website/images/home-black.png')}}"> Homepage</a></li>
            <li><a href="myOrderPage.html">
                    <img src="{{asset('assets/website/images/menue.png')}}" alt=""> My Orders</a></li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown"><img src="{{asset('assets/website/images/pen.png')}}" alt="">Authentication <span class="caret "></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li><a href="./signInPage.html">Login</a></li>
                    <li><a href="./signUpPage.html">Register</a></li>
                    <li><a href="./forgotPasswordPage.html">Forgot Password</a></li>
                    <li><a href="./verificationPage.html">Verification</a></li>
                    <li><a href="./locationPage.html">Location</a></li>
                </ul>
            </li>
            <li><a href="./favoritePage.html"><img src="{{asset('assets/website/images/heart.png')}}" alt=""> Favorites</a></li>
            <li><a href="./trendingPage.html"><img src="{{asset('assets/website/images/increase.png')}}" alt=""> trending</a></li>
            <li><a href="./mostPopularPage.html"><img src="{{asset('assets/website/images/popular.png')}}" alt=""> Most Popular</a></li>
            <li><a href="./deliveryAddressPage.html"><img src="{{asset('assets/website/images/menue.png')}}" alt=""> Checkout</a></li>
            <li><a href="./successfullPage.html"><img src="{{asset('assets/website/images/successfal.png')}}" alt=""> Successful</a></li>
            <li><a href="./locationPage.html"><img src="{{asset('assets/website/images/location.png')}}" alt=""> Live Map</a></li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown"><img src="{{asset('assets/website/images/person.png')}}" alt=""> Profile <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li><a href="#pictures">Profile</a></li>
                    <li><a href="#pictures">Delivery Support</a></li>
                    <li><a href="#videos">Contact Us</a></li>
                    <li><a href="#books">Terms of use</a></li>
                    <li><a href="#art">Privacy & Policy</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown"><img src="{{asset('assets/website/images/traingle.png')}}" alt=""> Error <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li><a href="./notFoundPage.html">Not Found</a></li>
                    <li><a href="./MaintencePage.html">Maintence</a></li>
                    <li><a href="./comingSoonPage.html">Coming Soon</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown"><img src="{{asset('assets/website/images/link.png')}}" alt=""> Navigation Link Example <span class="caret"></span></a>
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
                    <img src="{{asset('assets/website/images/home-black.png')}}" alt="">
                    <p>Home</p>
                </button>

                <button type="button" class="btn btn-light">
                    <img src="{{asset('assets/website/images/message.png')}}" alt="">
                    <p>FAQ</p>
                </button>

                <button type="button" class="btn btn-light">
                    <img src="{{asset('assets/website/images/phone.png')}}" alt="">
                    <p>Help</p>
                </button>
            </div>
        </div>
    </nav>
</div>

@yield('content')


<!------------------------footer--------------------->
<section class="footer">
    <div class="container-footer">
        <div class="row-footer">

            <div class="col-footer" style="grid-column: span 2;">
                <div style=" width: 65px;">
                    <img src="{{asset('assets/website/images/spoon-and-a-fork-in-a-circle-640w.png')}} " class="logo bg-white">
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
                    <a href="./notFoundPage.html">Not found</a><br>
                    <a href="./MaintencePage.html">Maintence</a><br>
                    <a href="./comingSoonPage.html">Coming Soon</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <h5>Services</h5>
                    <a href="#">Delivery Support</a><br>
                    <a href="#">Contact Us</a><br>
                    <a href="#">Terms of use</a><br>
                    <a href="#">Privace policy</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <h5>For users</h5>
                    <a href="./signInPage.html">User login</a><br>
                    <a href="./signUpPage.html">User register</a><br>
                    <a href="/forgotPasswordPage.html">Forgot Password</a><br>
                    <a href="#">Account Setting</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <h5>More Pages</h5>
                    <a href="./trendingPage.html">Trending</a><br>
                    <a href="./mostPopularPage.html">Most Popular</a><br>
                    <a href="./menuePage.html">Resturant Details</a><br>
                    <a href="./favoritePage.html">Favoraits</a>
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
                    <a href="#">turkey</a><br>
                    <a href="#">UAE</a><br>
                    <a href="#">United Kingdom</a><br>
                    <a href="#">United States</a><br>
                    <a href="#">Sri Lanka</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <br>
                    <a href="#">Qatar</a><br>
                    <a href="#">Singapora</a><br>
                    <a href="#">Slovakia</a><br>
                    <a href="#">South Africa</a><br>
                    <a href="#">Green Land</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">
                    <br>
                    <a href="#">Pakistan</a><br>
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
                    <a href="#"> <img  src="{{asset('assets/website/images/App_Store.png')}}" alt=""></a>
                </div>

                <div class="app-btn">
                    <a href="#"><img  src="{{asset('assets/website/images/google-play.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="simplefooter">
    <div class="right d-flex" >
        <a href="./main.html">
            <button type="button" class="bg-light">
                <img src="{{asset('assets/website/images/home-red.png')}}" alt="">
                <p class="text-danger" style="font-size: 12px;">Home</p>
            </button>
        </a>

        <a href="./trendingPage.html">
            <button type="button">
                <img src="{{asset('assets/website/images/location.png')}}" alt="">
                <p>Trending</p>
            </button>
        </a>
    </div>

    <div class="middle ">
        <a href="./deliveryAddressPage.html">
            <button type="button" >
                <img src="{{asset('assets/website/images/shopping-card.png')}}" style="width: 35px; height: 35px;"  alt="">
            </button>
        </a>
    </div>

    <div class="left  d-flex">
        <a href="./favoritePage.html">
            <button type="button" >
                <img src="{{asset('assets/website/images/heart.png')}}"  alt="">
                <p>Favorite</p>
            </button>
        </a>

        <button type="button" >
            <img src="{{asset('assets/website/images/person.png')}}" alt="">
            <p>Profile</p>
        </button>
    </div>
</section>




<div class="popupFilter">
    <div class="popurBody ">
        <div class="links ">
            <h4 >Filter</h4>
            <div class="text-end"><img src="{{asset('assets/website/images/close.png')}}" onclick="close();" class="close"></div>
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


<script >
    const viewBtn1 = document.querySelector(".view-modal1");
    popup = document.querySelector(".popupFilter"),
        popupBody = document.querySelector(".popurBody")
    close = popup.querySelector(".close")

    function toggle(){
        popup.style.display='block';
        popupBody.classList.toggle("show");
    }

    function btnClose(){
        viewBtn1.click();
        popup.style.display='none';
    }
    close.onclick = ()=>{
        viewBtn1.click();
        popup.style.display='none';
    }
</script>
<script src="{{asset('assets/website/js/script.js')}}"></script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js'></script>
<script  src="{{asset('assets/website/script.js')}}"></script>

</body>
</html>