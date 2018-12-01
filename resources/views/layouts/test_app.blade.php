<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>vKirirom Pine Resort</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--Rathanak Linked Script-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap-select.min.css')}}">
	<script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
	<link rel="SHORTCUT ICON" href="{{asset('frontend/images/HomePage/vKirirom.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">

	<link rel="stylesheet" href="{{asset('frontend/css/imagehover.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/rathanak_style.css')}}">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
	</div>
	<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
	{{-- <script src="{{asset('frontend/js/bootstrap.js')}}"></script> --}}
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.flexslider-min.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
</body>
</html>
