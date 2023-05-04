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
                                        <li class="breadcrumb-item active">Add Restaurant
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
                            <form action="{{route('restaurant.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="form-outline mb-4">

                                        <div class="form-outline mb-4">
                                            <label for="exampleInputLogo">User Name</label>
                                            <input type="text" id="form3Example8" class="form-control form-control-lg" name="name" placeholder="user Name"/>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <label for="exampleInputLogo">User Mobile</label>
                                            <input type="text" id="form3Example8" class="form-control form-control-lg" name="mobile" placeholder="mobile"/>
                                        </div>
                                        @error('mobile')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <label for="exampleInputLogo">User Email</label>
                                            <input type="email" id="form3Example8" class="form-control form-control-lg" name="email" placeholder="email"/>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <label for="exampleInputLogo"> Password</label>
                                            <input type="password" id="form3Example8" class="form-control form-control-lg" name="password" placeholder="password"/>
                                        </div>
                                        @error('confirmation_password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <label for="exampleInputLogo">Confirm Password</label>
                                            <input type="password" id="form3Example8" class="form-control form-control-lg" name="password_confirmation" placeholder="confirm your password"/>
                                        </div>
                                        <label for="exampleInputLogo">Status</label>
                                        <select  id="status" name="status"  class="form-control form-control-lg" onclick="console.log($(this).val())"
                                                 onchange="console.log('change is firing')" >
                                            <!--placeholder-->
                                            <option  selected style="color: black" value={{\App\Models\Restaurant::OPEN}}> Open</option>
                                            <option  style="color: black" value={{\App\Models\Restaurant::CLOSE}}> Close</option>
                                        </select>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Logo</label>
                                        <input type="file" id="form3Example8" class="form-control form-control-lg" name="logo" placeholder="logo"/>
                                    </div>
                                    @error('logo')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Restaurant Name</label>
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="restaurant_name" placeholder="restaurant Name"/>
                                    </div>
                                    @error('restaurant_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Address</label>
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="address" placeholder="address"/>
                                    </div>
                                    @error('address')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="text" id="lat" hidden class="form-control form-control-lg" name="lat" placeholder="lat"/>
                                    </div>
                                    @error('lat')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="text" id="lng" hidden class="form-control form-control-lg" name="lng" placeholder="lng"/>
                                    </div>
                                    @error('lng')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                    <div id="map" style="height:200px; width: 500px;" class="my-3"></div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Tax Registration Number</label>
                                        <input type="number" id="form3Example8" class="form-control form-control-lg" name="tax_registration_number" placeholder="tax_registration_number"/>
                                    </div>
                                    @error('tax_registration_number')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Open At</label>
                                        <input type="datetime-local" id="form3Example8" class="form-control form-control-lg" name="open_at" placeholder="open_at"/>
                                    </div>
                                    @error('open_at')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Close At</label>
                                        <input type="datetime-local" id="form3Example8" class="form-control form-control-lg" name="close_at" placeholder="close_at"/>
                                    </div>
                                    @error('close_at')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                    <div class="card-footer">
                                        <button type="submit" style="background-color: #696cff;color: white"
                                                class="btn">Add Restaurant
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
