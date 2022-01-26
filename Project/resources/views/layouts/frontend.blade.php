<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Phone Shop</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />

</head>

<body>
  <div>
    @include('layouts.inc.navbar')
    
    @yield('content')
  </div>






<footer class="page-footer bg-dark text-center text-lg-start p-3">
  <div class="text-center p-3 text-light">
    © SUC 2022
    <a class="text-light" href="#">All Rights Reserved.</a>
  </div>
</footer>
</body>





<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
  new WOW().init();
</script>

</html>