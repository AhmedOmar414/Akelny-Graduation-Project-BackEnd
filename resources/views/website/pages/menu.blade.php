@extends('website.layout.layout')
@section('content')
    <!--------------------offers-caption-------------->
    <Section class="offers-caption menue-caption w-100">
        <div class="collecter ">
            <div class="cover">
                <div class="caption ">
                    <h2>{{$data->restaurant_name}}</h2>
                    <p class="bi bi-geo-alt"> {{$data->address}}</p>
                    <p style="font-size: 11px;">
                        @for($i=1; $i<=5; $i++)
                            @if($i<=$data->reviews->avg('stars'))
                                <i class="bi bi-star text-warning"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif
                        @endfor
                        &nbsp;
                        &nbsp; ({{$data->reviews->count('id')}} Reviews)
                    </p>
                    <div class="d-flex justify-content-between w-50 h-25">
                        <div>
                            <p class="offers-p2">
                                Open time <span class="offers-p text-white"><br>{{ \Carbon\Carbon::createFromTimestamp($data->open_at)->format('g:i a') }}</span>
                            </p>
                        </div>
                        <div >
                            <p class="offers-p2">
                                Close time <span class="offers-p text-white"><br>{{ \Carbon\Carbon::createFromTimestamp($data->close_at)->format('g:i a') }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="menue-caption-div" style="height: 170px; width: 285px;">
                    <img src="{{url('images/restaurants',$data->logo)}}" style="height: 90%; width: 100%; border-radius: 10px;" alt="">
                </div>
            </div>


        </div>

    </Section>
    <!------------------------offers--------------------->
    @if($data->offers->count() >=1)
    <section class="view_All menue_view_All" style="padding-top: 30px;">
        <div class="collecter">
            <div class="links pb-2 pt-3" style=" height: max-content;">
                <P style="font-size: small; margin-bottom: 0;">OFFERS</P>
            </div>
            <div class="tistemonial-Views ">
                <button type="button" class="slider-btn btn1  " onclick="prev2()">
                    <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="slider-btn btn2 " onclick="next2()">
                    <i class="bi bi-chevron-right" aria-hidden="true"></i></button>
                <div class="slider-wrap ">
                    <div class="slider-main " id="slider-main-Views">
                        @foreach($data->offers as $offer)
                            <div class="item-offers">
                                <a href="" class="likPages">
                                    <a href="{{route('menu',$offer->restaurant_id)}}"><img src="{{url('images/offers',$offer->photo)}}" alt=""></a>
                                    <div class="text-offer">OFFER</div>
                                    <a href="{{route('menu',$offer->restaurant_id)}}"  style="margin-top: 40%;margin-left: 10%; text-decoration: none;position: absolute;color: white;font-weight: bold;font-size: 20px">{{$offer->title}}</a>
                                    <a href="{{route('menu',$offer->restaurant_id)}}" style="margin-top: 50%;margin-left: 20%;text-decoration: none; position: absolute;color: white;font-weight: bold;font-size: 14px;overflow-wrap: break-word;" >{{$offer->description}}</a>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>

        </div>
    </section>
    @endif
    <!------------------------products------------------------->
    <section class="view_All menue_view_All" style="padding-top: 30px;">
        <div class="collecter">

            <div class="links pb-2 pt-3" style=" height: max-content;">
                <P style="font-size: small; margin-bottom: 0;">Products</P>
            </div>

            <div class="tistemonial-Views ">

                <button type="button" class="slider-btn btn1  " onclick="prev2()">
                    <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="slider-btn btn2 " onclick="next2()">
                    <i class="bi bi-chevron-right" aria-hidden="true"></i></button>


                <div class="slider-wrap ">
                    <div class="slider-main " id="slider-main-Views">
                            @foreach($data->categories as $category)
                             @foreach($category->products as $product)
                                <div class="item-Views">
                                    <div class="up-part">
                                             <img src="{{url('images/products',$product->photo)}}" alt="">
                                        <div class="text-views ">
                                            <input type="hidden" name="product_id" class="product_id" data-product-id="{{ $product->id }}">
                                            <input type="hidden" name="restaurant_id" id="restaurant_id" data-restaurant-id="{{ $data->id }}">
                                            <button type="button" class="views-btn favorite_product" >
                                                <i class="bi bi-heart" aria-hidden="true">
                                                </i>
                                            </button>
                                            @if($product->offer)
                                                <p style="background-color:crimson">OFFER</p>
                                            @endif

                                        </div>
                                        <div class="rate-views">
                                            <i class="bi bi-star"></i> &nbsp;3.1 (300+)
                                        </div>
                                    </div>
                                    <div class="down-part">
                                        <div class="time" style="margin-bottom: 5px">
                                            <a class="down-part-a" href="">{{$product->name}}</a>

                                            <p style="color:crimson;"> ${{$product->price}} </p>
                                        </div>
                                        <p>{{$product->description}}</p>
                                    </div>
                                </div>
                        @endforeach
                        @endforeach

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-------------------------Menu----------------------------->
    <section class="menu">
        <div class="collecter ">

            <div class="right-side ">

                <ul class="list-group">
                    @foreach($data->categories as $item)
                    @foreach($item->sub_categories as $subcategory)
                    <li class="list-unstyled header bg-light ">{{$subcategory->name}} <span>{{$subcategory->products->count()}} ITEMS</span></li>
                        @foreach($subcategory->products as $product)
                        <li class="bite product_data" id="product_data">
                        <div class="pill">
                            <div class="img">
                                <img src="{{url('images/products/',$product->photo)}}" style="height: 100%; width: 100%;" alt="" srcset="">
                            </div>
                            <div class="content">
                                {{$product->name}}
                                @if($product->offer)
                                <span class="spn-views">offer</span>
                                @endif
                                <br><span>{{$product->description}}</span>

                            </div>
                        </div>
                        <div class="btn-Menu ">
                            @if($product->sizes->count()>=1)
                                <div class="form-outline mb-4" style="margin-right: 20px">
                                    <div class="content" style="font-size: 14px;"> size </div>
                                  <select  id="product_size" name="product_size" style="font-size: 12px;" class="form-control form-control-lg product_size" onclick="console.log($(this).val()) " onchange="console.log('change is firing')" >
                                    <!--placeholder-->
                                    @foreach($product->sizes as $size)
                                        <option style="color:#dc3545;    font-size: 12px;"   value="{{$size->id}}"> {{$size->size}}</option>
                                    @endforeach
                                </select>

                                </div>
                                <div class="form-outline mb-4">
                                    <div class="content" style="font-size: 14px;"> price </div>
                                    @if($product->offer)
                                    <span style="color:#dc3545;margin-right: 0;font-size: 12px;">${{$product->price-($product->price*$product->offer->percentage/100)}}</span> .
                                    <del style="color:gray;font-size: 12px;">${{$product->price}}</del>
                                    @else
                                        <span style="color:#dc3545;margin-right: 0;font-size: 12px;">${{$size->price}}</span>
                                    @endif
                                </div>
                            @else
                                <div class="content "  style="margin-right: 20px;font-size: 14px;"> one size </div>
                                <div class="form-outline mb-4">
                                <div class="content" style="font-size: 14px;"> price </div>

                                <span  style="color:#dc3545;font-size: 12px;">${{$product->price}}</span>
                                </div>
                            @endif

                        </div>
                            <input type="hidden" name="product_id" id="product_id" class="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="restaurant_id" id="restaurant_id" class="restaurant_id" value="{{ $data->id }}">
                            <div class="btn-Menu ">
                                <button type="button" class="btn btn-outline-secondary add_to_cart btnMenu"  id="addToCartBtn">ADD</button>
                        </div>
                    </li>
                    @endforeach
                    @endforeach
                    @endforeach
                </ul>
                <div class="rate bites ">
                    <div class="list-unstyled header  ">Rate this Place </div>
                    <div class="list-unstyled header" style="font-size: 14px;font-weight: 800; text-align: end;">
                        @for($i=1; $i<=5; $i++)
                            @if($i<=$data->reviews->avg('stars'))
                        <i class="bi bi-star text-warning"></i>
                            @else
                        <i class="bi bi-star"></i>
                            @endif
                        @endfor
                        &nbsp;{{$data->reviews->count('id')}}
                    </div>
                </div>
                @php
                    $reviews = $data->reviews;
                    $totalReviews = $reviews->count();
                    $oneStarCount = $reviews->where('stars', 1)->count();
                    $twoStarCount = $reviews->where('stars', 2)->count();
                    $threeStarCount = $reviews->where('stars', 3)->count();
                    $fourStarCount = $reviews->where('stars', 4)->count();
                    $fiveStarCount = $reviews->where('stars', 5)->count();
                @endphp
                <div class="rate">
                    <div class=" header">Rate and Reviews<br><p class="spn-rate">Rated {{ round($data->reviews->avg('stars'),2)}} out of 5</p></div>

                    <div class="rate-review mt-4">
                        <div class="list-group">
                            <div>
                                <div class="fw-light ">5 stars</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: {{ $fiveStarCount / $totalReviews * 100 }}%;" aria-valuenow="{{ $fiveStarCount }}" aria-valuemin="0" aria-valuemax={{ $totalReviews }}></div>
                            </div>
                            <div >
                                <div class="fw-light text-end ">{{ round($fiveStarCount / $totalReviews * 100, 1) }}%</div>
                            </div>
                        </div>
                        <div class="list-group">
                            <div>
                                <div class="fw-light ">4 stars</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: {{ $fourStarCount / $totalReviews * 100 }}%;" aria-valuenow="{{ $fourStarCount }}" aria-valuemin="0" aria-valuemax={{ $totalReviews }}></div>
                            </div>
                            <div >
                                <div class="fw-light text-end ">{{ round($fourStarCount / $totalReviews * 100, 1) }}%</div>
                            </div>
                        </div>

                        <div class="list-group">
                            <div>
                                <div class="fw-light ">3 stars</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: {{ $threeStarCount / $totalReviews * 100 }}%;" aria-valuenow="{{ $threeStarCount }}" aria-valuemin="0" aria-valuemax={{ $totalReviews }}></div>
                            </div>
                            <div >
                                <div class="fw-light text-end ">{{ round($threeStarCount / $totalReviews * 100, 1) }}%</div>
                            </div>
                        </div>

                        <div class="list-group">
                            <div>
                                <div class="fw-light ">2 stars</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: {{ $twoStarCount / $totalReviews * 100 }}%;" aria-valuenow="{{ $twoStarCount }}" aria-valuemin="0" aria-valuemax={{ $totalReviews }}></div>
                            </div>
                            <div >
                                <div class="fw-light text-end ">{{ round($twoStarCount / $totalReviews * 100, 1) }}%</div>
                            </div>
                        </div>

                        <div class="list-group">
                            <div>
                                <div class="fw-light ">1 stars</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: {{ $oneStarCount / $totalReviews * 100 }}%;" aria-valuenow="{{ $oneStarCount }}" aria-valuemin="0" aria-valuemax={{ $totalReviews }}></div>
                            </div>
                            <div >
                                <div class="fw-light text-end ">{{ round($oneStarCount / $totalReviews * 100, 1) }}%</div>
                            </div>
                        </div>
                    </div >

                    <div style="margin-top: 25px;">
                        <button type="button" class="redBtn w-100">Rate and Review</button></a>
                    </div>
                </div>

                <div class="rate p-0">
                    <li class="list-group ">
                        <div class="links ">
                            <div class="header">All Rating and Reviews</div>
                            <a href="#">Top Rated</a>
                        </div>

                        @foreach($data->reviews as $review)
                        <div class="pill">
                            <div class="img">
                                <img src="{{url('images/users/',$review->user->photo)}}" style="height: 100%; width: 100%;" alt="">
                            </div>
                            <div class="content me-0">
                                <div class=" d-flex">
                                    <div>
                                        <a href="">{{$review->user->name}}</a><br> <p class="spn-rate">{{ $review->created_at->format('Y-m-d') }}</p>
                                    </div>
                                    <div style="font-size: 14px;font-weight: 800; text-align: end;">
                                        @for($i=1; $i<=5; $i++)
                                            @if($i<=$review->stars)
                                        <i class="bi bi-star text-warning"></i>
                                            @else
                                        <i class="bi bi-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                <p class="spn-rate text-dark mt-4 mb-3">{{$review->review}}</p>

                            </div>
                        </div>
                        @endforeach
                    </li>
                    <div class=" links  d-flex justify-content-center" style="height: 50px;">
                        <a href="#" class="a-link">See All Reviews</a>
                    </div>
                </div>


                <div class="rate bg-white ">
                    <div class=" header">Leave Comments</div>
                    <form action="{{route('review.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class=" bites mt-3"  style="font-size: 12px; font-weight: 300; ">
                            <span class="text-dark">Rate this Place </span>
                            <div style="text-align: end;display: inline-block">
                                <div class="rating d-flex col-md-6">
                                        <input type="radio" id="star5" name="stars" value="5"><label for="star5"></label>
                                        <input type="radio" id="star4" name="stars" value="4"><label for="star4"></label>
                                        <input type="radio" id="star3" name="stars" value="3"><label for="star3"></label>
                                        <input type="radio" id="star2" name="stars" value="2"><label for="star2"></label>
                                        <input type="radio" id="star1" name="stars" value="1"><label for="star1"></label>

                                </div>
                            </div>
                        </div>
                    <div class="form-floating mt-3">
                        <span class="text-dark ">Your Comment</span>
                        <textarea class="form-control mt-2" name="review" required  id="floatingTextarea2" style="height:55px"></textarea>
                    </div>

                    <div style="margin-top: 15px;">
                        <button type="submit" class="redBtn w-100">Submit Comment</button>
                    </div>
                    </form>
                </div>
            </div>

            <!-----------------------------------left-side------------------------------------->
            <div class="right-side" style="height: max-content;">
                <ul class="list-group" style="border-top-right-radius: 5px; border-top-left-radius: 5px;">
                    <li class="list-group-item ">
                        <div class="pill">
                            <div class="img">
                                <img src="{{url('images/restaurants/',$data->logo)}}" style="height: 100%; width: 100%;" alt="" srcset="">
                            </div>
                            <div class="content" style="font-size: 16px;">
                                {{$data->restaurant_name}} <br>
                                <span style="font-size: 11px;">
                                <a href="" class="bi bi-geo-fill text-center"></a>
                                {{$data->address}}
                            </span>
                            </div>
                        </div>
                    </li>
                @foreach($cartItems as $cart)
                    <li class=" bites swears">
                        <div class="pill">
                            <h6 class="bi bi-x"></h6>
                            <div class="content text-secondary">
                               <span> {{$cart->product->name}} </span>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div style="display: flex;">
                                <button type="button" class="btn btn-outline-secondary" onclick="decrementQuantity({{ $cart->id }})">-</button>
                                <button type="button" class="btn btn-secondary quantity" style="font-size: 13px;" id="quantity-{{ $cart->id }}">{{ $cart->quantity }}</button>
                                <button type="button" class="btn btn-outline-secondary" onclick="incrementQuantity({{ $cart->id }})">+</button>
                            </div>    </div>
                        <div style=" font-size: 12px; ">
                            <span style="color:crimson;">${{$cart->price}}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <ul class="list-group">
                    <li class="list-group-item ">
                        <div class="mb-3 input-promo-code" >
                            <input type="text" class="form-control" id="button-addon1" placeholder="Enter Promo Code">
                            <button type="button" id="button-addon2" class="btn btn-danger btn-code redBtn">% APPLY</button>
                        </div>
                        <div class="d-flex " style="height: 50px; ">
                            <span class="input-group-text iconc " style="width: max-content"><i class="bi bi-chat-left"></i></span>
                            <textarea class="form-control " style="font-size: 12px;" placeholder="Any Suggestions? We will pass it on..." aria-label="With textarea"></textarea>
                        </div>
                    </li>

                </ul>

                <ul class="list-group ">
                    <li class="list-group-item ">
                        <div class="total-pay" >
                            <div class=" text-secondary ">
                                Item Total
                            </div>

                            <div style=" font-size: 13px;text-align: end;">
                                <span>$3140</span>
                            </div>
                        </div>

                        <div class="total-pay" >
                            <div class=" text-secondary ">
                                Resturant Charges
                            </div>

                            <div style=" font-size: 13px;text-align: end;">
                                <span>$62.8</span>
                            </div>
                        </div>

                        <div class="total-pay" >
                            <div class=" text-secondary ">
                                Delivery Fee
                            </div>

                            <div style=" font-size: 13px;text-align: end;">
                                <span>$10</span>
                            </div>
                        </div>

                        <div class="total-pay" >
                            <div class=" " style="color:rgb(2, 180, 2);">
                                Total Discount
                            </div>

                            <div style=" font-size: 13px;text-align: end;">
                                <span style="color:rgb(2, 180, 2);">$1884</span>
                            </div>
                        </div>
                        <hr>
                        <div class="To-pay" >
                            <div >
                                TO PAY
                            </div>

                            <div class="text-end ">
                                <span class="text-black">$1329</span>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item ">
                        <button type="button" class="btn btn-success btn-buy">PAY $1329<i class="bi bi-arrow-right"></i></button>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).on('change', '#product_size', function() {
            var size = $(this).val();
            var product_id = $(this).val();
            console.log("here is");
            if (size) {
                console.log("hello");
                $.ajax({
                    url: '/get-price/' + size + product_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('#product_price').empty();
                        $.each(data, function(key, value) {
                            $('#product_price').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#product_price').empty();
            }
        });
</script>
<script>
        const rating = document.querySelector('input[name="stars"]:checked');
        console.log(rating);
</script>


<script>
    $(document).ready(function() {
        $('.add_to_cart').click(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            var product_id = $(this).closest('.product_data').find('.product_id').val();
            var restaurant_id = $(this).closest('.product_data').find('.restaurant_id').val();
            var product_size = $(this).closest('.product_data').find('.product_size').val();
            if(!product_size){
                product_size = null;
            }
alert(product_id);
alert(restaurant_id);
alert(product_size);
            console.log('Product ID:', product_size);
            $.ajax({

                method:"POST",
                url:"/add_to_cart",
                data:{
                    'product_id':product_id,
                    'restaurant_id':restaurant_id,
                    'product_size':product_size,
                },

                success:function (response){
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500});                },
                error:function (xhr, status, error){
                    console.log('Error:', error);
                    console.log('Status:', status);
                    console.log('Response:', xhr.responseText);

                }
            });        });
    });
</script>
<script>
    function decrementQuantity(productId) {
        var quantityElement = document.querySelector('#quantity-' + productId);
        var currentQuantity = parseInt(quantityElement.textContent);

        // Make sure the quantity does not go below 1
        if (currentQuantity > 1) {
            quantityElement.textContent = currentQuantity - 1;
        }
    }

    function incrementQuantity(productId) {
        var quantityElement = document.querySelector('#quantity-' + productId);
        var currentQuantity = parseInt(quantityElement.textContent);

        // Increase the quantity
        quantityElement.textContent = currentQuantity + 1;
    }
</script>