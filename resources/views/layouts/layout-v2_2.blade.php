<!DOCTYPE html>
<?php
$baseurl = 'https://omsetku-dev.globaldeva.com/';
?>
<html lang="en">

<head>

    <title>SmkCoding whatever</title>

    <meta charset="utf-8">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('asset/logo.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/dm-sans" rel="stylesheet">
                
    <!-- font nunito -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="{{ $baseurl }}public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/assets/css/main_layout.css?v=1.78" rel="stylesheet">


    @yield('css-before')

    <style>
        div,

        h1,

        h2,

        h3,

        h4,

        h5,

        h6,
        strong {

            font-family: 'Roboto', sans-serif !important;

        }

        p, b,
        a {
            font-family: 'DM Sans', sans-serif !important;
        }
        body {
            background: #F9F9FB;
        }
    </style>
    @yield('css-after')
</head>

<body>
    <!-- ======= Header ======= -->
        <div class="container">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="index.html">Logo</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto mr-md-3">
                            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Accessories</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Shop</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Products</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                            <li class="dropdown nav-item d-md-flex align-items-center">
                                <a href="#"
                                    class="dropdown-toggle nav-link d-flex align-items-center justify-content-center icon-cart p-0"
                                    id="dropdown04" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-shopping-cart"></i>
                                    <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown04">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Separated link</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">One more separated link</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    <main id="main">

        @yield('konten')
    </main>
    @yield('script-before')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src=" {{ $baseurl }}public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ $baseurl }}public/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ $baseurl }}public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ $baseurl }}public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ $baseurl }}public/assets/vendor/aos/aos.js"></script>
    <script src="{{ $baseurl }}public/assets/vendor/php-email-form/validate.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="{{ $baseurl }}public/assets/js/main.js"></script>

    @yield('script-after')
</body>

</html>
