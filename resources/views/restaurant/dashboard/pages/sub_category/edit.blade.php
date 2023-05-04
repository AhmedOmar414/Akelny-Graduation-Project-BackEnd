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
                                        <li class="breadcrumb-item"><a href="{{route('/')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Upadate Sub Category
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
                            <form action="{{route('sub_category.update',['sub_category' =>$sub_category->id])}}" method="POST" enctype="multipart/form-data">
                                {{ method_field('patch') }}
                                {{ csrf_field() }}
                                <div class="card-body">

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Sub Category Name</label>
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" value="{{$sub_category->name}}" name="name" placeholder="Sub Category Name"/>
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                <div class="form-outline mb-4">
                                    <label for="exampleInputLogo">Category Name</label>
                                    <select  id="status" name="category_id"  class="form-control form-control-lg" onclick="console.log($(this).val())"
                                             onchange="console.log('change is firing')" >
                                        <!--placeholder-->
                                        <option  style="color: black" disabled selected value={{$sub_category->categories?->id}}> {{$sub_category->categories?->name}}</option>
                                        @foreach($categories as $category)
                                            <option  style="color: black" value={{$category->id}}> {{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <div class="card-footer">
                                        <button type="submit" style="background-color: #696cff;color: white"
                                                class="btn">Upadate Sub Category
                                        </button>
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
