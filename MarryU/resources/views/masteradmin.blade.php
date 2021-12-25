<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{asset('Template/images/logo.png')}}"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> Admin | MarryU </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('Template/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('Template/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('Template/demo/demo.css')}}" rel="stylesheet" />
    </head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a  class="simple-text logo-normal">
                    <div class="logo-image-big">
                        <img src="{{asset('Template/images/logo.png')}}">
                    </div>
                </a>
            </div>
            
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="/admin">
                            <i class="fa fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="/admin/products">
                            <i class="fa fa-shopping-bag"></i>
                            <p>Product</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-question"></i>
                            <p>About</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel" style="height: 100vh;">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;">Home</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>

                <!-- profile -->
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/profile">Profile</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- End Navbar -->

    @yield('konten')


            <!-- footer -->
            <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
            <div class="row">
                <div class="credits ml-auto">
                    <span class="copyright"> © 2020, made with <i class="fa fa-heart heart"></i> by Group2</span>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>

    <!--   Core JS Files   -->
    <script src="{{asset('Template/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('Template/js/core/popper.min.js')}}"></script>
    <script src="{{asset('Template/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('Template/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{asset('Template/js/plugins/chartjs.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('Template/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('Template/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script>
</body>


</html>