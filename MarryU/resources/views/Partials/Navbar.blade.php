<!-- header section strats -->
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="/"><img width="250" src="{{asset('Template/images/logo.png')}}" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item @yield('welcome')">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item @yield('products')">
                        <a class="nav-link" href="/products">Products</a>
                    </li>
                    <li class="nav-item @yield('gallery')">
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item @yield('contact')">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>

                   
                    @auth
                    <li>
                        <div>
                            <a class="btn" href="/cart" >
                            <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown show">
                            <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/profile" style="text-transform: capitalize;">{{ auth()->user()->username }}</a>
                                <a class="dropdown-item" href="#">MyBooking</a>
                                <hr class="dropdown-divider">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    @endauth
                    
                </div>
            </nav>
            </div>
        </header>