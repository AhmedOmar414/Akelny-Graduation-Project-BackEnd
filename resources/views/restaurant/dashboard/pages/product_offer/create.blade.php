@extends('restaurant.dashboard.layout.layout')
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
                                        <li class="breadcrumb-item"><a href="{{route('restaurant.dashboard')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Add Offer
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
                            <form action="{{route('product_offer.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <input hidden name="product_id" value="{{$product}}">
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Offer Name</label>
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="name" placeholder="product offer Name"/>
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Percentage</label>
                                        <input type="number" id="form3Example8" class="form-control form-control-lg" name="percentage" placeholder="percentage"/>
                                    </div>
                                    @error('percentage')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Start At</label>
                                        <input type="date" id="form3Example8" class="form-control form-control-lg" name="start_at" placeholder="start_at"/>
                                    </div>
                                    @error('start_at')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">End At</label>
                                        <input type="date" id="form3Example8" class="form-control form-control-lg" name="end_at" placeholder="end_at"/>
                                    </div>
                                    @error('end_at')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                    <div class="card-footer">
                                        <button type="submit" style="background-color: #696cff;color: white"
                                                class="btn">Add Offer
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
