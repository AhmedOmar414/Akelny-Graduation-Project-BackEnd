@extends('frontend.layouts.master')
@section('title','E-SHOP || HOME PAGE')
@section('main-content')
    <style>
        .product{
            width: 100%;
            height: 250px;
            background-color: rgb(243, 243, 243);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
    </style>


    <!-- Start Categories -->
    <section class="product" >
        <div class="product-area most-popular section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            @foreach($banners as $category)
                            <div class="single-product" style="padding-bottom: 40px">
                                <div style="background-color:#ffffff;height: 80px;width: 160px;border-radius: 7px;padding-top: 10px;margin-left: 3px;margin-top: 10px">
                                    <div style="display: flex;align-items: center;justify-content: center">
                                        <img src="{{$category->photo}}" style="width: 40px">
                                    </div>
                                    <p style="text-align: center">{{$category->name}}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories -->

    <!-- Start Offers -->
    <section class="product-area most-popular section" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->
                        <div style="margin-left: 5px;margin-right: 5px" class="single-product op">
                            <div class="product-img">
                                <a href="">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 300px" alt="Laptop" />
                                </a>

                            </div>
                            <div class="product-content">
                                <h3><a href="">offer title</a></h3>
                                <h3><a href="">offer description</a></h3>

                            </div>
                        </div>
                        <div style="margin-left: 5px;margin-right: 5px" class="single-product op">
                            <div class="product-img">
                                <a href="">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 300px" alt="Laptop" />
                                    <div class="text-views "></div>
                                </a>

                            </div>
                            <div class="product-content">
                                <h3><a href="">offer title</a></h3>
                                <h3><a href="">offer description</a></h3>

                            </div>
                        </div>
                        <div style="margin-left: 5px;margin-right: 5px" class="single-product op">
                            <div class="product-img">
                                <a href="">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 300px" alt="Laptop" />
                                    <div class="text-views "></div>
                                </a>

                            </div>
                            <div class="product-content">
                                <h3><a href="">offer title</a></h3>
                                <h3><a href="">offer description</a></h3>

                            </div>
                        </div>
                        <div style="margin-left: 5px;margin-right: 5px" class="single-product op">
                            <div class="product-img">
                                <a href="">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 300px" alt="Laptop" />
                                    <div class="text-views "></div>
                                </a>

                            </div>
                            <div class="product-content">
                                <h3><a href="">offer title</a></h3>
                                <h3><a href="">offer description</a></h3>

                            </div>
                        </div>
                        <div style="margin-left: 5px;margin-right: 5px" class="single-product op">
                            <div class="product-img">
                                <a href="">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 300px" alt="Laptop" />
                                    <div class="text-views "></div>
                                </a>

                            </div>
                            <div class="product-content">
                                <h3><a href="">offer title</a></h3>
                                <h3><a href="">offer description</a></h3>

                            </div>
                        </div>
                        <div style="margin-left: 5px;margin-right: 5px" class="single-product op">
                            <div class="product-img">
                                <a href="">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 300px" alt="Laptop" />
                                    <div class="text-views "></div>
                                </a>

                            </div>
                            <div class="product-content">
                                <h3><a href="">offer title</a></h3>
                                <h3><a href="">offer description</a></h3>

                            </div>
                        </div>
                        <div style="margin-left: 5px;margin-right: 5px" class="single-product op">
                            <div class="product-img">
                                <a href="">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 300px" alt="Laptop" />
                                    <div class="text-views "></div>
                                </a>

                            </div>
                            <div class="product-content">
                                <h3><a href="">offer title</a></h3>
                                <h3><a href="">offer description</a></h3>

                            </div>
                        </div>
                        <div style="margin-left: 5px;margin-right: 5px" class="single-product op">
                            <div class="product-img">
                                <a href="">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 300px" alt="Laptop" />
                                    <div class="text-views "></div>
                                </a>

                            </div>
                            <div class="product-content">
                                <h3><a href="">offer title</a></h3>
                                <h3><a href="">offer description</a></h3>

                            </div>
                        </div>
                        <div style="margin-left: 5px;margin-right: 5px" class="single-product op">
                            <div class="product-img">
                                <a href="">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 300px" alt="Laptop" />
                                    <div class="text-views "></div>
                                </a>

                            </div>
                            <div class="product-content">
                                <h3><a href="">offer title</a></h3>
                                <h3><a href="">offer description</a></h3>

                            </div>
                        </div>

                        <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Offers  -->

<!-- Start Product Area -->
<div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs filter-tope-group" id="myTab" role="tablist">
                                @php
                                    $categories=DB::table('categories')->where('status','active')->where('is_parent',1)->get();
                                    // dd($categories);
                                @endphp
                                @if($categories)
                                <button class="btn" style="background:black"data-filter="*">
                                    All Products
                                </button>
                                    @foreach($categories as $key=>$cat)

                                    <button class="btn" style="background:none;color:black;"data-filter=".{{$cat->id}}">
                                        {{$cat->title}}
                                    </button>
                                    @endforeach
                                @endif
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content isotope-grid" id="myTabContent">
                             <!-- Start Single Tab -->
                            @if($product_lists)
                                @foreach($product_lists as $key=>$product)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->cat_id}}">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="{{route('product-detail',$product->slug)}}">
                                                @php
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                @endphp
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                                </div>
                                                @if($product->stock<=0)
                                                    <span class="out-of-stock">Sale out</span>
                                                @elseif($product->condition=='new')
                                                    <span class="new">New</span
                                                @elseif($product->condition=='hot')
                                                    <span class="hot">Hot</span>
                                                @else
                                                    <span class="price-dec">{{$product->discount}}% Off</span>
                                                @endif


                                            </a>
                                            <div class="button-head">
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" ><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                            <div class="product-price">
                                                @php
                                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                                @endphp
                                                <span>${{number_format($after_discount,2)}}</span>
                                                <del style="padding-left:4%;">${{number_format($product->price,2)}}</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                             <!--/ End Single Tab -->
                            @endif

                        <!--/ End Single Tab -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End Product Area -->

    <!-- Start most popular  -->
    <section class="shop-home-list section" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Most popular</h1>

                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a style="float: right;color:#ffc107" href="">26 places <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop popular  -->
    <!-- Start most sales  -->
    <section class="shop-home-list section" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Most Sales</h1>

                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Barbieri_-_ViaSophia25668.jpg/1024px-Barbieri_-_ViaSophia25668.jpg" class="card-img-top" style="height: 160px" alt="Laptop" /><div class="text-views ">
                                    <button type="button" class="views-btn  " >
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Restaurant Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                        <p class="small">10:01:am</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Category: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <a style="float: right;color:#ffc107" href="">26 places <i class="fa fa-arrow-circle-right"></i></a>

                </div>
            </div>
        </div>
    </section>
    <!-- End Shop sales  -->


    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->


