<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>@yield('meta_title', 'Blueberry Chauffeur')</title>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MLJBXJ7Z');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('template Resourses/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://kit.fontawesome.com/79ea3f62f0.js" crossorigin="anonymous" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <!-- Owl Carousel -->
    <link href="{{ asset('template Resourses/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Custom Stylesheets -->
    <link href="{{ asset('template Resourses/css/style.css') }}" rel="stylesheet">
    <!-- Libraries Stylesheets -->
    <link href="{{ asset('template Resourses/lib/animate/animate.min.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/template Resourses/img/logo.png') }}">

    <!-- Meta Tags -->
    <meta charset="utf-8" />
    @yield('gsc')
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="google-site-verification" content="n0iUIUlNoEuYlBcewLmhKhlHxwKJqJFTMNyw5vSO1Iw" />
    <meta name="description" content="@yield('meta_desc', 'Experience the ultimate in comfort and style with our luxury chauffeur service in London.  Book your ride today and enjoy a comfortable journey.')">
    <meta name="title" content="@yield('meta_title', 'Luxury Chauffeur Service in London| Book Your Ride Today!')" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:locale" content="en_UK" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="blueberry chauffeur" />
    <meta name="robots" content="@yield('no_index', 'follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large')" />

    <style>
        html,
        body {
            width: 100%;
            overflow-x: none !important;
        }

        .btn {
            background-color: var(--yellow-color);
            color: black;
        }

        .btn:hover {

            color: var(--yellow-color);
            background-color: white;
            border: 2px solid black;
        }
    </style>
    @yield('coustomCss')

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLJBXJ7Z" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    {{-- <!-- End Google Tag Manager (noscript) -->
    {{-- spinner --}}
    {{-- <div id="spinner"
        class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex flex-column align-items-center justify-content-center"
        style="background-color: rgb(211, 213, 215);">
        <div class="spinner-border text-prmary" style="width: 10rem; height: 10rem; " role="status">

        </div>
        <div style="margin-top: -130px;">
            <img align="center" src="{{ asset('template Resourses/img/000.png') }}" width="150px" height="150px"
                style=" display: inline-block; z-index: 1000;" alt="blueberry-chauffeur">

        </div>

    </div> --}}
    {{-- end spinner  --}}
    <style>
        nav>a img{
            margin-top:11px;
             margin-left: 40px;
            width:10rem;
        }
        @media screen and (max-width: 767px) {
            nav>a img{

                margin-left: 0px;
                width:16rem;
                height: 3rem;
            }
        }

    </style>

    {{-- Nav Bar --}}

    <nav class="navbar navbar-expand-lg row mt-0 mx-auto px-4 px-lg-5 navbar-light shadow sticky-top p-0"
        style="background-color:#201e1e;">
        <div class="row col-md-3 col-10 ">
            <a href="{{ route('theme.index') }}" class=" col-md-8 col-3 navbar-brand m-0 d-flex align-items-center col-3">
                <img src="{{ asset('template Resourses/img/Final logo.png') }}" alt="blueberry-chauffeur" >
                {{-- <h5 class="  d-md-block" style="color: var(--yellow-color)  ; font-size:1.3em;">
                </h5> --}}
            </a>
            <a class="col-6 fw-bold navnumber d-md-none pl-4" href="Tel:+442035041721">+442035041721</a>
        </div>
        <button type="button" class="navbar-toggler col-2 border-0" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white fw-bold"></span>
        </button>
        <div class="collapse navbar-collapse col-7" id="navbarCollapse" style="margin-right:-1em;">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('theme.index') }}"
                    class="nav-item nav-link {{ Request::route()->getName() == 'theme.index' ? 'active' : '' }}">Home</a>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('theme.airport') }}">Airport Transfer</a></li>
                        <li><a class="dropdown-item" href="{{ route('theme.wedding') }}">Wedding</a></li>
                        <li><a class="dropdown-item" href="{{ route('theme.event') }}">Events</a></li>
                        <li><a class="dropdown-item" href="{{ route('theme.business') }}">Business</a></li>
                        <li><a class="dropdown-item" href="{{ route('theme.tours') }}">Tours</a></li>


                    </ul>
                </li>
                <a href="{{ route('theme.fleet') }}"
                    class="nav-item nav-link {{ Request::route()->getName() == 'theme.fleet' ? 'active' : '' }}  ">Our  Fleet</a>*-
                <a href="{{ route('theme.reservation') }}"
                    class="nav-item nav-link {{ Request::route()->getName() == 'theme.reservation' ? 'active' : '' }}  ">Reservation</a>
                <a href="{{ route('theme.allblogs') }}"
                    class="nav-item nav-link {{ Request::route()->getName() == 'theme.allblogs' ? 'active' : '' }} ">Blogs</a>
                <a href="{{ route('theme.content') }}"
                    class="nav-item nav-link {{ Request::route()->getName() == 'theme.content' ? 'active' : '' }}  ">Contact</a>
            </div>
            <a href="Tel:+442035041721"
                class="btn btn-primary py-4 px-lg-5 d-none d-lg-flex align-items-center rounded-0">+44
                2035041721
            </a>
        </div>
    </nav>
    {{-- End navbar --}}

    <div class="whatsapp-icon">
        <a href="Tel:+442035041721">
            <i class="fa-solid fa-square-phone"></i>
        </a>
    </div>
    @yield('content')




    <div class="container-fluid  text-light footer pt-2 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row ">
                <div class="col-lg-4 col-md-6 d-grid">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="text-white" href="{{ route('theme.index') }}">Home</a>
                    <a class="text-white" href="{{ route('theme.about') }}">About</a>
                    <a class="text-white" href="{{ route('theme.content') }}">Contact</a>
                    <a class="text-white" href="{{ route('theme.allblogs') }}">Blogs</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="{{ route('theme.airport') }}">Airport Transfer</a>
                    <a class="btn btn-link" href="{{ route('theme.wedding') }}">Wedding car hire</a>
                    <a class="btn btn-link" href="{{ route('theme.event') }}">Event car hire</a>
                    <a class="btn btn-link" href="{{ route('theme.business') }}">Business car hire</a>
                    <a class="btn btn-link" href="{{ route('theme.tours') }}">Tours</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2 text-light"><i class="fa fa-map-marker-alt me-3"></i>10-16 tiller road, canary
                        wharf, E14
                        8PX</p>
                    <p class="mb-2 text-light"><i class="fa fa-phone-alt me-3"></i>+442035041721</p>
                    <p class="mb-2 text-light"><i class="fa fa-envelope me-3"></i>info@blueberrychauffeur.co.uk
                    </p>
                    <div class="d-flex pt-2">
                        {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a> --}}
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.facebook.com/blueberrychauffeur"><i class="fab fa-facebook-f"></i></a>
                        {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a> --}}
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.instagram.com/blueberrychauffeur/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>


            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{ route('theme.index') }}">BlueBerry Chauffeur</a>,
                        All Right
                        Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a" href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script>
        AIDBASE_CHATBOT_ID = 'bW4_O7-xPa_81pLfhGZJU';
    </script>
    <script async type="text/javascript" src="https://client.aidbase.ai/chat-widget.ab.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <!-- Add this script to include Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <!-- Slick Carousel -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/79ea3f62f0.js" crossorigin="anonymous"></script>

    <!-- Other Libraries -->
    <script src="{{ asset('template Resourses/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template Resourses/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template Resourses/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template Resourses/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template Resourses/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template Resourses/lib/tempusdominus/js/moment.min.js') }}"></script>
    {{-- <script src="{{ asset('template Resourses/lib/tempusdominus/js/moment-timezone.min.js') }}"></script> --}}
    <script src="{{ asset('template Resourses/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('template Resourses/js/main.js') }}"></script>
    <script src="{{ asset('template Resourses/script.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_JzsVJLHmCmB_Epl9jrChat_R-TYM6v4&libraries=places&language=en-gb">
    </script>

    <script>
        function initializeAutocomplete(inputId, latId, longId, bounds, componentRestrictions) {
            var input = document.getElementById(inputId);
            var options = {
                bounds: bounds,
                componentRestrictions: componentRestrictions
            };
            var autocomplete = new google.maps.places.Autocomplete(input, options);

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                $('#' + latId).val(place.geometry['location'].lat());
                $('#' + longId).val(place.geometry['location'].lng());
            });
        }

        google.maps.event.addDomListener(window, 'load', function() {
            // Define bounds for London
            var londonBounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(51.2867602, -0.5103751),
                new google.maps.LatLng(51.6918741, 0.3340155)
            );

            var componentRestrictions = {
                country: 'uk'
            };

            initializeAutocomplete('source', 'lat1', 'long1', londonBounds, componentRestrictions);
            initializeAutocomplete('dest', 'lat2', 'long2', londonBounds, componentRestrictions);

            // Initialize Autocomplete for mobile form, but hide it immediately
            initializeAutocomplete('source2', 'lat3', 'long3', londonBounds, componentRestrictions);
            $("#formfour").hide();
        });

        $(document).ready(function() {
            // Initialize Bootstrap components
            // new bootstrap.Offcanvas(document.getElementById('navbarCollapse'));
            // $('.dropdown-toggle').dropdown();

            // Add more initializations if needed
            $('.dropdown-toggle').dropdown();
            // Your existing code...
            $("#formTwo").hide();
            $("#btn1").click(function() {
                $("#formOne").show();
                $("#formTwo").hide();
            });

            $("#btn2").click(function() {
                $("#formOne").hide();
                $("#formTwo").show();
                $("#formfour").hide();
            });

            $("#btn4").click(function() {
                $("#formfour").show();
                initializeAutocomplete('source2', 'lat3', 'long3', londonBounds, componentRestrictions);
            });
        });

    </script>


    @yield('coustomJs')
</body>

</html>
