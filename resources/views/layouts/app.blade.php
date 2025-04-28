<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>{{ $contactUs->company_name ?? '' }}</title> 
  <meta name="description" content=" We are a dental health wellness organisation promoting preventive dental health care. A lot of dental health problems can be avoided if only education and very early intervention is available to everyone. These dental health problems has led to lots of challenges such as pain, loss of teeth, mental health challenges, compromised quality of life, social exclusion and even malnutrition to name a few."> {{-- Uncomment and fill this --}}
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset($contactUs->favicon ?? 'favicon.ico')  }}"> {{-- Added a fallback favicon --}}

  {{-- ****** Add/Update Open Graph Tags Here ****** --}}
  <meta property="og:title" content="{{ $contactUs->company_name ?? config('app.name', 'Laravel') }}" />
  <meta property="og:description" content=" We are a dental health wellness organisation promoting preventive dental health care. A lot of dental health problems can be avoided if only education and very early intervention is available to everyone. These dental health problems has led to lots of challenges such as pain, loss of teeth, mental health challenges, compromised quality of life, social exclusion and even malnutrition to name a few." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ url()->current() }}" /> 
  <meta property="og:image" content="{{ asset($contactUs->favicon ?? '') }}" /> 
  <meta property="og:image:width" content="1200" /> 
  <meta property="og:image:height" content="630" /> 

  {{-- ****** Optional: Add Twitter Card Tags ****** --}}
  <meta name="twitter:card" content="summary_large_image"> {{-- Use 'summary' for smaller image --}}
  <meta name="twitter:title" content="{{ $contactUs->company_name ?? config('app.name', 'Laravel') }}">
  <meta name="twitter:description" content=" We are a dental health wellness organisation promoting preventive dental health care. A lot of dental health problems can be avoided if only education and very early intervention is available to everyone. These dental health problems has led to lots of challenges such as pain, loss of teeth, mental health challenges, compromised quality of life, social exclusion and even malnutrition to name a few.">
  <meta name="twitter:image" content="{{ asset($contactUs->favicon ?? 'favicon.ico') }}"> {{-- <<< Use the SAME image URL as og:image --}}



  <!-- Plugin css --> 
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet"> {{-- Fixed URL --}}

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

    {{-- Scripts should ideally be at the end of the body, moved them to footer partial --}}

</body>
</html>
