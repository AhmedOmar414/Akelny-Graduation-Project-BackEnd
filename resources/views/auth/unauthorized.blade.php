<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Forbidden | {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 text-center">
                            <i class="fas fa-lock fa-5x text-danger"></i>
                        </div>
                        <div class="col-sm-12 col-md-6 my-auto">
                            <h2 class="text-center text-danger">Forbidden</h2>
                            <p class="text-center">You do not have permission to access this resource.</p>
                            <div class="text-center mt-3">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
