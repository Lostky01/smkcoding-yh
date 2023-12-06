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
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="{{ asset('stylefooter.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/dm-sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
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
                <div class="menu-bar">
                    <img src="{{ asset('assets/logo-ligasmk-dark.png') }}">
                    <ul>
                      <li>
                      <div class="logo">
                          <a href="#">Home <i class="fas fa-angle-down"></i></i></i></a>
                      </div>
                          <div class="dropdown-menu">
                              <ul>
                                <li><a href="#">lorem ipsum</a></li>
                                <li><a href="#">lorem ipsum</a></li>
                                <li><a href="#">lorem ipsum</a></li>
                              </ul>
                            </div>
                      </li>
                      <li><a href="#">About Us <i class="fas fa-angle-down"></i></i></i></a>
                          <div class="dropdown-menu">
                              <ul>
                                <li><a href="#">lorem ipsum</a></li>
                                <li><a href="#">lorem ipsum</a></li>
                                <li><a href="#">lorem ipsum</a></li>
                              </ul>
                            </div>
                      </li>
                      <li><a href="#">Kelas <i class="fas fa-angle-down"></i></i></i></a>
                          <div class="dropdown-menu">
                              <ul>
                                <li><a href="#">lorem ipsum</a></li>
                                <li><a href="#">lorem ipsum</a></li>
                                <li><a href="#">lorem ipsum</a></li>
                              </ul>
                            </div>
                      </li>
                      <li><a href="#">Blog <i class="fas fa-angle-down"></i></i></i></a>
                          <div class="dropdown-menu">
                              <ul>
                                <li><a href="#">lorem ipsum</a></li>
                                <li><a href="#">lorem ipsum</a></li>
                                <li><a href="#">lorem ipsum</a></li>
                              </ul>
                            </div>
                      </li>
                      <li><a href="#">Kontak</a></li>
                    </ul>
                  </div>
            </nav>
        </div>
    <main id="main">

        @yield('konten')
    </main>

    <footer>
        <div class="container">
            <div class="sec logo">
                <img src="{{ asset('assets/logo-ligasmk-white.png') }}">
                <p style="color:#ffffff;font-size:30px;font-weight:bold">Mengubah kehidupan,bisnis <br> dan bangsa <br> melalui transformasi talenta <br> di bidang teknologi digital</p>
                <ul class="sci">
                    <li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#707070" d="M279.1 288l14.2-92.7h-88.9v-60.1c0-25.4 12.4-50.1 52.2-50.1h40.4V6.3S260.4 0 225.4 0c-73.2 0-121.1 44.4-121.1 124.7v70.6H22.9V288h81.4v224h100.2V288z"/></svg></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#707070" d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#707070" d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#707070" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg></li>
                </ul>
            </div>
            <div class="sec rsc">
                <h2>Resources</h2>
                <ul>
                    <li><a href="#">Build Career</a></li>
                    <li><a href="#">Explore Subjects</a></li>
                    <li><a href="#">Gain a Skill</a></li>
                </ul>
            </div>
            <div class="sec rsc">
                <h2>Support</h2>
                <ul>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Data Science</a></li>
                    <li><a href="#">Machine Learning</a></li>
                    <li><a href="#">Developer Tools</a></li>
                    <li><a href="#">Web Design</a></li>
                </ul>
            </div>
            <div class="sec rsc">
                <h2>Download Now</h2>
                <div class="button-container">
                    <img src="{{ asset('assets/logo-appstore.png') }}" alt="App Store Logo">                                    
                </div>   
                <div class="button-container">
                    <img src="{{ asset('assets/logo-googleplay.png') }}" alt="Google Play Logo">                                      
                </div>
            </div>
        </div>
    </footer>
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
