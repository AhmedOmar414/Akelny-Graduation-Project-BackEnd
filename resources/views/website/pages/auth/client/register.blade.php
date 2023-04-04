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
                                    <h3 class="mb-5 text-uppercase">Client SignUp</h3>
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="name" placeholder="name"/>
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="mobile" placeholder="mobile"/>
                                    </div>
                                    @error('mobile')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" placeholder="email"/>
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
                                        <button type="button" class="btn btn-success btn-lg ms-2">Submit form</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
