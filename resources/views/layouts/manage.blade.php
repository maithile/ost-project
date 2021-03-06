<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- import header --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OST</title>
    <link rel="shortcut icon" href="{{ asset('image/favicon.png" type="image/x-icon') }}">
    <!-- Bootstrap , fonts & icons  -->
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icon-font/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/typography-font/typo.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome-5/css/all.css') }}">
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
                    <nav class="navbar navbar-light bg-light">
                        <div class="brand-logo">
                            <a href="{{ route('homepage') }}">
                                <h1>OST</h1>
                            </a>
                        </div>
                        <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
                            @yield('nav')
                        </div>
                    </nav>
                </div>
            </header>
            <!-- Header start end -->

            <!-- Hero Area -->
            <div class="position-relative z-index-1  mt-25 mt-md-15 mt-lg-0 mt-xl-22"></div>
        </div>
    </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <!-- footer area function -->
    <footer class="footer bg-ebony-clay dark-mode-texts">
        <div class="container  pt-12 pt-lg-19 pb-10 pb-lg-19">
            <div class="row">
                <h1>OST Company</h1>
            </div>
        </div>
    </footer>
    <!-- footer area function end -->
    </div>
    </div>
    <!-- Vendor Scripts -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    `
    <!-- Plugin's Scripts -->
    <script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('plugins/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('plugins/aos/aos.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('plugins/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('plugins/ui-range-slider/jquery-ui.js') }}"></script>
    <!-- Activation Script -->
    <script src="{{ asset('js/drag-n-drop.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
