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
<section class="part1 position-relative overflow-hidden ">
    <video loop autoplay muted plays-inline  >
        <source src="{{asset('assets/website/images/Video.Guru_20230129_011114056.mp4')}}" type="video/mp4">
        </video>
</section>

<section class="part2">
    <div class="form  ">
        <div class="head">
            <h2>Welcome Bach</h2>
            <p>Sign in to continue</p>
        </div>
<<<<<<< HEAD

        <form action="{{route('login')}}" method="POST" class="form-control">
            @foreach($errors->all() as $error)

                <li><span class="text-danger">{{ $error }}</span></li>
            @endforeach
            @csrf
            <div class="inputs-form">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-controll" name="email" placeholder="Enter Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-controll" placeholder="Enter Password" id="exampleInputPassword1">
                </div>
            <div class="groupbuttons ">
                <button type="submit" class="btn text-white redBtn">SIGN IN</button>
                <button type="button" class="btn text-white btn2"><img src="{{asset('assets/website/images/facebook_logo.webp')}}" alt="">Connect with facebook</button>
            </div>
        </form>


        <div class="signlinks d-block">
            <p><a href="">Forgot your password?</a></p>
=======
<form method="POST" action="{{route('login')}}" class="form-control">
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
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-controll" placeholder="Enter Email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-controll" placeholder="Enter Password" id="exampleInputPassword1">
        </div>
    </div>

    <div class="groupbuttons ">
        <button type="submit" class="btn text-white redBtn">SIGN IN</button>
        <button type="button" class="btn text-white btn2"><img src="{{asset('assets/website/images/facebook_logo.webp')}}" alt="">Connect with facebook</button>
    </div>
</form>



        <div class="signlinks d-block">
            <p><a href="./forgotPasswordPage.html">Forgot your password?</a></p>
>>>>>>> f1cb974e63bf222da77fa69ad297a0b314db269b
            <p><a href="{{route('register.page')}}">Don't have an account? Sign up</a></p>
        </div>
    </div>
</section>
</body>
</html>