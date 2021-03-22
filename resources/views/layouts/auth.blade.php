<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Sign In</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href='{{ asset('cursus/vendor/unicons-2.0.1/css/unicons.css') }}' rel='stylesheet'>
    <link href="{{ asset('cursus/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cursus/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('cursus/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('cursus/css/night-mode.css') }}" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('cursus/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cursus/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('cursus/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cursus/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('cursus/vendor/semantic/semantic.min.css') }}">

</head>

<body>
    <!-- Signup Start -->
    <div class="sign_in_up_bg">
        <div class="container">
            <div class="row justify-content-lg-center justify-content-md-center">
                <div class="col-lg-12">
                    <div class="main_logo25" id="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('cursus/images/logo.svg') }}" alt=""></a>
                        <a href="{{ route('home') }}"><img class="logo-inverse" src="{{ asset('cursus/images/ct_logo.svg') }}" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-8">

                    @yield('content')

                    <div class="sign_footer"><img src="images/sign_logo.png" alt="">© 2020 <strong>Cursus</strong>. All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Signup End -->

    <script src="{{ asset('cursus/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('cursus/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cursus/vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('cursus/vendor/semantic/semantic.min.js') }}"></script>
    <script src="{{ asset('cursus/js/custom.js') }}"></script>
    <script src="{{ asset('cursus/js/night-mode.js') }}"></script>

</body>
</html>

