@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Restaurant</h5>
    @if ($errors->any())
        <div class="alert alert-danger" style=" margin-right: 22px;  margin-left: 22px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-body">
      <form method="post" action="{{route('restaurants.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Name</label>
        <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{old('name')}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
          <div class="form-group">
              <label for="inputTitle" class="col-form-label">Mobile</label>
              <input id="inputTitle" type="text" name="mobile" placeholder="Enter mobile"  value="{{old('mobile')}}" class="form-control">
              @error('mobile')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </div>
          <div class="form-group">
              <label for="inputTitle" class="col-form-label">Address</label>
              <input id="inputTitle" type="text" name="address" placeholder="Enter address"  value="{{old('address')}}" class="form-control">
              @error('address')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </div>
          <div class="form-group">
              <label for="inputTitle" class="col-form-label">Open Time</label>
              <input id="inputTitle" type="time" name="open_time" placeholder="Enter open time"  value="{{old('open_time')}}" class="form-control">
              @error('open_time')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </div>

          <div class="form-group">
              <label for="inputTitle" class="col-form-label">Close Time</label>
              <input id="inputTitle" type="time" name="close_time" placeholder="Enter close time"  value="{{old('address')}}" class="form-control">
              @error('close_time')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </div>


          <div class="form-group">
            <label for="inputEmail" class="col-form-label">Email</label>
          <input id="inputEmail" type="email" name="email" placeholder="Enter email"  value="{{old('email')}}" class="form-control">
          @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
            <label for="inputPassword" class="col-form-label">Password</label>
          <input id="inputPassword" type="password" name="password" placeholder="Enter password"  value="{{old('password')}}" class="form-control">
          @error('password')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
          <div class="form-group">
              <label for="inputPassword" class="col-form-label">Password Confirmation</label>
              <input id="inputPassword" type="password" name="password_confirmation" placeholder="Enter password"  value="{{old('password')}}" class="form-control">
              @error('password_confirmation')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </div>

        <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Photo</label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
          <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <select name="status" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush
