<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page Title -->
    <title>@yield('page-title')</title>


    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="{{url('public/favicon.ico')}}">


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- icofont -->
    <link rel="stylesheet" href="{{url('public/css/icofont.min.css')}}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{url('public/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/owl.theme.default.min.css')}}">
    
    

    <!-- custom js -->
    <script type="text/javascript" src="{{url('public/js/main.js')}}"></script>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/style.css')}}">


    <!-- Jquery 3.3.3 -->
    <script type="text/javascript" src="{{url('public/js/jquery-3.3.1.min.js')}}"></script>

    

    <!-- custom js -->
   





    
    
</head>
<body>
 <div>
    @include('frontend.header.header')
   
</div>

<div style="min-height: 50vh;">
    @yield('content')
</div>

<div>
    @include('frontend.footer.footer')
</div>
</body>



<!-- Popper, Boostrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.js')}}"></script>  



   <!-- COUNTER -->
  <script type="text/javascript" src="{{url('public/js/jquery.counterup.min.js')}}"></script>

  <!-- owl carousel js -->
    <script type="text/javascript" src="{{('public/js/owl.carousel.min.js')}}"></script>

  <script type="text/javascript" src="{{url('public/js/jquery.waypoints.min.js')}}"></script>
  <!-- scrolltop -->
  <script type="text/javascript" src="{{url('public/js/scrolltop.js')}}"></script>


   <script type="text/javascript" src="{{url('public/js/main.js')}}"></script>



</html>