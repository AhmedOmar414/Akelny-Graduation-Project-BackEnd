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
                                    <img src="{{url('images/download.png')}}" alt="avatar" class="rounded-circle img-fluid " style="width: 150px;border-radius: 50%">
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
                            <form method="POST" action="{{route('user_profile.update',['user_profile'=>$user->id])}}" enctype="multipart/form-data">
                                {{ method_field('patch') }}
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="input-group" style="align-items: center" >
                                        <img style="margin-left: 40%;height: 100px;width: 100px" id="image-preview"  src="#" alt="No Image Selected" >
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">photo</label>
                                        <input type="file" id="image"  style="width: 250px;height: 10px" value="{{$user->photo}}" class="form-control form-control-lg" name="photo" placeholder="photo"/>
                                    </div>
                                    @error('photo')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <hr style="margin-bottom: 10px;color: black">
                                @if ($errors->any())
                                    <div class="alert alert-danger" style=" margin-right: 22px;  margin-left: 22px;">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName"> Name</label>
                                            <input  type="text"  name="name" class="form-control" id="fullName" value="{{$user->name}}">
                                        </div>
                                    </div>
                                    @error('photo')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input  type="email" name="email"  class="form-control"  id="eMail" value="{{$user->email}}">
                                        </div>
                                    </div>
                                    @error('photo')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Mobile</label>
                                            <input  type="number" class="form-control"
                                                   name="mobile"  id="mobile" value="{{$user->mobile}}">
                                        </div>
                                    </div>
                                    @error('photo')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
