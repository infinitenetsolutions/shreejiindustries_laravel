<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{$title}} | Shreeji Industries </title>
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{{asset('css/color-switcher-design.css')}}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{asset('css/color-themes/default-theme.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
@include('include.header')
<div>{{ $body }}</div>
@include('include.footer')


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD39_Mb1wKUcuRD-0KPmQT6SQHhEMVX1O0"></script>
<script src="{{asset('js/map-script.js')}}"></script>
<!--End Google Map APi-->

<script src="{{asset('js/color-settings.js')}}"></script>

</body>

</html>
