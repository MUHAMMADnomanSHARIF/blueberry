@extends('layouts.app')

@section('meta_title', 'Airport transfers london | Reliable Private Car Service')
@section('meta_desc',
    'Book your private London airport transfer. 24/7 service, luxury vehicles, and professional drivers. Transfers to Heathrow, Gatwick, and more.')

@section('coustomCss')
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

    <div
        class="image-container"style="background-image: url('{{ asset('template Resourses/assets/airport/Banner Airport.webp') }}');height:100vh; background-repeat:no-repeat;width:100%;object-fit:cover">
        {{-- <img src="{{ asset('template Resourses/assets/airport/4.png') }}" alt="airport services" class="responsive-image"> --}}
        <div class="text-overlay">
            <h1 class="mb-4 pb-3 animated slideInDown text-white">Enjoy the Essence of Chauffeur Service London</h1>
            <a href="{{ route('theme.reservation') }}" class="btn header-buttn py-3 px-5 animated slideInDown">Book Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </div>






    <div class="container overflow-hidden">
        <div class="row mt-5">
            <div class="col-12">
                <div class="sec-title">

                    <h3>Troubleless Airport Transfers In London</h3>
                </div>
                <p>
                Ever envision yourself landing at London airport, carrying a heavy suitcase, and feeling entirely lost about your destination's arrival? No need to worry; likely, a person is already standing outside the airport and waiting for you to meet and greet. You must get in the car, move to your hotel carefreely, and arrive safely. No luggage carrying tensions, no stress navigating public transport, and free of depression, the ride is on stand for you by our airport transfer service in London. This will be an enjoyable trip to London with our airport transfer London service. A few of our airport cars will arrive to you for your journey, so be ready to have a fantastic ride.
Booking a ride with our airport transfer service means no more calling for a cab, searching for buses with jetlag, and wishing that someone would wait for you at the airport to receive you at London airport. Airport Transfer London offers our travellers an affordable, trustworthy, and suitable ride.

                </p>
            </div>
        </div>
    </div>


   <div class="container overflow-hidden my-md-5">
    <div class="row about-section">
        <div class="col-lg-6 col-sm-12 mb-5 mb-lg-0 content-column">
            <h3 class="mt-4">Consider Things on Airport Transfer in London</h3>
            <ol class="alternating-colors text">
            
                    <h4>Convenient arrival</h4>
                    <p class=>
                        Pre-reserved rides will ensure a worry-free arrival. Your driver will be waiting for you at the London airport and will provide a safe trip from the airport to your desired destination.
                    </p>
               
                    <h4>Known drivers</h4>
                    <p>
                        When you book a ride for an airport transfer in London, the details of your driver will be shared with you so that you will stay informed about your driver—details like name, picture and number, car plate number, etc.
                    </p>
               
                    <h4>Variety of vehicles</h4>
                    <p>
                        As an airport transfer London company, we offer various cars. You can choose a vehicle according to your affordable budget.
                    </p>
              
            </ol>
        </div>
        <div class="image-column mt-5 mt-lg-0 col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
                <figure class="image-1">
                    <a class="lightbox-image" data-fancybox="images">
                        <img src="{{ asset('template Resourses/assets/airport/1.webp') }}" class="img-fluid" alt="Gatwick Airport Transfer">
                    </a>
                </figure>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 overflow-hidden my-md-5">
    <div class="row about-section">
        <div class="image-column col-lg-6 mb-3 col-md-12 col-sm-12">
            <div class="inner-column">
                <figure class="image-1">
                    <a class="lightbox-image" data-fancybox="images">
                        <img src="{{ asset('template Resourses/assets/airport/2.webp') }}" class="img-fluid" alt="Heathrow Airport Transfer">
                    </a>
                </figure>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12 mb-5 mb-lg-0 content-column">
            <ol class="alternating-colors text">
                     <h4>Mentoring airport car ride and time</h4>
                    <p >
                    
                    Our airport Transfers London company provides stable Wi-Fi in every vehicle, and you can also mentor your ride and driver. So you will not stuck with any traffic and terror hassle.                    </p>
               
                    <h4> Greet and meet service

                    </h4>
                    <p >
                   
