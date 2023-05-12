@extends('restaurant.dashboard.layout.layout')
@section('content')
    <div class="row" style="  margin-right: 13px;  margin-left: 13px;">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="content-header-left col-md-6 col-12 mb-2" style="margin-left: 20px;margin-top: 20px">
                            <div class="row breadcrumbs-top">
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('restaurant.dashboard')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Orders
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    @if($orders->count()>0)
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">id</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">user id</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">status id</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">pyment type id</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">order date</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">order time</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">total cost</th>

                                <th class="text-bg-primary opacity-7" style="color: #696cff">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{$order->id}}</p>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$order->user_id}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$order->status_id}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$order->payment_type_id}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$order->date}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$order->time}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$order->total_cost}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown show">
                                        <a style="background-color: #696cff; color: white" class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a href="#show"  data-toggle="modal"  class="dropdown-item btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" data-id="{{$order->id}}" data-coupon_id="{{$order->coupon_id}}" data-lat="{{$order->lat}}" data-lng="{{$order->lng}}" data-website_percentage="{{$order->website_percentage}}" data-website_value="{{$order->website_value}}"  data-delivery_cost="{{$order->delivery_cost}}" data-notes="{{$order->notes}}">Show</a>
                                            <a  href="#delete"  data-toggle="modal" class="dropdown-item btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" data-id="{{$order->id}}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="justify-content-center d-flex">
                            <!--show-->
                            <div  class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5  class="modal-title" id="exampleModalLabel">Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="table-responsive p-0">
                                            <div class="modal-body">
                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">id</th>
                                                        <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">coupon id</th>
                                                        <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">lat</th>
                                                        <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">lng</th>
                                                        <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">website percentage</th>
                                                        <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">website value</th>
                                                        <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">delivery cost</th>
                                                        <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">notes</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row" id="id">
                                                            <input  style=" border: none;background-color: white"  id="id" type="text" disabled>
                                                        </th>
                                                        <td id="coupon_id">
                                                            <input  style=" border: none;background-color: white"  id="coupon_id" type="text" disabled>
                                                        </td>
                                                        <td id="lat">
                                                            <input  style=" border: none;background-color: white"  id="lat" type="text" disabled>
                                                        </td>
                                                        <td id="lng">
                                                            <input  style=" border: none;background-color: white"  id="lng" type="text" disabled>
                                                        </td>
                                                        <td id="website_percentage">
                                                            <input  style=" border: none;background-color: white"  id="website_percentage" type="text" disabled>
                                                        </td>

                                                        <td id="website_value">
                                                            <input  style=" border: none;background-color: white"  id="website_value" type="text" disabled>
                                                        </td>
                                                        <td id="delivery_cost">
                                                            <input  style=" border: none;background-color: white"  id="delivery_cost" type="text" disabled>
                                                        </td>
                                                        <td id="notes">
                                                            <input  style=" border: none;background-color: white"  id="notes" type="text" disabled>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--delete-->
                            <div class="modal" id="delete">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 30rem;">
                                    <div class="modal-content modal-content-demo">
                                        <form action="order/destroy" method="post">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <p style="font-size: 25px;text-align: center; color: red">are sure of the deleting order</p><br>
                                                <input type="hidden" name="id" id="id" >
                                               <p style="font-size: 35px;text-align: center;">
                                                   <input  style=" border: none;background-color: white; color: #696cff"   name="id" id="id" type="text" disabled>
                                               </p>

                                                <br>
                                                <div class="modal-footer">
                                                    <button style="border-radius: 20px" type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                                                    <button style="border-radius: 20px" type="submit" class="btn btn-danger">delete</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @else
                        <section class="align-content-center" style="text-align: center">
                            <div class="collecter" >
                                <div >
                                    <img src="{{asset('images/chef2.png')}}" style="width: 250px; height: 250px;" alt="">
                                </div>
                                <div class="body text-center">
                                    <h2 class="text-danger">not found  <span>Orders</span></h2>
                                </div>

                            </div>
                        </section>
                    @endisset
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
    <script>
        $('#show').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var coupon_id = button.data('coupon_id')
            const lat = button.data('lat');
            var lng = button.data('lng')
            var website_percentage = button.data('website_percentage')
            var website_value = button.data('website_value')
            var delivery_cost = button.data('delivery_cost')
            var notes = button.data('notes')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #coupon_id').val(coupon_id);
            modal.find('.modal-body #lng').val(lng);
            modal.find('.modal-body #lat').val(lat);
            modal.find('.modal-body #website_percentage').val(website_percentage);
            modal.find('.modal-body #website_value').val(website_value);
            modal.find('.modal-body #delivery_cost').val(delivery_cost);
            modal.find('.modal-body #notes').val(notes);
        })
    </script>
    <script>
        $('#delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })
    </script>
@endsection