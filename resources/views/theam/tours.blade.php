@extends('layouts.app')

@section('meta_title', ' hire a personal chauffeur | Book your london chauffeur service now ')
@section('meta_desc',
    'Hire a personal chauffeur and chauffeur service London. Professional drivers, premium vehicles, and seamless travel experience.!')

@section('coustomCss')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection



@section('content')
    <div class="image-container overflow-hidden services">
        <img class="responsive-image" src="{{ asset('template Resourses/assets/tours/1.webp') }}" alt="Tour services">
        <div class="text-overlay mt-sm-0">
            <h1 class="text-white  mt-sm-0"
                style="font-size: 2em; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
                Explore the Magic of Private London Tour

            </h1>
            <button type="button" class="btn btn-primary" style="margin-top: 10px;">
                <a href="{{ route('theme.reservation') }}"
                   >
                    Book Now &#8594;
                </a>
            </button>
        </div>
    </div>





    <div class="container mt-5 overflow-hidden">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <h2>Tour chauffeur service
                </h2>
                <p>
Toss out the transportation tension while on any tour in the UK or London? Think of your London tour with the best personal chauffeur hire service and move all over London. Be relaxed and have no transportation stress while waiting to move to your desired places. London is a dynamic city with a history of culture, iconic landmarks, and tourist points. But helping the buzzing streets of London and public transport while tourism can be crushing. Hire a personal chauffeur while exploring London for your expedite, and move around with carefree traveling tension.

                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('template Resourses/assets/tours/2.webp') }}"
                    alt="Unlocks London’s Beauty with a Private London Tour" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container mt-5 overflow-hidden">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('template Resourses/assets/tours/3.webp') }}"
                    alt="Reveal the Secrets with a Trusted guide ">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3>Personal chauffeur on your service
                </h3>
                <p>
Hire a personal chauffeur for a London tour and explore the world's best opportunities to visit the best tour sites, nightclubs, food, and drink places. Your personal chauffeur will take you to hidden gem places in the business hire cars according to your taste, which is better than wandering in London.
 </p>
            </div>

        </div>
    </div>

    <!-- new section add start -->
      <!--  -->
    <div class="container overflow-hidden my-md-5">
    <div class="row about-section">
        <div class="col-lg-6 col-sm-12 mb-5 mb-lg-0 content-column">
            <!-- <h3 class="mt-4">Hire a personal chauffeur with Blueberry:</h3>
            <p>
There are a few benefits to our Blueberry Tour chauffeur service for your London private tours.
</p> -->
            <ol class="alternating-colors text">

                    <h4>Make your tour customized</h4>
                    <p>

Let our blueberry chauffeur company's expert assist you on your private tour of London, UK. You just mention the key things to your personal chauffeurs, and the next exploring hectic part is there to make your private London tour the best one and unforgettable.
                    </p>

                    <h4>Unrivalled comfort</h4>
                    <p >

Our Blueberry chauffeur company provides you a business-class vehicle to move in throughout your tour. It will be your choice of vehicle according to your needs. Let us know your demand for the tour, what type of things you want to see in London, and at what time phase you wish to travel; your travel personal chauffeur will be at your doorstep to take you and give you the best tour in London.
                    </p>

                    <h4> Knowledgeable personal chauffeur</h4>
                    <p>

Our Blueberry personal chauffeur for your private London tour will always have the best knowledge of all the best and deepest hidden beautiful places in London. Your chauffeur is more than a driver; it will also be your best travel expert. Just get ready, sit in the car, and let your personal chauffeur make your tour the best of your life.
                    </p>

            </ol>
        </div>
        <div class="image-column mt-5 mt-lg-0 col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
                <figure class="image-1">
                    <a class="lightbox-image" data-fancybox="images">
                        <img src="{{ asset('template Resourses/assets/tours/Img5.webp') }}" class="img-fluid" alt="Gatwick Airport Transfer">
                    </a>
                </figure>
            </div>
        </div>
    </div>
</div>

    <!--  -->

    <div class="container mt-5 overflow-hidden my-md-5">
    <div class="row about-section">
        <div class="image-column col-lg-6 mb-3 col-md-12 col-sm-12">
            <div class="inner-column">
                <figure class="image-1">
                    <a class="lightbox-image" data-fancybox="images">
                        <img src="{{ asset('template Resourses/assets/tours/img3.webp') }}" class="img-fluid" alt="Virtuously wayfinding private tour London UK">
                    </a>
                </figure>
            </div>
        </div>
         <div class="col-lg-6 col-sm-12 mb-5 mb-lg-0 content-column">
            <!-- <h3 class="mt-4">List of services in London airport transfer service:</h3> -->
            <ol class="alternating-colors text pt-5 pt-md-1">
                     <h4>Virtuously wayfinding private tour London UK</h4>
                    <p >



Never worry about being stuck on tremendous traffic routes because our Blueberry personal chauffeur always makes a clear map-out plan for the road before moving to somewhere in London/UK.
You just focus on enjoying the tour and remembering the best sights in London. So there will be no chance of missing marvelous London views in your private London tour.

                    <h4>Business car hire demand</h4>
                    <p >
Even on your private tour, we are here for you if you need business care for meetings or colleague get-togethers.
Our Blueberry chauffeur company also provides many other services, but for your comfort and dem, we will be available 24/7.

                    </p>
                    <h4>Reliability and punctuality of personal chauffeur</h4>
                    <p>
Our Blueberry chauffeurs are always punctual and professional to you and will be your best fun partner on your London tour. From opening the car door to taking care of your luggage, our best personal chauffeurs will provide personalized service to you on tour.
</p>
            </ol>
        </div>
    </div>


    </div>

     <!-- new section end  -->
    <!-- Swiper Container -->

    <div class="container overflow-hidden mt-5 overflow-hidden">
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
                        <img src="{{ asset('template Resourses/assets/cars/vclass.webp') }}" style="object-fit: contain"
                            class="card-img-top" alt="V Class">
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
    <section class="container_1 overflow-hidden">
        <section class="card__container">
            <div class="card__bx" style="--clr: #ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Book your personalized tour</h3>
                        <p>Book your private tour with us to achieve your travel goals. It will provide you with complete
                            guidance during the journey.</p>
                            <a href="{{ route('theme.reservation') }} " class="btn">Book Now</a>
                                            </div>
                </div>
            </div>
            <div class="card__bx" style="--clr: #ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>24/7 in service</h3>
                        <p>We prioritize your journey, and our driver is available 24/7 to serve you. You can book your ride
                            anytime, anywhere.</p>
                            <a href="{{ route('theme.reservation') }} " class="btn">Book Now</a>
                                            </div>
                </div>
            </div>
            <div class="card__bx" style="--clr: #ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Safety</h3>
                        <p>We provide highly trained professionals and well-maintained vehicles to ensure your and your
                            belongings' safety during your journey.
                        </p>
                        <a href="{{ route('theme.reservation') }} " class="btn">Book Now</a>
                                        </div>
                </div>
            </div>

        </section>
    </section>

    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12">
            <h2 style="margin-top:60px;">Why Choose Our Blueberry chauffeur company</h2>
            Never settle for ordinary transport while touring the best places in the world, like London. Our Blueberry chauffeur company will make the best effort on your tour with our personal chauffeur tour service. Visit our Blueberry chauffeur website or call us for more details. Give us your location and top tour notes so that we can make it best for you.

            </div>
        </div>
    </div>
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
