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
                                        <li class="breadcrumb-item active">Clients
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    @if($clients->count()>0)

                    <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">id</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">client</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">mobile</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Type</th>
                                <th class="text-bg-primary opacity-7" style="color: #696cff">actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{$client->id}}</p>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <a href=" {{ asset('images/users/'.$client->photo)}}" >
                                                <img style="height: 80px; width: 80px" src=" {{ url('images/users/'.$client->photo)}}" class="avatar avatar-sm me-3 border-radius-lg rounded-circle" alt="Client photo">
                                            </a>                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h4 class="mb-0 text-sm">{{$client->name}}</h4>
                                            <p class="text-xs text-secondary mb-0">{{$client->email}}</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$client->mobile}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        @if($client->user_type_id == \App\Models\User::ADMIN)
                                        <h6 class="mb-0 text-sm" style="color:red;">ADMIN</h6>
                                        @elseif($client->user_type_id == \App\Models\User::RESTAURANT)
                                            <h6 class="mb-0 text-sm">RESTAURANT</h6>
                                        @else
                                            <h6 class="mb-0 text-sm">USER</h6>
                                        @endif
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown show">
                                        <a style="background-color: #696cff;color: white" class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Actions
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" href="{{route('client.edit',['client' =>$client->id])}}">edit</a>
                                            @if(!$client->user_type_id == \App\Models\User::ADMIN)
                                            <a  href="#delete"  data-toggle="modal" class="dropdown-item btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" data-id="{{$client->id}}" data-name="{{$client->name}}">Delete</a>
                                            @endif
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
                                        <form action="client/destroy" method="post">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <p style="font-size: 25px;text-align: center; color: red">are sure of the deleting Client</p><br>
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
                                    <h2 class="text-danger">not found  <span>clients</span></h2>
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