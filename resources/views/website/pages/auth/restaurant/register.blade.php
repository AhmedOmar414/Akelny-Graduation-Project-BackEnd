@extends('website.pages.auth.layout.index')

@section('content')
    <section class="bg-dark vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="{{asset('website/images/register.jpg')}}"
                                     alt="Sample photo" class="img-fluid"
                                     style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Restaurant SignUp</h3>
                                    <form method="POST"  autocomplete="off" action="{{route('restaurant.register')}}" enctype="multipart/form-data">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        {{ $error }}
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="file" id="form3Example8" class="form-control form-control-lg" name="logo" placeholder="logo"/>
                                        </div>
                                        @error('logo')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <div class="form-outline mb-4">
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
                                        <div id="map" style="height:200px; width: 413px;" class="my-3"></div>
                                        <div class="form-outline mb-4">
                                            <input type="number" id="form3Example8" class="form-control form-control-lg" name="tax_registration_number" placeholder="tax_registration_number"/>
                                        </div>
                                        @error('tax_registration_number')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                         <div class="form-outline mb-4">
                                            <input type="datetime-local" id="form3Example8" class="form-control form-control-lg" name="open_at" placeholder="open_at"/>
                                        </div>
                                        @error('open_at')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror   <div class="form-outline mb-4">
                                            <input type="datetime-local" id="form3Example8" class="form-control form-control-lg" name="close_at" placeholder="close_at"/>
                                        </div>
                                        @error('close_at')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" name="name" class="form-control form-control-lg" placeholder="name"/>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <input type="tel" id="form3Example8" name="mobile" class="form-control form-control-lg" placeholder="mobile"/>
                                        </div>
                                        @error('mobile')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    <div class="form-outline mb-4">
                                        <input type="email" autocomplete="off"  id="form3Example8" name="email" class="form-control form-control-lg" placeholder="email"/>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example8" class="form-control form-control-lg" name="password" placeholder="password"/>
                                    </div>

                                    @error('confirmation_password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example8" class="form-control form-control-lg" name="password_confirmation" placeholder="confirm your password"/>
                                    </div>
                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                        <button type="submit" class="btn btn-success btn-lg ms-2">Submit form</button>
                                    </div>

                                         </form>


                                    <br>
                                    <a style="text-align: center;margin-left: 90px" href="{{route('restaurant-login')}}">already have an acount </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
