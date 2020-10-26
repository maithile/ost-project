<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}


        {{-- import header --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>OST</title>
        <link rel="shortcut icon" href="{{ asset('image/favicon.png" type="image/x-icon') }}">
        <!-- Bootstrap , fonts & icons  -->
        <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/icon-font/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/typography-font/typo.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.css') }}">
        <!-- Plugin'stylesheets  -->
        <link rel="stylesheet" href="{{ asset('plugins/aos/aos.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/nice-select/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/slick/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/ui-range-slider/jquery-ui.css') }}">
        <!-- Vendor stylesheets  -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- Custom stylesheet -->
    </head>
    <body>
        <div id="app">
        {{-- import body --}}
        <div class="site-wrapper overflow-hidden ">
            <!-- Header start  -->
            <header
                class="site-header site-header--menu-right dynamic-sticky-bg py-7 py-lg-0 site-header--absolute site-header--sticky">
                <div class="container">
                    <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
                        <!-- Brand Logo-->
                        <div class="brand-logo">
                            <a href="{{route('homepage')}}">
                                    <h1>OST</h1>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="mobile-menu">
                            <div class="navbar-nav-wrapper">
                                <ul class="navbar-nav main-menu">
                                    <li class="nav-item dropdown active">
                                        <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown" href="#"
                                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Home </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2"
                                            href="#features" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Language <i class="fa fa-chevron-down"></i></a>
                                        <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <li class="drop-menu-item">
                                                <a href="{{ url('/find') }}">
                                                    English
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="{{ url('/find') }}">
                                                    Tiếng Việt
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="{{ url('/find') }}">
                                                    日本語
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2"
                                            href="#features" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            お仕事探し <i class="fa fa-chevron-down"></i></a>
                                        <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <li class="drop-menu-item">
                                                <a href="./page1.html">
                                                    Thực Tập Sinh
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="./page2.html">
                                                    Kỹ Sư
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="./page3.html">
                                                    Kỹ Năng Đặc Định
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="./page4.html">
                                                    Điều Dưỡng
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2"
                                            href="#features" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            ご求人探し <i class="fa fa-chevron-down"></i></a>
                                        <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <li class="drop-menu-item">
                                                <a href="./page1.html">
                                                    実習生
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="./page1.html">
                                                    エンジニア
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="./page1.html">
                                                    特定技能
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="./page1.html">
                                                    介護
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button"
                                data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu"
                                aria-expanded="true" aria-label="Toggle navigation">
                                <i class="gr-cross-icon"></i>
                            </button>
                        </div>
                        <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
                            <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset"
                                href="javacript:" data-toggle="modal" data-target="#login">
                                Log in
                            </a>
                            <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal"
                                data-target="#signup">
                                Sign up
                            </a>
                        </div>
                        <!-- Mobile Menu Hamburger-->
                        <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button"
                            data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <i class="icon icon-simple-remove icon-close"></i> -->
                            <span class="hamburger hamburger--squeeze js-hamburger">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </span>
                        </button>
                        <!--/.Mobile Menu Hamburger Ends-->
                    </nav>
                </div>
            </header>
            <!-- Header start end -->
    
    
            
            <!-- Hero Area -->
            <div class="position-relative z-index-1  mt-25 mt-md-15 mt-lg-0 mt-xl-22"></div>
    


        
        {{-- co san --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
        </div>
</body>
</html>
