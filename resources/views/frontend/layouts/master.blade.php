<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('frontend.layouts.head')
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

</head>
<body class="js">

{{--	<!-- Preloader -->--}}
{{--	<div class="preloader">--}}
{{--		<div class="preloader-inner">--}}
{{--			<div class="preloader-icon">--}}
{{--				<span></span>--}}
{{--				<span></span>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}
{{--	<!-- End Preloader -->--}}

	@include('frontend.layouts.notification')
	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main-content')

	@include('frontend.layouts.footer')

</body>
</html>
