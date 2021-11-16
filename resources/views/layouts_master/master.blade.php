<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

    @include('layouts_master.head')
</head>

<body>


<!-- container -->
@include('layouts_master.header')
@yield('content')
@include('layouts_master.footer')
@yield('js')
<script src="{{URL::asset('assets/home/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/home/js/tether.min.js')}}"></script>
<script src="{{URL::asset('assets/home/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/home/js/jquery.easing.js')}}"></script>
<script src="{{URL::asset('assets/home/js/jquery-waypoints.js')}}"></script>
<script src="{{URL::asset('assets/home/js/jquery-validate.js')}}"></script>
<script src="{{URL::asset('assets/home/js/owl.carousel.js')}}"></script>
<script src="{{URL::asset('assets/home/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{URL::asset('assets/home/js/numinate.min.js')}}"></script>
<script src="{{URL::asset('assets/home/js/jquery.event.move.js')}}"></script>
<script src="{{URL::asset('assets/home/js/jquery.twentytwenty.js')}}"></script>
<script src="{{URL::asset('assets/home/js/booked-calendar.js')}}"></script>
<script src="{{URL::asset('assets/home/js/main.js')}}"></script>

<!-- Revolution Slider -->
<script src="{{URL::asset('assets/home/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{URL::asset('assets/home/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{URL::asset('assets/home/revolution/js/slider.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

<script src="{{URL::asset('assets/home/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{URL::asset('assets/home/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{URL::asset('assets/home/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{URL::asset('assets/home/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{URL::asset('assets/home/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{URL::asset('assets/home/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{URL::asset('assets/home/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{URL::asset('assets/home/revolution/js/revolution.extension.slideanims.min.js')}}"></script>

<!-- Javascript end-->



</body>
</html>
