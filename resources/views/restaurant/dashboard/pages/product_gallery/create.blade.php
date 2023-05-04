@extends('restaurant.dashboard.layout.layout')
@section('content')

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
                <form action="{{route('product_gallery.store')}}" method="POST" enctype="multipart/form-data">
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
                            <div class="form-outline mb-4">
                                <label for="exampleInputLogo">Product Name</label>
                                <select  id="status" name="product_id"  class="form-control form-control-lg" onclick="console.log($(this).val())"
                                         onchange="console.log('change is firing')" >
                                    <!--placeholder-->
                                    <option  selected> Select Sub Category Name</option>
                                    @foreach($products as $product)
                                        <option  style="color: black" value={{$product->id}}> {{$product->name}}</option>
                                    @endforeach
                                </select>
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
@endsection
@section('js')

@endsection
