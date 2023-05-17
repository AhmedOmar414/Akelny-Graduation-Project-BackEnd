@extends('frontend.layouts.master')

@section('title','E-SHOP || PRODUCT PAGE')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{url('/')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Restaurants</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- End Breadcrumbs -->
    <!-- Start most popular  -->
    @if($restaurants)
        <section class="shop-home-list section" style="padding-bottom: 0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="row col-12">
                            @foreach($restaurants as $restaurant)
                                <div class="col-md-3">
                                    <div class="card" style="height: 280px;margin-bottom: 5px;width: 250px;">

                                        <img src="{{asset($restaurant->photo)}}" class="card-img-top" style="height: 160px" alt="Laptop" />

                                        <a href="{{route('menu',$restaurant->id)}}">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="mb-0">{{$restaurant->name}}</h5>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="small"><a href="#!" class="text-muted">open time</a></p>
                                                    <p class="small">{{\Carbon\Carbon::parse($restaurant->open_time)->format('g:i A')}}</p>
                                                </div>

                                                <div class="d-flex justify-content-between mb-2">
                                                    <p class="text-muted mb-0">Review <span class="fw-bold">6</span></p>
                                                    <div class="ms-auto text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>
    @elseif($restaurants->count() < 1)
        <h3 style="text-align: center">No Restaurants Found For this Category</h3>
    @endif
    <!-- End Shop popular  -->




@endsection
@push('styles')
    <style>
        .pagination{
            display:inline-flex;
        }
        .filter_button{
            /* height:20px; */
            text-align: center;
            background:#F7941D;
            padding:8px 16px;
            margin-top:10px;
            color: white;
        }
    </style>
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    {{-- <script>
        $('.cart').click(function(){
            var quantity=1;
            var pro_id=$(this).data('id');
            $.ajax({
                url:"{{route('add-to-cart')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    quantity:quantity,
                    pro_id:pro_id
                },
                success:function(response){
                    console.log(response);
					if(typeof(response)!='object'){
						response=$.parseJSON(response);
					}
					if(response.status){
						swal('success',response.msg,'success').then(function(){
							document.location.href=document.location.href;
						});
					}
                    else{
                        swal('error',response.msg,'error').then(function(){
							// document.location.href=document.location.href;
						});
                    }
                }
            })
        });
    </script> --}}
    <script>
        $(document).ready(function(){
            /*----------------------------------------------------*/
            /*  Jquery Ui slider js
            /*----------------------------------------------------*/
            if ($("#slider-range").length > 0) {
                const max_value = parseInt( $("#slider-range").data('max') ) || 500;
                const min_value = parseInt($("#slider-range").data('min')) || 0;
                const currency = $("#slider-range").data('currency') || '';
                let price_range = min_value+'-'+max_value;
                if($("#price_range").length > 0 && $("#price_range").val()){
                    price_range = $("#price_range").val().trim();
                }

                let price = price_range.split('-');
                $("#slider-range").slider({
                    range: true,
                    min: min_value,
                    max: max_value,
                    values: price,
                    slide: function (event, ui) {
                        $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                        $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                    }
                });
            }
            if ($("#amount").length > 0) {
                const m_currency = $("#slider-range").data('currency') || '';
                $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                    "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
    </script>
@endpush
