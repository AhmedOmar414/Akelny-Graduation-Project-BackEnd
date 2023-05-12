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
                                        <li class="breadcrumb-item"><a href="{{route('restaurant.dashboard')}}"> dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{route('sub_category.index')}}"> All Categories</a>
                                        </li>
                                        <li class="breadcrumb-item active">{{$category->name}}
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                        @if($sub_categories->count()>0)
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">id</th>
                                    <th class="text-uppercase text-bg-primary text-xxs font-weight-bolder opacity-7" style="color: #696cff">Sub Category</th>
                                    <th class="text-bg-primary opacity-7" style="color: #696cff">actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sub_categories as $sub_category)
                                    <tr>
                                        <td class="align-middle">
                                            <p class="text-xs font-weight-bold mb-0">{{$sub_category->id}}</p>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$sub_category->name}}</h6>
                                            </div>
                                        </td>

                                        <td class="align-middle">
                                            <div class="dropdown show">
                                                <a style="background-color: #696cff; color: white" class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" href="{{route('sub_category.edit',['sub_category' =>$sub_category->id])}}">edit</a>
                                                    <a  href="#delete"  data-toggle="modal" class="dropdown-item btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1 btn-sm" data-id="{{$sub_category->id}}" data-name="{{$sub_category->name}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="justify-content-center d-flex">
                                <!--delete-->
                                <div class="modal" id="delete">
                                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 30rem;">
                                        <div class="modal-content modal-content-demo">
                                            <form action="category/destroy" method="post">
                                                {{ method_field('delete') }}
                                                {{ csrf_field() }}
                                                <div class="modal-body">
                                                    <p style="font-size: 25px;text-align: center; color: red">are sure of the deleting category</p><br>
                                                    <input type="hidden" name="id" id="id" >
                                                    <p style="font-size: 35px;text-align: center;">
                                                        <input  style=" border: none;background-color: white; color: #696cff"   id="name" type="text" disabled>
                                                    </p>

                                                    <br>
                                                    <div class="modal-footer">
                                                        <button style="border-radius: 20px" type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                                                        <button style="border-radius: 20px" type="submit" class="btn btn-danger">delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <section class="align-content-center" style="text-align: center">
                                <div class="collecter" >
                                    <div >
                                        <img src="{{asset('images/chef2.png')}}" style="width: 250px; height: 250px;" alt="">
                                    </div>
                                    <div class="body text-center">
                                        <h2 class="text-danger">not found  <span>Categories</span></h2>
                                    </div>

                                </div>
                            </section>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')
    <script>
        $('#delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>
@endsection