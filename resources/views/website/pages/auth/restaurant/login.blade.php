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
                                    <h3 class="mb-5 text-uppercase">Restaurant Login</h3>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if(Session::has('success'))
                                        <div class="row mr-2 ml-2">
                                            <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-error">
                                                {{Session::get('success')}}
                                            </button>
                                        </div>
                                    @endif
                                    <form method="POST" action="{{route('restaurant.login')}}">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example8" name="email" class="form-control form-control-lg" placeholder="email"/>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example8" class="form-control form-control-lg" name="password" placeholder="password"/>
                                        </div>
                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                            <button type="submit" class="btn btn-success btn-lg ms-2">Submit form</button>
                                        </div>
                                    </form>
                                    <a style="text-align: center;margin-left: 90px;"  href="{{route('restaurant-register')}}">create an acount </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
