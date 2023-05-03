@extends('admin.dashboard.layout.layout')
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
                                        <li class="breadcrumb-item"><a href="{{route('/')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Restaurants
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        @if($restaurants->count()>0)
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">id</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Restaurant</th>
                                <th class="text-bg-primary opacity-7" style="color: #696cff">actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($restaurants as $restaurant)
                            <tr>
                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{$restaurant->id}}</p>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <a href=" {{ asset('images/restaurants/'.$restaurant->logo)}}" >
                                                <img style="height: 80px; width: 80px" src=" {{ url('images/restaurants/'.$restaurant->logo)}}" class="avatar avatar-sm me-3 border-radius-lg rounded-circle" alt="restaurant logo">
                                            </a>                                       </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h4 class="mb-0 text-sm">{{$restaurant->restaurant_name}}</h4>
                                            @if($restaurant->status==1)
                                                <p class="text-xs text-success mb-0">Open</p>
                                            @else
                                                <p class="text-xs text-danger mb-0">Close</p>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown show">
                                        <a style="background-color: #696cff;color: white" class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Actions
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a href="#show"  data-toggle="modal"  class="dropdown-item btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" data-id="{{$restaurant->id}}" data-created_at="{{$restaurant->created_at}}" data-address="{{$restaurant->address}}" data-lng="{{$restaurant->lng}}" data-lat="{{$restaurant->lat}}"  data-tax_registration_number="{{$restaurant->tax_registration_number}}"  data-open_at="{{$restaurant->open_at}}" data-close_at="{{$restaurant->close_at}}">Show</a>
                                            <a class="dropdown-item btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" href="{{route('restaurant.edit',['restaurant' =>$restaurant->id])}}">edit</a>
                                            <a  href="#delete"  data-toggle="modal" class="dropdown-item btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" data-id="{{$restaurant->id}}" data-restaurant_name="{{$restaurant->restaurant_name}}">Delete</a>
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
                                                        <th scope="col" class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Id</th>
                                                        <th scope="col" class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Address</th>
                                                        <th scope="col" class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Latitude</th>
                                                        <th scope="col" class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Longitude</th>
                                                        <th scope="col" class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Tax Registration Number</th>
                                                        <th scope="col" class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Open At</th>
                                                        <th scope="col" class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Close At</th>
                                                        <th scope="col" class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Created At</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row" id="id">
                                                            <input  style=" border: none;background-color: white"  id="id" type="text" disabled>
                                                        </th>
                                                        <td id="address">
                                                            <input  style=" border: none;background-color: white"  id="address" type="text" disabled>
                                                        </td>
                                                        <td id="lat">
                                                            <input  style=" border: none;background-color: white"  id="lat" type="text" disabled>
                                                        </td>
                                                        <td id="lng">
                                                            <input  style=" border: none;background-color: white"  id="lng" type="text" disabled>
                                                        </td>
                                                        <td id="tax_registration_number">
                                                            <input  style=" border: none;background-color: white"  id="tax_registration_number" type="text" disabled>
                                                        </td>

                                                        <td id="open_at">
                                                            <input  style=" border: none;background-color: white"  id="open_at" type="text" disabled>
                                                        </td>
                                                        <td id="close_at">
                                                            <input  style=" border: none;background-color: white"  id="close_at" type="text" disabled>
                                                        </td>
                                                        <td id="created_at">
                                                            <input  style=" border: none;background-color: white"  id="created_at" type="text" disabled>
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
                                        <form action="restaurant/destroy" method="post">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <p style="font-size: 25px;text-align: center; color: red">are sure of the deleting restaurant</p><br>
                                                <input type="hidden" name="id" id="id" >
                                               <p style="font-size: 35px;text-align: center;">
                                                   <input  style=" border: none;background-color: white; color: #696cff"   id="name" type="text" disabled>
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
                                        <h2 class="text-danger">not found  <span>Restaurants</span></h2>
                                    </div>

                                </div>
                            </section>
                        @endisset
                    </div>
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
            var created_at = button.data('created_at')
            var address = button.data('address')
            var tax_registration_number = button.data('tax_registration_number')
            var close_at = button.data('close_at')
            var open_at = button.data('open_at')
            var lng = button.data('lng')
            var lat = button.data('lat')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #address').val(address);
            modal.find('.modal-body #open_at').val(open_at);
            modal.find('.modal-body #close_at').val(close_at);
            modal.find('.modal-body #tax_registration_number').val(tax_registration_number);
            modal.find('.modal-body #lng').val(lng);
            modal.find('.modal-body #lat').val(lat);

        })
    </script>
    <script>
        $('#delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('restaurant_name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>
@endsection