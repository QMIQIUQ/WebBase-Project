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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
        
    </head>
    <body>
       <div>
        @include('layouts.inc.navbar')   

       @yield('content')
       </div>

       <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
       <script src="{{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>

       <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       

    </body>

    <footer class="footer bg-dark">
        <div class="container">
            <div class="row">               
                <div class="col-lg-12 text-center my-auto ">                   
                    <p class="mb-4 mb-lg-0">© SUC 2022. All Rights Reserved.</p>
                </div>                
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
            <script>
              new WOW().init();
              </script>
    
</html>
