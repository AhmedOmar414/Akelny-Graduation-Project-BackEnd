@extends('website.pages.auth.layout.index')

@section('content')

        <div class="row">
            <div class="col-6">
                <div>
                    <div style="display: flex;justify-content: center;align-items: center">
                        <img src="{{asset('website/images/auth/2.jpg')}}"  style="width: 60%;">
                    </div>
                    <br>
                    <h5 style="text-align: center;color: #888888">Join us now to start working together<br> successfully and we will provide you with all <br> the means that will help you succeed</h5>
                    <br>
                    <div style="display: flex;justify-content: center;align-items: center">
                        <a class="btn btn-primary" style="color: white;width: 40%;">Join Now As a Restaurant</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <div style="display: flex;justify-content: center;align-items: center">
                        <img src="{{asset('website/images/auth/1.jpg')}}"  style="width: 60%;">
                    </div>
                    <br>
                    <h5 style="text-align: center;color: #888888">Join us now and start choosing your <br> favorite meal from a large category of trusted <br> restaurants that we provide for you</h5>
                    <br>
                    <div style="display: flex;justify-content: center;align-items: center">
                        <a href="{{route('client-login')}}" class="btn btn-success" style="color: white;width: 40%;">Join Now As a Client</a>
                    </div>
                </div>
            </div>
        </div>

@endsection
