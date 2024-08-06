@extends('layouts.app')

@section('meta_title', 'Business car hire in London, UK | Blueberry Chauffeur!')
@section('meta_desc',
    'Reliable and professional business chauffeur car hire in London. Available luxury vehicles and experienced drivers for Comfortable travel. Book now!!')

@section('coustomCss')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        h2{
                color: #000000 !important;
                font-size: 30px !important;
                font-weight: 800 !important;
                line-height: 34px !important;
                margin-bottom: 20px !important;
            }
    </style>
    @endsection


@section('content')
    <div class="image-container overflow-hidden">
        <img class="responsive-image" src="{{ asset('template Resourses/assets/business/1.webp') }}" alt="business services"
            class="img-fluid">
        <div class="text-overlay" style=" text-align: center; display: flex; flex-direction: column; align-items: center;">

            <h1 class="text-white" style="font-size: 2em; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
                Executive business chauffeur service</h1>

            <button type="button" class="btn btn-primary" style="margin-top: 20px;">
                <a href="{{ route('theme.reservation') }}">
                    Book Now &#8594;
                </a>
            </button>

        </div>
    </div>


    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12">
                <h2 class="pt-4">Business chauffeur service  </h2>
                <p>
Need to be on time for business meetings or business events? Here is our blueberry chauffeur company for you to help with business, corporate type, and travel transportation. Picture yourself arriving at business seminars and conferences on time and enjoying all the time. Arriving at business meetings on time creates the best impression of your seriousness in business.


                </p>
            </div>
            <div class="col-12">
                <h2>Stress-free travel with business cars serivce </h2>
                <p>
Our Blueberry chauffeur company is available 24/7, so leave the travel tension on us. Our company provides the best business chauffeur service to clients throughout London. We also offer business car hire and flawless business services to build an impressive image when you reach the office or at any meeting. Our company chauffeur will arrive 30 minutes before your pick-up point, so you do not have to worry.
 </p>
            </div>
        </div>
    </div>

    <div class="container overflow-hidden my-md-5">
    <div class="row about-section">
        <div class="col-lg-6 col-sm-12 mb-5 mb-lg-0 content-column">
            <h2>Things to know about us
    </h2>
    <p>Our Blueberry chauffeur company understand the importance of the timely arrival of your meeting. Our company cares about all the little details of your business ride.
    </p>

            <ol class="alternating-colors text">

                    <h4>Premium business chauffeurs london</h4>
                    <p>
Our Blueberry chauffeur company offers the best business cars and well-trained and subtle professional chauffeurs. They are all insured and well-qualified test-passed persons, so there is no need to worry about any disturbance or bad behavior. Our chauffeurs will drive you efficaciously and with extreme care. Our business chauffeurs in London will always stick to the decided route and never take shortcuts to make you uncomfortable. Your chauffeurs will always be in your comfort zone and will be your butler on wheels. Our business car hire chauffeur is well-known for the road and corner of London and its districts. Our business chauffeurs are punctual and always make you work on time.
                    </p>



                    <!-- <h4>Variety of vehicles</h4>
                    <p class="text-size">
                        As an airport transfer London company, we offer various cars. You can choose a vehicle according to your affordable budget.
                    </p>
               -->
            </ol>
        </div>
        <div class="image-column mt-5 mt-lg-0 col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
                <figure class="image-1">
                    <a class="lightbox-image" data-fancybox="images">
                        <img src="{{ asset('template Resourses/assets/business/2.webp') }}" class="img-fluid" alt="Gatwick Airport Transfer">
                    </a>
                </figure>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="container overflow-hidden">
        <div class="row about-section pb-0 pb-md-6 mb-0">
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <figure class="image-1"><a class="lightbox-image" data-fancybox="images"><img
                                src="{{ asset('template Resourses/assets/business/4.webp') }}" class="img-fluid"
                                alt="Compatible vehicle"></a></figure>

                </div>
            </div>
            <div class="col-lg-6 content-column mb-0">
                <h3 >Ride with business car hire</h3>
                <p class="text">
Our business car hire service gives you a comfortable drive and plenty of time to relax or work until you arrive at your meeting or office. Our Blueberry chauffeur company proposes a fully competitive cost for your ride. All our vehicles are well-preserved, so do not stress about any car damage or fault on your way to business meetings, conferences, or events. If you want to attend any business event or planning, then you can also call us for event chauffeur service for your workers, clients, and guests.
</p>

<h4>Business car hire in the UK</h4>
                    <p>

Our business chauffeur service lets you use your ride's time productively and effectively. We will give you access to Wi-Fi so you can travel and have a meeting while you attend any event or other meeting. Our business chauffeur service saves time on the busy roads of London and makes you work more than usual.
                    </p>
            </div>

        </div>

        <div class="row about-section pt-0 pt-lg-5">

            <div class="col-lg-6 col-sm-12 content-column">
                <h2>Over and Above London </h2>
                <p class="text">
