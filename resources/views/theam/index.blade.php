@extends('layouts.app')

@section('meta_title', 'Luxury Chauffeur Services in London | Blueberry Chauffeur!')
@section('meta_desc',
    'Experience premium chauffeur services in london with Blueberry Chauffeur. Reliable, stylish, and comfortable rides for all your needs. Book now!')
@section('coustomCss')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>

    <style>
        #locationField,
        form,
        button {
            width: 100%;
        }

        .header-section {
            height: 100%;
            width: 100%;
        }

        .carousel-item img {
            height: 600px !important;
            width: 100%;
        }

        .carousel-caption {
            position: absolute;
            top: 55%;
            left: 10%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 80%;
            max-width: 700px;
            margin: auto;
            overflow-x: hidden;
            margin-left: 255px;

        }

        .carousel-caption h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .carousel-caption {
                width: 100%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .carousel-caption h1 {
                font-size: 1.6rem;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .carousel-caption {
                width: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .carousel-caption h1 {
                font-size: 2.5rem;
            }
        }

        .new-section {
            position: absolute;
            top: 42%;
            left: 55%;
        }

        .desktop-form {
            background: rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        @media (max-width: 768px) {
            .new-section {
                position: relative;
                width: 100%;
                left: 0;
            }

            .header-buttn {
                display: none;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .new-section {
                position: absolute;
                width: 100%;
                top: 50%;
                left: 0;
            }

            .text-overlay {
                display: none;
            }

            .second {
                position: relative;
                width: 100%;
                margin-top: 50px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid header-section p-0 overflow-hidden position-relative">
        <img src="{{ asset('template Resourses/assets/home/Home Banner.webp')}}" alt="home Page image" class="img-fluid"
            style="object-fit: cover;width:100%;">
        <div class="carousel-caption text-overlay">
            <h1 class="text-gray m">Enjoy the Essence of Chauffeur Service London</h1>
            <a href="{{ route('theme.about') }}" class="btn header-buttn py-3 px-5 mt-4 animated slideInDown">Learn More<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </div>

    <div class="new-section overflow-hidden">
        <div class="row g-0">
            <div id="bookride" class="col-lg-12 col-sm-12 d-block carousel-item active">
                <div class="desktop-form mobile-form h-100 d-flex flex-column justify-content-center text-center p-4"
                    data-wow-delay="0.6s">
                    <h2 class="text-white mb-4">Book For A Ride</h2>
                    <div class="container" id="locationField">
                        <div class="row justify-content-center">
                            <div id="btn1" class="col-12 col-sm-6 mb-3">
                                <button class="btn w-100 py-3 btn-rectangle rounded-pill">One Way</button>
                            </div>
                            <div id="btn2" class="col-12 col-sm-6 mb-3">
                                <button class="btn w-100 py-3 btn-rectangle rounded-pill">By the Hour</button>
                            </div>
                        </div>
                        <form action="{{ url('select-your-car') }}" method="POST" id="formOne">
                            {{ csrf_field() }}
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="Pick Point"
                                        style="height: 55px; border-radius: 10px;" name="source" id="source" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="Your Destination"
                                        style="height: 55px; border-radius: 10px;" name="dest" id="dest" required>
                                </div>
                                <input type="hidden" name="latitude" id="lat1">
                                <input type="hidden" name="longitude" id="long1">
                                <input type="hidden" name="latitude1" id="lat2">
                                <input type="hidden" name="longitude1" id="long2">
                                <input type="hidden" name="ridetype" value="By Destination">
                            </div>
                            <button class="btn btn-secondary w-100 py-3 rounded-pill mt-3" type="submit">Book Now</button>
                        </form>
                        <form action="{{ url('calculateHour') }}" method="POST" id="formTwo">
                            {{ csrf_field() }}
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="Pick Point"
                                        style="height: 55px; border-radius: 10px;" name="source" id="source2" required>
                                </div>
                                <div class="col-12">
                                    <input type="number" class="form-control border-0" placeholder="Enter Number Of Hours"
                                        style="height: 55px; border-radius: 10px;" name="hour" max="23"
                                        min="1">
                                </div>
                                <input type="hidden" name="latitude3" id="lat3">
                                <input type="hidden" name="longitude3" id="long3">
                                <input type="hidden" name="ridetype" value="BY Hour">
                            </div>
                            <button class="btn btn-secondary w-100 py-3 rounded-pill" type="submit">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container second p-4 py-5 text-black overflow-hidden">
        <div class="row">
            <div class="col-12">
                <p>Get ride from your local trip. Chauffeur Service London offers you a well-trained and professional
                    chauffeur whose main purpose is to meet your travel needs. They reduce the pain of people who suffer
                    from bad trips. Unlike other local drivers, they are highly trained in service and know proper manners
                    and discretion. They offer the client high travel services and protocols that give a sense of luxury and
                    comfort with the commitment to fulfill the needs, attention to single details, and focus on
                    punctuation. The purpose of the chauffeur is to reduce the travel tension of the individual.</p>
            </div>
        </div>
    </div>

    <!-- Carousel End -->
    <div class="container  lg-4 overflow-hidden position-relative">
        <div class="row about-section">
            <div class="col-lg-6 col-sm-12 content-column ">
                <h3>Guide to Hire the Finest Chauffeur</h3>
                <p class="text"> The chauffeur is not like other drivers. They are highly trained not only to drive but
                    also to maintain
                    the vehicle. They know all the potential paths that make the person easily reach the destination, they
                    never arrive late, and they follow the guidance of the person in such a way that they can satisfy the
                    clients. They make sure that this person's journey is peaceful, comfortable, and pleasant. High-level
                    individuals, corporate officers, businesses, private companies, and discerning travelers hire a
                    chauffeur to make their journey reliable. From city to city,<a href="{{ route('theme.airport') }}"
                        style="text-decoration: none; color:#ecbd00 ;
    font-weight: 500;">airport</a> , and <a
                        href="{{ route('theme.event') }}"
                        style="text-decoration: none; color:#FE9900 ;
    font-weight: 500;">special
                        events</a>, they aim to
                    transform every ride of this person into an enjoyable memory.
                </p>
            </div>
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <figure class="image-1"><a class="lightbox-image"><img
                                src="{{ asset('template Resourses/assets/home/3.webp') }}" class="img-fluid"
                                alt="Guide to Hire the Finest Chauffeur Driver"></a></figure>

                </div>
            </div>
        </div>
    </div>

    <!-- Fleet start-->
    <div class="container-fluid booking overflow-hidden my-lg-3" style="background-color: #201e1e;">
        <div class="container-lg">
            <div class="row gx-5">
                <h2 align="center" class="display-5 head-gold animated" style="margin-top: 10px; margin-bottom: 10px;">
                    Our <span class="display-5 head-gold animated slideInDown">Fleet</span>
                </h2>

                <div id="carSelect" class="container-xxl service" style="width:100%;">
                    <div class="container px-0">
                        <div class="text-center" data-wow-delay="0.1s">
                            <h3 class="mb-5 text-light">Choose Your Car</h3>
                        </div>

                        <div class="row g-4" data-wow-delay="0.3s">
                            <div class="col-lg-3 my-auto">
                                <div class="nav w-100 nav-pills me-4">
                                    <button class="nav-link w-100 d-flex align-items-center text-start p-2 mb-4"
                                        data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                                        <i class="fa fa-car-side fa-2x me-3"></i>
                                        <h4 class="m-0">Book your S-Class</h4>
                                    </button>
                                    <button class="nav-link w-100 d-flex align-items-center text-start p-2 mb-4"
                                        data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                        <i class="fa fa-car fa-2x me-3"></i>
                                        <h4 class="m-0">Book your V-Class</h4>
                                    </button>
                                    <button class="nav-link w-100 d-flex align-items-center text-start p-2 mb-4"
                                        data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                                        <i class="fa fa-car-side fa-2x me-3"></i>
                                        <h4 class="m-0">Book your E-Class</h4>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-9">

                                <div class="tab-content w-100">
                                    <div class="tab-pane fade active" id="tab-pane-1">
                                        <div class="row g-4">
                                            <div class="col-md-6" style="min-height: 350px;">
                                                <div class="position-relative h-100">
                                                    <img class="position-absolute img-fluid w-100 h-100"
                                                        src="{{ asset('template Resourses/pics/sclass.webp') }}"
                                                        style="object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="mb-3  head-gold"> <i class="fa-solid fa-chair"></i><span> 4
                                                        passengers </span>
                                                    <i class="fa-solid fa-suitcase"></i><span> 2 Suitcases </span>
                                                    <i class="fa-solid fa-bolt-lightning"></i><span> Hybrid availble
                                                    </span>
                                                    <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
                                                </h4>
                                                <p class="mb-4">
                                                <div class="description-heading"><br></div>
                                                <div class="description-icons">
                                                    <span><i class="fa-regular fa-circle-check"></i> First class
                                                        chauffeur</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airport
                                                        parking</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins
                                                        waiting time for airport pickups, 15 mins all others</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Include meet &
                                                        greet</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free cancellation
                                                        within 24 hours</span><br>
                                                </div>
                                                </p>
                                                <hr>
                                                <table id="price-description" class="price-table ">
                                                    <tr>
                                                        <td>Hourly rate (minimum 3 hours)</td>
                                                        <td class=" head-gold">£65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Day rate (8 hours)</td>
                                                        <td class=" head-gold">£520</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Heart throw to central London</td>
                                                        <td class=" head-gold">£15</td>
                                                    </tr>
                                                </table>
                                                <a href="{{ route('theme.reservation') }}" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
                                                        class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-pane-2">
                                        <div class="row g-4">
                                            <div class="col-md-6" style="min-height: 350px;">
                                                <div class="position-relative h-100">
                                                    <img class="position-absolute img-fluid w-100 h-100"
                                                        src="{{ asset('template Resourses/pics/vclasss.webp') }}"
                                                        style="object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="mb-3 class= head-gold"> <i class="fa-solid fa-chair"></i><span> 7
                                                        passengers </span>
                                                    <i class="fa-solid fa-suitcase"></i><span> 8 Suitcases </span>
                                                    <i class="fa-solid fa-bolt-lightning"></i><span> Electric Option
                                                    </span>
                                                    <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
                                                </h4>
                                                <p class="mb-4">
                                                <div class="description-icons">
                                                    <span><i class="fa-regular fa-circle-check"></i> First class
                                                        chauffeur</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airport
                                                        parking</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins
                                                        waiting time for airport pickups, 15 mins all others</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Include meet &
                                                        greet</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free cancellation
                                                        within 24 hours</span><br>
                                                </div>
                                                </p>
                                                <hr>
                                                <table class="price-table">
                                                    <tr>
                                                        <td>Hourly rate (minimum 3 hours)</td>
                                                        <td class=" head-gold">£65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Day rate (8 hours)</td>
                                                        <td class=" head-gold">£520</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Heart throw to central London</td>
                                                        <td class=" head-gold">£150</td>
                                                    </tr>
                                                </table>
                                                <a href="{{ route('theme.reservation') }}" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
                                                        class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-pane-3">
                                        <div class="row g-4">
                                            <div class="col-md-6" style="min-height: 350px;">
                                                <div class="position-relative h-100">
                                                    <img class="position-absolute img-fluid w-100 h-100"
                                                        src="{{ asset('template Resourses/pics/eclass.webp') }}"
                                                        style="object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="mb-3 class= head-gold"> <i class="fa-solid fa-chair"></i><span> 4
                                                        passengers </span>
                                                    <i class="fa-solid fa-suitcase"></i><span> 2 Suitcases </span>
                                                    <i class="fa-solid fa-bolt-lightning"></i><span> Hybrid availble
                                                    </span>
                                                    <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
                                                </h4>
                                                <p class="mb-4">
                                                <div class="description-icons">
                                                    <span><i class="fa-regular fa-circle-check"></i> First class
                                                        chauffeur</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airport
                                                        parking</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins
                                                        waiting time for airport pickups, 15 mins all others</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Include meet &
                                                        greet</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free cancellation
                                                        within 24 hours</span><br>
                                                </div>
                                                </p>
                                                <table class="price-table">
                                                    <tr>
                                                        <td>Hourly rate (minimum 3 hours)</td>
                                                        <td class=" head-gold">£55</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Day rate (8 hours)</td>
                                                        <td class=" head-gold">£440</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Heart throw to central London</td>
                                                        <td class=" head-gold">£135</td>
                                                    </tr>
                                                </table>
                                                <a href="{{ route('theme.reservation') }}" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
                                                        class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-pane-4">
                                        <div class="row g-4">
                                            <div class="col-md-6" style="min-height: 350px;">
                                                <div class="position-relative h-100">
                                                    <img class="position-absolute img-fluid w-100 h-100"
                                                        src="{{ asset('template Resourses/pics/eqv.png') }}"
                                                        style="object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="mb-3 class=head-gold"> <i class="fa-solid fa-chair"></i><span> 7
                                                        passangers </span>
                                                    <i class="fa-solid fa-suitcase"></i><span> 8 Suitcases </span>
                                                    <i class="fa-solid fa-bolt-lightning"></i><span> Electric Option
                                                    </span>
                                                    <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
                                                </h4>
                                                <p class="mb-4">
                                                <div class="description-icons">
                                                    <span><i class="fa-regular fa-circle-check"></i> First class
                                                        chauffeur</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airport
                                                        parking</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins
                                                        waiting time for airport pickups, 15 mins all others</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Include meet &
                                                        greet</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free cancellation
                                                        within 24 hours</span><br>
                                                </div>
                                                </p>
                                                <hr>
                                                <table id="price-description" class="price-table">
                                                    <tr>
                                                        <td>Hourly rate (minimum 3 hours)</td>
                                                        <td class=" head-gold">£65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Day rate (8 hours)</td>
                                                        <td class=" head-gold">£520</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Heart throw to central London</td>
                                                        <td class=" head-gold">£150</td>
                                                    </tr>
                                                </table>
                                                <a href="{{ route('theme.reservation') }}" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
                                                        class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    {{-- services --}}
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Our Services</h3>
            </div>
        </div>
    </div>
    <section class="container_1 overflow-x-hidden">
        <section class="card__container">
            <div class="card__bx" style="--clr:#ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Airport </h3>
                        <p>We provide professional <span style="cursor: pointer; font-weight:bold;"
                                onclick="window.location.href='{{ route('theme.airport') }}'">airport chauffeurs </span>
                            who will take you to the airport on time and pick you up from the airport to your destination.
                            They will wait for an hour and take care of your arrival.
                        </p>

                        <a href="{{ route('theme.airport') }}" class="btn btn-primary d-grid rounded-pill mt-3">Read More</a>

                    </div>
                </div>
            </div>

            <div class="card__bx" style="--clr:#ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Weddings</h3>
                        <p>To cover the travel of your wedding celebrations, we provide you with a <span
                                style="cursor: pointer; font-weight:bold;"
                                onclick="window.location.href='{{ route('theme.wedding') }}'">wedding chauffeur hire
                            </span> who ensures your and your luggage's safety and helps you manage the luggage.</p>

                            <a href="{{ route('theme.wedding') }}" class="btn btn-primary d-grid rounded-pill mt-3">Read More</a>

                    </div>
                </div>
            </div>
            <div class="card__bx" style="--clr:#ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Tours</h3>
                        <p>Make your tour more reliable and comfortable. We offer you a <span
                                style="cursor: pointer; font-weight:bold;"
                                onclick="window.location.href='{{ route('theme.tours') }}'"> private London tours </span>
                            chauffeur who uncovers every corner of the land you want to explore the best routes with
                            guidance.</p>

                            <a href="{{ route('theme.tours') }}" class="btn btn-primary d-grid rounded-pill mt-3">Read More</a>

                    </div>
                </div>
            </div>

            <div class="card__bx" style="--clr:#ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Business</h3>
                        <p>Travelling for business meetings and conferences is stressful for a person, but we make it
                            comfortable by providing <span style="cursor: pointer; font-weight:bold;"
                                onclick="window.location.href='{{ route('theme.business') }}'">chauffeur service in
                                London</span> and top-class vehicles.</p>

                                <a href="{{ route('theme.business') }}" class="btn btn-primary d-grid rounded-pill mt-3">Read More</a>

                    </div>
                </div>
            </div>
            <div class="card__bx" style="--clr:#ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Events</h3>
                        <p>We provide luxury chauffeur service and professionals to cover your <span
                                style="cursor: pointer; font-weight:bold;"
                                onclick="window.location.href='{{ route('theme.event') }}'"> event travel </span> . Driver
                            and vehicle cover all events, ranging from co-operatives to private events.</p>

                            <a href="{{ route('theme.event') }}" class="btn btn-primary d-grid rounded-pill mt-3">Read More</a>

                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- end services --}}

    <div class="container mt-4 overflow-hidden">
        <div class="row about-section">
            <div class="col-lg-6 col-sm-12 content-column ">

                <h3>Your Passport to Luxury Chauffeur Service</h3>
                <p class="text"> The local driver did not provide proper travel services, which made your journey a
                    difficult task, but
                    our company provides luxury chauffeur services, which give you the essence of relaxing, working, and
                    enjoying the journey. They put your satisfaction first, maintain the vehicles, are well-verbal,
                    prioritize the best routes for you, and ensure your belongings and your safety. They also manage the
                    equipment and ensure route safety measures, manage time, and perfectly plan and follow your travel
                    plan.
                    Hire a personal Chauffeur for personal or <a href="{{ route('theme.tours') }}"
                        style="text-decoration: none; color:#FE9900 ;
    font-weight: 500;">private tours</a>, <a
                        href="{{ route('theme.business') }}"
                        style="text-decoration: none; color:#FE9900 ;
    font-weight: 500;">business
                        meetings</a>, family outings, <a href="{{ route('theme.wedding') }}"
                        style="text-decoration: none; color:#FE9900 ;
    font-weight: 500;">wedding
                        occasions</a>, and exploring new lands. They make your journey amazing from the first step to the
                    last
                    moment as they unfold every corner of the path so beautifully that it reveals the beauty of the
                    land.
                    They will always live up to their promises and provide you with a superior, unexpected ride.
                </p>
            </div>
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                src="{{ asset('template Resourses/assets/home/6.webp') }}" class="img-fluid"
                                alt="Your Passport to Luxury Chauffeur Service"></a></figure>

                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-xxl overflow-hidden" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">

                <h3 class="mb-5">Our Clients Say!</h3>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3"
                        src="{{ asset('template Resourses/img/testimonial-1.jpg') }}" alt="Ivy"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ivy</h5>

                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Good experience, the driver arrived on time and the ride was smooth. Highly
                            recommended.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3"
                        src="{{ asset('template Resourses/img/testimonial-2.jpg') }}" alt="Audrey"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Audrey</h5>

                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Excellent driving skills, the driver was attentive to my recommendation and
                            got
                            me to my destination on time.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" alt="Wesley"
                        src="{{ asset('template Resourses/img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Wesley</h5>

                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">kudos! The driver saves my time by choosing the best routes for the ride and
                            the
                            driver behaves well.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" alt="Colton"
                        src="{{ asset('template Resourses/img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Colton</h5>

                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">The car is clean the driver is polite, safety conscious and the journey was
                            comfortable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->


    {{-- why choose us section --}}

    <div class="container pb-5 my-5 choose overflow-x-hidden">
        <div class="row">
            <h3 class="text-center">Why Choose Us</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img src="{{ asset('template Resourses/assets/home/5.webp') }}" alt="why choose us"
                    class="img-fluid responsive-image">

            </div>

            <div class="col-lg-6 col-sm-12">


                <ol class="alternating-colors">
                    <li style="
    margin-top: 24px;">

                        <p>Our services are available 24/7.</p>
                    </li>
                    <li>

                        <p>Drivers wait for you for 60 minutes free waiting</p>
                    </li>
                    <li>

                        <p>No delay in the arrival of the driver.</p>
                    </li>
                    <li>

                        <p>Prioritize your privacy by adopting the Customer Privacy Policy.</p>
                    </li>
                    <li>

                        <p>Offers you affordable rides.</p>
                    </li>
                    <li>

                        <p>Reduce your travel and financial stress.</p>
                    </li>
                    <li>

                        <p>Ensures your safety.</p>
                    </li>
                    <li>

                        <p>Take protective measures.</p>
                    </li>
                </ol>
            </div>

        </div>
    </div>
@endsection

@section('coustomJs')
    <script>
        $(document).ready(function() {
            // Auto-select the first tab when the page loads
            $('#carSelect .nav-pills button:first').tab('show');

            // Change tabs when a button is pressed
            $('#carSelect .nav-pills button').click(function() {
                $('#carSelect .nav-pills button').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
@endsection
