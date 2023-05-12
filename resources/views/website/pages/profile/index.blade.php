@extends('website.layout.layout')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 100px">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                @if($user->photo)
                                    <a href="{{asset('images/users/'.$user->photo)}}">
                                        <img src="{{url('images/users/'.$user->photo)}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;border-radius: 50%">
                                    </a>
                                @else
                                    <img src="{{url('images/download.png')}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;border-radius: 50%">
                                @endif
                                <br>
                                <br>
                                    <h4 class="user-name text-center" style="overflow-inline: visible">{{$user->name}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="mb-2 text-primary"> Information</h3>
                            </div>
                            <form method="get" action="{{route('user_profile.edit',$user->id)}}">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName"> Name</label>
                                            <input disabled type="text" style="background-color: white; border: white 0 hidden" name="name" class="form-control" id="fullName" value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input disabled type="email" name="email" style="background-color: white; border: white 0 hidden" class="form-control"  id="eMail" value="{{$user->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Mobile</label>
                                            <input disabled type="number" class="form-control"
                                                   name="mobile" style="background-color: white; border: white 0 hidden" id="mobile" value="{{$user->mobile}}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
