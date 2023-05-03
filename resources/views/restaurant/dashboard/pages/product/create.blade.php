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
                                        <li class="breadcrumb-item active">Add Product
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
                            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Photo</label>
                                        <input type="file" id="form3Example8" class="form-control form-control-lg" name="photo" placeholder="logo"/>
                                    </div>
                                    @error('Photo')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Product Name</label>
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="name" placeholder="product Name"/>
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Price</label>
                                        <input type="number" id="form3Example8" class="form-control form-control-lg" name="price" placeholder="price"/>
                                    </div>
                                    @error('price')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">quantity</label>
                                        <input type="number" id="form3Example8" class="form-control form-control-lg" name="quantity" placeholder="quantity"/>
                                    </div>
                                    @error('quantity')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Description</label>
                                        <textarea type="text" id="form3Example8" class="form-control form-control-lg" name="description" placeholder="description"></textarea>
                                    </div>
                                    @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Sub Category Name</label>
                                        <select  id="status" name="sub_category_id"  class="form-control form-control-lg" onclick="console.log($(this).val())"
                                                 onchange="console.log('change is firing')" >
                                            <!--placeholder-->
                                            <option  selected> Select Sub Category Name</option>
                                            @foreach($sub_categories as $sub_category)
                                            <option  style="color: black" value={{$sub_category->id}}> {{$sub_category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputLogo">Status</label>
                                        <select  id="status" name="status"  class="form-control form-control-lg" onclick="console.log($(this).val())"
                                                 onchange="console.log('change is firing')" >
                                            <!--placeholder-->
                                            <option  selected style="color: black" value={{\App\Models\Product::FOUND}}> Found</option>
                                            <option  style="color: black" value={{\App\Models\Product::NOTFOUND}}> Not Found</option>
                                        </select>
                                    </div>


                                    <div class="card-footer">
                                        <button type="submit" style="background-color: #696cff;color: white"
                                                class="btn">Add Product
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
