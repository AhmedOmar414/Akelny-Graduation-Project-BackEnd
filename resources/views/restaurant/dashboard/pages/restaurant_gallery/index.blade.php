@extends('restaurant.dashboard.layout.layout')
@section('content')
    <div class="row" style="  margin-right: 13px;  margin-left: 13px;">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="content-header-left col-md-6 col-12 mb-2" style="margin-left: 20px;margin-top: 20px">
                            <div class="row breadcrumbs-top">
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('/')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Restaurant Gallery
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
                            <form action="{{route('restaurant_gallery.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Add Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="photo" class="custom-file-input" multiple id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile"></label>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" style="background-color: #696cff;color: white"
                                                    class="btn">upload
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="card-header" style="background-color:#696cff;padding:0.5rem 0.5rem">
                        <h4 class="card-title" style="color: white">Gallery</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($restaurant_gallery as $images )
                                <div class="col-sm-2" >
                                    <a href="{{ asset('images/restaurant_gallery/'.$images->photo)}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                        <img  src="{{ url('images/restaurant_gallery/'.$images->photo)}}" class="img-fluid mb-2" alt="white sample "/>
                                    </a>
                                    <form action="{{route('restaurant_gallery.destroy',$images->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-min-width box-shadow-3 mr-1 mb-1 btn-sm">delete</button>
                                    </form>


                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
