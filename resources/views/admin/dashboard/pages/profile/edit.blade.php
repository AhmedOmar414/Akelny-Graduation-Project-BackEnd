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
                                <li class="breadcrumb-item"><a href="{{route('admin_profile.index')}}"> profile</a>
                                </li>
                                <li class="breadcrumb-item active">Edit
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger" style=" margin-right: 22px;  margin-left: 22px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                                <h6 class="user-name" style="overflow-inline: visible">{{$admin->email}}</h6>
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
                                <h3 class="mb-2 text-primary">Update Admin Details</h3>
                            </div>
                            <form  method="POST" action="{{route('admin_profile.update',$admin->id)}}" enctype="multipart/form-data">
                                {{ method_field('patch') }}
                                {{ csrf_field() }}
                                <div class="input-group" style="align-items: center" >
                                    <img style="margin-left: 40%" id="image-preview" src="#" alt="No Image" >
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="exampleInputLogo">photo</label>
                                    <input type="file" id="image"  style="width: 380px" value="{{$admin->photo}}" class="form-control form-control-lg" name="photo" placeholder="photo"/>
                                </div>
                                @error('photo')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName"> Name</label>
                                        <input  type="text" name="name" class="form-control form-control-lg" id="fullName" value="{{$admin->name}}">
                                    </div>
                                </div>
                                @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Mobile</label>
                                        <input  type="text" name="mobile" class="form-control form-control-lg" id="mobile" value="{{$admin->mobile}}">
                                    </div>
                                </div>
                                @error('address')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">email</label>
                                        <input  type="email" class="form-control form-control-lg" name="email" id="open_at" value="{{$admin->email}}">
                                    </div>
                                </div>
                                @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('js')
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#image-preview').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#image").change(function() {
                    readURL(this);
                });
            </script>
@endsection
