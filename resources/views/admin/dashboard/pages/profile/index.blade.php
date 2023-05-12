@extends('admin.dashboard.layout.layout')
@section('content')
    <div class="container">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <div class="content-header-left col-md-6 col-12 mb-2"
                     style="margin-left: 20px;margin-top: 20px">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Profile
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body" style="margin: 30px">
                        <div class="account-settings">
                            <div class="user-profile">

                                @if($admin->photo)
                                    <a href="{{asset('images/users/'.$admin->photo)}}">
                                        <img src="{{url('images/users/'.$admin->photo)}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;border-radius: 50%">
                                    </a>
                                @else
                                    <img src="{{url('images/download.png')}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;border-radius: 50%">
                                @endif
                                <h4 class="user-name" style="overflow-inline: visible">{{$admin->name}}</h4>
                                <smail class="user-name" style="overflow-inline: visible">{{$admin->email}}</smail>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body" style="margin: 30px">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="mb-2 text-primary"> Admin Details</h3>
                            </div>
                            <form  method="get" action="{{route('admin_profile.edit',$admin->id)}}">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName"> Name</label>
                                        <input disabled type="text" name="name" class="form-control" id="fullName" value="{{$admin->name}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Mobile</label>
                                        <input disabled type="text" name="mobile" class="form-control" id="mobile" value="{{$admin->mobile}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">email</label>
                                        <input disabled type="email" class="form-control" name="email" id="email" value="{{$admin->email}}">
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('js')
@endsection