@include('frontend.layouts.newsletter')

<!-- Modal -->
@if($product_lists)
    @foreach($product_lists as $key=>$product)
        <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <!-- Product Slider -->
                                        <div class="product-gallery">
                                            <div class="quickview-slider-active">
                                                @php
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                @endphp
                                                @foreach($photo as $data)
                                                    <div class="single-slider">
                                                        <img src="{{$data}}" alt="{{$data}}">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    <!-- End Product slider -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="quickview-content">
                                        <h2>{{$product->title}}</h2>
                                        <div class="quickview-ratting-review">
                                            <div class="quickview-ratting-wrap">
                                                <div class="quickview-ratting">
                                                    {{-- <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="fa fa-star"></i> --}}
                                                    @php
                                                        $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                                        $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                                    @endphp
                                                    @for($i=1; $i<=5; $i++)
                                                        @if($rate>=$i)
                                                            <i class="yellow fa fa-star"></i>
                                                        @else
                                                        <i class="fa fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <a href="#"> ({{$rate_count}} customer review)</a>
                                            </div>
                                            <div class="quickview-stock">
                                                @if($product->stock >0)
                                                <span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
                                                @else
                                                <span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out stock</span>
                                                @endif
                                            </div>
                                        </div>
                                        @php
                                            $after_discount=($product->price-($product->price*$product->discount)/100);
                                        @endphp
                                        <h3><small><del class="text-muted">${{number_format($product->price,2)}}</del></small>    ${{number_format($after_discount,2)}}  </h3>
                                        <div class="quickview-peragraph">
                                            <p>{!! html_entity_decode($product->summary) !!}</p>
                                        </div>
                                        @if($product->size)
                                            <div class="size">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <h5 class="title">Size</h5>
                                                        <select>
                                                            @php
                                                            $sizes=explode(',',$product->size);
                                                            // dd($sizes);
                                                            @endphp
                                                            @foreach($sizes as $size)
                                                                <option>{{$size}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @endif
                                        <form action="{{route('single-add-to-cart')}}" method="POST" class="mt-4">
                                            @csrf
                                            <div class="quantity">
                                                <!-- Input Order -->
                                                <div class="input-group">
                                                    <div class="button minus">
                                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                            <i class="ti-minus"></i>
                                                        </button>
                                                    </div>
													<input type="hidden" name="slug" value="{{$product->slug}}">
                                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                                    <div class="button plus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/ End Input Order -->
                                            </div>
                                            <div class="add-to-cart">
                                                <button type="submit" class="btn">Add to cart</button>
                                                <a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i class="ti-heart"></i></a>
                                            </div>
                                        </form>
                                        <div class="default-social">
                                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
@endif
<!-- Modal end -->
@endsection

@push('styles')
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
    <style>
        /* Banner Sliding */
        #Gslider .carousel-inner {
        background: #000000;
        color:black;
        }

        #Gslider .carousel-inner{
        height: 550px;
        }
        #Gslider .carousel-inner img{
            width: 100% !important;
            opacity: .8;
        }

        #Gslider .carousel-inner .carousel-caption {
        bottom: 60%;
        }

        #Gslider .carousel-inner .carousel-caption h1 {
        font-size: 50px;
        font-weight: bold;
        line-height: 100%;
        color: #F7941D;
        }

        #Gslider .carousel-inner .carousel-caption p {
        font-size: 18px;
        color: black;
        margin: 28px 0 28px 0;
        }

        #Gslider .carousel-indicators {
        bottom: 70px;
        }
    </style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>

        /*==================================================================
        [ Isotope ]*/
        var $topeContainer = $('.isotope-grid');
        var $filter = $('.filter-tope-group');

        // filter items on button click
        $filter.each(function () {
            $filter.on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $topeContainer.isotope({filter: filterValue});
            });

        });

        // init Isotope
        $(window).on('load', function () {
            var $grid = $topeContainer.each(function () {
                $(this).isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true,
                    animationEngine : 'best-available',
                    masonry: {
                        columnWidth: '.isotope-item'
                    }
                });
            });
        });

        var isotopeButton = $('.filter-tope-group button');

        $(isotopeButton).each(function(){
            $(this).on('click', function(){
                for(var i=0; i<isotopeButton.length; i++) {
                    $(isotopeButton[i]).removeClass('how-active1');
                }

                $(this).addClass('how-active1');
            });
        });
    </script>
    <script>
         function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
    </script>

@endpush
