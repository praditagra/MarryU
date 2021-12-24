<html lang="en">
  <head>
    <!-- Required meta tags -->
    <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{asset('Template/images/favicon.png')}}" type="">
            <title>MarryU</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('Template/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('Template/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('Template/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('Template/css/responsive.css')}}" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>@yield('page')</title>
  </head>

  <body>
    @include('Partials.Navbar')
    
    @yield('webpage')

    @include('Partials.Footer')

    <!-- jQery -->
    <script src="{{asset('Template/js/jquery-3.4.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('Template/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('Template/js/bootstrap.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('Template/js/custom.js')}}"></script>  
  </body>
</html>