<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/website/css/sininpdg.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/bootstrap.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600&family=Merriweather+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,900&family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<section class="part1 position-relative w-100 overflow-hidden ">
    <video loop autoplay muted plays-inline  >
        <source src="{{asset('assets/website/images/Video.Guru_20230129_011114056.mp4')}}" type="video/mp4">
        </video>
</section>

<section class="part2  w-100 h-100 ">
    <div class="form  ">
        <div class="head">
            <h2>Hello There.</h2>
            <p>Sign up to continue</p>
        </div>
        <form method="POST" action="{{route('register')}}" class="form-control">
           @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="inputs-form">
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Name</label>
                <input type="text" name="name" class="form-controll" placeholder="Enter Name" id="exampleInputUsername" >
            </div>

            <div class="mb-3">
                <label for="exampleInputMobileNumber" class="form-label">Mobile Number</label>
                <input type="number" name="mobile" class="form-controll" placeholder="Enter Mobile" id="exampleInputMobileNumber" >
            </div>
            <div class="mb-3">
                <label for="exampleInputMobileNumber" class="form-label">Email</label>
                <input type="email" name="email" class="form-controll" placeholder="enter email" id="exampleInputEmail" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password"  name="password" class="form-controll" placeholder="Enter Password" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Retype Password</label>
            <input type = "password"  class="form-controll" name = "password_confirmation" placeholder = "password_confirmation"  >
            </div>
        </div>

        <div class="groupbuttons ">
            <button type="submit" class="btn text-white redBtn">SIGN IN</button>
            <button type="button" class="btn text-white btn2"><img src="{{asset('assets/website/images/facebook_logo.webp')}}" alt="">Connect with facebook</button>
        </div>
        </form>

        <div class="signlinks">
            <p><a href="{{route('login.page')}}">Already an account? Sign in</a></p>
        </div>
    </div>
</section>
</body>
</html>