We can tell you if you even want to go on a private london tour beyond London. Our private chauffeur service for private london tour will take you anywhere and safely. Make things clear and decide everything with us, and we will make your trip the best.

                </p>

            </div>
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <figure class="image-1"><a class="lightbox-image" data-fancybox="images"><img
                                src="{{ asset('template Resourses/assets/business/3.webp') }}" class="img-fluid"
                                alt="Best business chauffeur in London"></a></figure>

                </div>
            </div>
        </div>

    </div>



    <!-- Swiper Container -->
    <div class="container overflow-hidden mt-5">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Repeat each card inside a swiper-slide -->
                <div class="swiper-slide">
                    <div class="card card-cars">
                        <img src="{{ asset('template Resourses/assets/cars/sclass.webp') }}" class="card-img-top"
                            alt="S Class">
                        <div class="card-body text-center">
                            <h5 class="card-title text-start">MERCEDES S-CLASS</h5>
                            <div class="pricing-table">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-start">Heathrow to Central London</td>
                                            <td>£180</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Gatwick to Central London</td>
                                            <td>£250</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">London City to Central London</td>
                                            <td>£175</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Stansted to Central London</td>
                                            <td>£275</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Luton to Central London</td>
                                            <td>£255</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Farnborough to Central London</td>
                                            <td>£275</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">
                                                <h6>Prices subject to VAT</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('theme.reservation') }}" class="btn btn-primary d-grid rounded-pill mt-3">Book
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-cars">
                        <img src="{{ asset('template Resourses/assets/cars/eclass.webp') }}" class="card-img-top"
                            alt="E Class">
                        <div class="card-body text-center">
                            <h5 class="card-title text-start">MERCEDES E-CLASS</h5>
                            <div class="pricing-table">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-start">Heathrow to Central London</td>
                                            <td>£180</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Gatwick to Central London</td>
                                            <td>£250</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">London City to Central London</td>
                                            <td>£175</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Stansted to Central London</td>
                                            <td>£275</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Luton to Central London</td>
                                            <td>£255</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Farnborough to Central London</td>
                                            <td>£275</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">
                                                <h6>Prices subject to VAT</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('theme.reservation') }}" class="btn btn-primary d-grid rounded-pill mt-3">Book
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-cars">
                        <img src="{{ asset('template Resourses/assets/cars/vclass.webp') }}" class="card-img-top"
                            style="object-fit: contain" alt="V Class">
                        <div class="card-body text-center">
                            <h5 class="card-title text-start">MERCEDES V-CLASS & EQV</h5>
                            <div class="pricing-table">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-start">Heathrow to Central London</td>
                                            <td>£180</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Gatwick to Central London</td>
                                            <td>£250</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">London City to Central London</td>
                                            <td>£175</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Stansted to Central London</td>
                                            <td>£275</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Luton to Central London</td>
                                            <td>£255</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Farnborough to Central London</td>
                                            <td>£275</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">
                                                <h6>Prices subject to VAT</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('theme.reservation') }}" class="btn btn-primary d-grid rounded-pill mt-3">Book
                                Now</a>
                        </div>
                    </div>

                </div>

                <!-- Repeat for other cards -->
            </div>
            <!-- Add Pagination -->

        </div>
    </div>

    {{-- service card --}}

    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-lg-12 text-center pt-4">
                <h2>Why choose blueberry chauffeur?</h2>
            </div>
        </div>
    </div>
    <section class="container_1 overflow-hidden">
        <section class="card__container">
            <div class="card__bx" style="--clr: var(--yellow-color) ">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Comfort travel</h3>
                        <p>We provide a comfortable journey in a neat and clean vehicle with reliable partners</p>
                        <a href="{{ route('theme.reservation') }} " class="btn">Book Now</a>
                                        </div>
                </div>
            </div>
            <div class="card__bx" style="--clr: var(--yellow-color) ">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Relaxing environment</h3>
                        <p>Our priority is to provide our customers with a relaxing environment so they may be free from
                            driving tension and can focus on their work easily.</p>
                            <a href="{{ route('theme.reservation') }} " class="btn">Book Now</a>
                                            </div>
                </div>
            </div>
            <div class="card__bx" style="--clr: var(--yellow-color) ">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3 style="white-space: nowrap;">Regular customer support</h3>
                        <p> if your vehicle has some problem, we will provide you with an alternate vehicle soon so you
                            won’t be late for your meeting.</p>
                            <a href="{{ route('theme.reservation') }} " class="btn">Book Now</a>
                                            </div>
                </div>
            </div>
            <h6>
Save your precious time; call us or schedule a ride for your business, corporate, or travel transportation. Visit our Blueberry chauffeur company website and get all the information. Give us all the information about your time, date, and destination. Let us take you to your destination, and you can relax or work in the back without any traveling tension.
</h6>

        </section>
    </section>
@endsection


@section('coustomJs')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
            },
        });
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
    </script>
@endsection
