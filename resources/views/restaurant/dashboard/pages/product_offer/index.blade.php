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
                                        <li class="breadcrumb-item"><a href="{{route('/')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Products Offers
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">id</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">offer</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Percentage</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Start At</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">End At</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Product id</th>
                                <th class="text-bg-primary opacity-7" style="color: #696cff">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product_offer as $offer)
                            <tr>
                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{$offer->id}}</p>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h4 class="mb-0 text-sm">{{$offer->name}}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">%{{$offer->percentage}}</h6>
                                        <div>
                                            <div class="progress">
                                                @if($offer->percentage <= 50)
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{$offer->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$offer->percentage}}%;"></div>
                                                @else
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="{{$offer->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$offer->percentage}}%;"></div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$offer->start_at}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$offer->end_at}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$offer->products?->id}}</h6>
                                    </div>
                                </td>


                                <td class="align-middle">
                                    <div class="dropdown show">
                                        <a style="background-color: #696cff; color: white" class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" href="{{route('product_offer.edit',['product_offer' =>$offer->id])}}">edit</a>
                                            <a  href="#delete"  data-toggle="modal" class="dropdown-item btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" data-id="{{$offer->id}}" data-name="{{$offer->name}}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="justify-content-center d-flex">
                             <!--delete-->
                            <div class="modal" id="delete">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 30rem;">
                                    <div class="modal-content modal-content-demo">
                                        <form action="product_offer/destroy" method="post">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <p style="font-size: 25px;text-align: center; color: red">are sure of the deleting category</p><br>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>
@endsection