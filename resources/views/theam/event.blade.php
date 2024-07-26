@extends('layouts.app')

@section('meta_title', ' Luxury Event Transportation in London | Blueberry Chauffeur!')
@section('meta_desc',
    'Arrive in style with Blueberry Chauffeurs luxury event transportation in London. Professional luxury chauffeur service London and punctual service. Book your ride today!')

@section('coustomCss')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .image-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            overflow: hidden;
        }

        .slider_1 {
            display: flex;
            justify-content: space-between;
        }

        @media (max-width: 320px) {
            .text-overlay a {
                display: none;
            }
        }
    </style>
@endsection


@section('content')


    <div class="image-container overflow-hidden">
        <img src="{{ asset('template Resourses/assets/events/1.webp') }}" alt="event services" class="responsive-image">
        <div class="text-overlay">
            <h1 class="mb-4 pb-3 animated slideInDown text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0,0.7)">Your
                Signature Event Chauffeur</h1>
            <a href="{{ route('theme.reservation') }}"
                class="btn header-buttn py-2 px-3 py-lg-2 px-lg-5 animated slideInDown">Book Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </div>



    <div class="container overflow-hidden mt-5">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <h3>Event Chauffeur Service</h3>
                <p>Do you want to attend a corporate event, a personal event in London, or a wedding? We offer our event chauffeur service for sports events, night outs, or concert plans. As we all know, London has become the heart of event holders places. Suppose you want to go or are arranging or willing to plan a high-five event, from corporate to the grand opening event, any personal meeting, official conferences, or personal London tours. In that case, we are here with you, so relax and take the help of our event chauffeur service. If you want to look for a car service for an event near me, we will be available 24/7.

                </p>
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden">
                <img src="{{ asset('template Resourses/assets/events/2.webp') }}"
                    alt="Ride like a Royal with Event Chauffeur Service in London" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container mt-5 fadeInLeft overflow-hidden">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('template Resourses/assets/events/4.webp') }}"
                    alt="Elevate the elegance of your luxury events" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3>Stress less travel with event chauffeur service </h3>
                <p>Arriving on time will leave the best impression on event-holders. Transportation is the main thing to manage when attending any event. Arriving on time is necessary to enjoy all the beauty of any event. Our event drivers always care for punctuality and information about the traffic. So, with our event chauffeur service, sit and relax in the car's back seat and arrive at the event on time, too.

                </p>
            </div>

        </div>

        

      
    <div class="row about-section">
        <div class="col-lg-6 col-sm-12 mb-5 mb-lg-0 content-column">
            <h3 class="mt-4">Event chauffeur service in London</h3>
            <p>Our Blueberry chauffeur company offers an event chauffeur service to address all your needs regarding your event travel.</p>
            <ol class="alternating-colors text">
            
                    <h4> Professional chauffeur service</h4>
                    <p >
                   
                    We provide Professional chauffeurs for the event chauffeur service in every corner of London. We have tested all our chauffeurs' driving and route information about London. Our Professional chauffeurs know all about London and its districts, iconic landmarks, tourist attraction points, hotels, nightclubs, restaurants, theatres, and event venues.                     </p>
               
                    <h4> Chauffeur pick-up and wait time</h4>
                    <p >
                   
                    Whenever you want to go an event near me to our company, our best chauffeur will accompany you. Pick-up and drop times will be decided by you, but as you give us details about your event arrival or airport arrival and event time. If you are coming from outside London, then our chauffeur will be standing in the arrival waiting area with your name so you can reach your destination calmly. 
                    </p>
               
                  
            </ol>
        </div>
        <div class="image-column mt-5 mt-lg-0 col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
                <figure class="image-1">
                    <a class="lightbox-image" data-fancybox="images">
                        <img src="{{ asset('template Resourses/assets/events/3.webp') }}" class="img-fluid" alt="Gatwick Airport Transfer">
                    </a>
                </figure>
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
                        <img src="{{ asset('template Resourses/assets/events/Img4.webp') }}" class="img-fluid" alt="Heathrow Airport Transfer">
                    </a>
                </figure>
            </div>
        </div>

         <div class="col-lg-6 col-sm-12 mb-5 mb-lg-0 content-column">
            <!-- <h3 class="mt-4">List of services in London airport transfer service:</h3> -->
            <ol class="alternating-colors text">
                     <h4>  No compromise on punctuality</h4>
                    <p >
                    
                   Our Blueberry chauffeurs company has no compromise on chauffeur's punctuality. So, never feel tension about late arrival at any event or any time of the day.
               
                    <h4>Your ride your car</h4>
                    <p >
                   If you ever use our chauffeur service in London, you will learn about the benefits of event transportation from our Blueberry Chauffeurs company. Whatever the 
                   event or wherever you want, you can choose the pick-up vehicle that suits you or your budget. We have the best-maintained Mercedes classes for our customers.

                    </p>
            </ol>
        </div>
    </div>
    
    </div>

    
   
    </div>
   



    <!-- Swiper Container -->
    <div class="container overflow-hidden mt-5 ">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Repeat each card inside a swiper-slide -->
                <div class="swiper-slide">
                    <div class="card card-cars">
                        <img src="{{ asset('template Resourses/assets/cars/sclass.webp') }}" class="card-img-top"
                            alt="s Class">
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
                                            <td>£ 180</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Gatwick to Central London</td>
                                            <td>£ 250</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">London City to Central London</td>
                                            <td>£ 175</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Stansted to Central London</td>
                                            <td>£ 275</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Luton to Central London</td>
                                            <td>£ 255</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Farnborough to Central London</td>
                                            <td>£ 275</td>
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
                                            <td>£ 180</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Gatwick to Central London</td>
                                            <td>£ 250</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">London City to Central London</td>
                                            <td>£ 175</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Stansted to Central London</td>
                                            <td>£ 275</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Luton to Central London</td>
                                            <td>£ 255</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Farnborough to Central London</td>
                                            <td>£ 275</td>
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
            <div class="card__bx" style="--clr: var(--yellow-color) ">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Affordable rides</h3>
                        <p>We provide budget-friendly rides that reduce the stress of travel. They get you to your
                            destination on time, saving you from heavy traffic and high riding costs.
                        </p>
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
                        <h3>Luxuries service</h3>
                        <p>We offer luxurious services that make your journey easy. Our professional drivers are highly
                            trained in driving and know all about the route to ensure you reach your destination.
                        </p>
                        <a href="{{ route('theme.reservation') }} " class="btn">Book Now</a>         
                               </div>
                </div>
            </div>
            <div class="card__bx" style="--clr:#ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>VIP Transportation</h3>
                        <p>We set high standards for your ride, which gives you VIP protocol. By personalising your ride, we
                            offer private, luxury, and high-end beauty rides to enhance your impact on others.
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
                <h3>Your call our duty</h3>
                <p class="text-center">
Refrain from letting transportation eat your energy for going to an event or wasting your preparation for any event. Book chauffeur service in London with our Blueberry chauffeurs company, and get ready to enjoy the moment of your event. Visit our website and get information about taking event chauffeur service from our Blueberry chauffeurs company. Our Blueberry chauffeurs company will be the best on your have in London Uk. 

    </p>
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