Your driver are punctual and will be waiting at the airport as your flight will land so that you donot have to wait. The driver will approach you as he get a first glance at you at the airport. 
                    </p>
               
                    <h4> Safe arrival with our Professional drivers</h4>
                    <p >
                   
Our airport's Transfer London company has well-mannered, well-trained, and professional drivers who will greet and take you to your destination on your service. The driver will not only pick you up from the airport and drop you off at your destination, but he will also care for your safety.
                    </p>

                   
            </ol>
        </div>

        
    </div>
    <div class="row about-section pt-0 pt-lg-5">

<div class="col-lg-6 col-sm-12 content-column">
    <h3>Exclusive Airport Transfer  </h3>
    <p class="text">The Airport Transfer London company provides many options within your budget, cars like Mercedes S- class, Mercedes E- class, Mercedes V- class & EQV. Whether you travel alone, need a cheap airport transfer to London with family, or desire a 
        <a href="{{ route('theme.index') }}"
                        style="text-decoration: none; color:#ecbd00 ;
    font-weight: 500;">luxurious chauffeur service</a> , you can trust us for your ride. As you book your airport transfer ride with us, we will set up your ride and always give you a traffic-free route so that you will arrive on time for your scheduled meetings, trips, weddings, or for whatever purpose you are in London.

    </p>

</div>
<div class="image-column col-lg-6 col-md-12 col-sm-12">
    <div class="inner-column">

        <figure class="image-1"><a class="lightbox-image" data-fancybox="images"><img
                    src="{{ asset('template Resourses/assets/airport/3.webp') }}" class="img-fluid"
                    alt="Best business chauffeur in London"></a></figure>

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
                            alt="V Class">
                        <div class="card-body text-center">
                            <h5 class="card-title text-start">MERCEDES S-CLASS</h5>
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
                            <a href="{{ route('theme.reservation') }}" class="btn btn-primary d-grid rounded-pill mt-3">Book Now</a>
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
                            <a href="{{ route('theme.reservation') }}" class="btn btn-primary d-grid rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-cars">
                        <img src="{{ asset('template Resourses/assets/cars/vclass.webp') }}" class="card-img-top"
                            style="object-fit: contain" alt="V & eqv Class">
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
                            <a href="{{ route('theme.reservation') }}" class="btn btn-primary d-grid rounded-pill mt-3">Book Now</a>
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
                        <h3>Reliability</h3>
                        <p>Our professional drivers are punctual and will be waiting for you upon arrival, ensuring that you
                            never have to wait.</p>
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
                        <h3>Comfort</h3>
                        <p>Travel in style with our fleet of modern, clean, and well-maintained vehicles.</p>
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
                        <h3>Safety</h3>
                        <p>Your safety is our priority. Our drivers are vetted, experienced, and trained to drive safely in
                            all conditions.</p>
                            <a href="{{ route('theme.reservation') }} " class="btn">Book Now</a>                    </div>
                </div>
            </div>
           
        </section>
    </section>
    <div class="container overflow-hidden">
        <div class="row mt-5">
            <div class="col-12">
                <div class="sec-title">

                    <h3>Why choose Blueberry Airport chauffeur service:</h3>
                </div>
                <p>
                Suppose you are passing from a busy street in London to the airport or from the airport to your destination and need more time to get a ride. Our airport transfer London service can help in this situation. Book a ride with us because your precious vacations, trips, or
                  <a href="{{ route('theme.business') }}"
                        style="text-decoration: none; color:#ecbd00 ;
    font-weight: 500;">business meeting</a> times are not to waste, so with us, travel easily with your choice of car and your desired place. Visit our website or call us for all the information you need to book a ride. Also, visit our extensive fleet of airport cars.
Are you looking for more than an airport transfer service? You are at the right place, we also offer cheap <a href="{{ route('theme.wedding') }}"
                        style="text-decoration: none; color:#ecbd00 ;
    font-weight: 500;">wedding car hire service</a> for your special day or for attending a wedding in London.

                </p>
                <ol class="alternating-colors text">
                <li>
                <h6>We are available 24/7 for you.</h6>
                </li>
                <li>
                <h6>You can monitor your ride on the phone.</h6>
                </li>
                <li>
                <h6>You can choose the car of your choice. 
                </h6>
                </li>
                </ol>

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
