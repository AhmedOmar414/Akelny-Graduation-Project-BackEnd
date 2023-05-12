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
                                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Messages
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    @if($messages->count()>0)

                    <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">id</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">user id</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">user name</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">subject</th>
                                <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">comment</th>
                                <th class="text-bg-primary opacity-7" style="color: #696cff">actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                            <tr>
                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{$message->id}}</p>
                                </td>
                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{$message->user_id}}</p>
                                </td>

                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$message->name}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$message->subject}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$message->message}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown show">
                                        <a style="background-color: #696cff;color: white" class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Actions
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <section class="align-content-center" style="text-align: center">
                            <div class="collecter" >
                                <div >
                                    <img src="{{asset('images/chef2.png')}}" style="width: 250px; height: 250px;" alt="">
                                </div>
                                <div class="body text-center">
                                    <h2 class="text-danger">not found  <span>messages</span></h2>
                                </div>

                            </div>
                        </section>
                    @endisset
                    </div>
                </div>
            </div>
        </div>
@endsection
