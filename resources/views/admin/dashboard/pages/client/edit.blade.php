@extends('admin.dashboard.layout.layout')
@section('content')

    <div class="row" style="margin-right: 13px; margin-left: 13px;">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="content-header-left col-md-6 col-12 mb-2"
                             style="margin-left: 20px;margin-top: 20px">
                            <div class="row breadcrumbs-top">
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('/')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Upadate Client
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="container w-50">
                            @if ($errors->any())
                                <div class="alert alert-danger" style=" margin-right: 22px;  margin-left: 22px;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('client.update',['client' =>$client->id])}}" method="POST" enctype="multipart/form-data">
                                {{ method_field('patch') }}
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="m-2 border-light-primary">
                                    <div class="d-flex px-2 py-1 ">
                                        <div style="margin-left: 50%;">
                                            <a href="{{ url('images/users/'.$client->photo)}}">
                                                <img style="height: 80px; width: 80px" src=" {{ url('images/users/'.$client->photo)}}" class="avatar avatar-sm me-3 border-radius-lg" alt="client logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Photo</label>
                                        <input type="file" id="form3Example8"  value="{{$client->photo}}" class="form-control form-control-lg" name="photo" placeholder="logo"/>
                                    </div>
                                    @error('photo')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Client Name</label>
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" value="{{$client->name}}" name="name" placeholder="client Name"/>
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Mobile</label>
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" value="{{$client->mobile}}" name="mobile" />
                                    </div>
                                    @error('mobile')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Email</label>
                                        <input type="email" id="form3Example8" class="form-control form-control-lg" value="{{$client->email}}" name="email" />
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                    <div class="card-footer">
                                        <button type="submit" style="background-color: #696cff;color: white"
                                                class="btn">Upadate Client
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
