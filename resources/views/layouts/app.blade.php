<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head> 
  <meta charset="utf-8">
  <title>{{  $contactDetials->company_name ?? '' }}</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset($contactDetials->favicon ?? '')  }}">
      
  <!-- Plugin css -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="../../fonts.googleapis.com/css86ec.css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
  
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css')}}">

  
  <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

</head>

<body>
    
    @include('home.partial.navbar')

    @yield('content')
   
    @include('home.partial.footer')
    
</body>
</html>