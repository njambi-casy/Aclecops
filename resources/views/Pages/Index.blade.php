<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aclecops</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       <script src="{{ asset('js/app.js') }}" defer></script>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body> 
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a style="background-color: #ffffff; padding: 2px; border-radius: 5px; text-decoration-color: green;
                " class="navbar-brand" href="{{ url('/') }} ">
                    ACLECOPS
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="" >
                        <li class="nav-item "><a href="/About" class="btn btn-block btn-success">About Us</a></li><br>
                        <li class="nav-item "><a href="/Contacts" class="btn btn-block btn-success">Contact Us</a></li>
                        <li class="nav-item "><a href="#" class="btn btn-block btn-success">Patners</a></li>

                    </ul>
                    <!-- Right Side Of Navbar -->
                </div>
                   
            </div>
        </nav>
    </div>    
        @yield ('content') 
<div id="page-container">
     <div id="content-wrap">
      <div class="container"> 
          @include('Layouts/Content')
        <div >
              @include('Layouts/About')
        </div>
    </div>
    </div>
          

   </div>

   <footer>
          @include('Layouts.Contacts')
   </footer>
 </div>

 </body>
</html>
