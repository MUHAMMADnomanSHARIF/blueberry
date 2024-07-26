@extends('layouts.app')
@section('coustomCss')
    <style>
        /*==================== GOOGLE FONTS ====================*/
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap");

        /*==================== VARIABLES CSS ====================*/
        :root {
            /*========== Colors ==========*/



            /*========== Font and typography ==========*/
            --body-font: "Poppins", sans-serif;
            --normal-font-size: 0.938rem;
        }

        @media screen and (min-width: 968px) {
            :root {
                --normal-font-size: 1rem;
            }
        }

        /*==================== BASE ====================*/


        body {

            transition: all 0.2s ease;
        }

        /*==================== REUSABLE CSS CLASSES ====================*/
        .container_1 {
            max-width: 1140px;
            width: 100%;
            margin: 0 auto;
            padding: 3rem 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
        }


        /*==================== SERVICE CARD ====================*/
        .card__container {
            display: flex;
            flex-wrap: wrap;
            gap: 60px;
            justify-content: center;
            width: 100%;
            max-width: 90%;
            margin: auto;
            padding: 60px 0;
        }

        .card__bx {
            --dark-color: #2e2e2e;
            --dark-alt-color: #777777;
            --white-color: #ffffff;
            --button-color: #333333;
            --transition: 0.5s ease-in-out;
            --yellow-color: var(#ff9900);

            font-family: inherit;
            height: 350px;
            width: 300px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--dark-color);
            transition: var(--transition);
        }

        .card__bx::before,
        .card__bx::after {
            content: "";
            position: absolute;
            z-index: -1;
            transition: var(--transition);
        }

        .card__bx::before {
            inset: -10px 50px;
            border-top: 4px solid var(--clr);
            transform: skewY(15deg);
            border-bottom: 4px solid var(--clr);
        }

        .card__bx:hover::before {
            inset: -10px 40px;
            transform: skewY(0deg);
        }

        .card__bx::after {
            inset: 60px -10px;
            border-left: 4px solid var(--clr);
            transform: skew(15deg);
            border-right: 4px solid var(--clr);
        }

        .card__bx:hover::after {
            inset: 40px -10px;
            transform: skew(0deg);
        }

        .card__bx .card__data {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            text-align: center;
            padding: 0 20px;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .card__bx .card__data .card__icon {
            height: 80px;
            width: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3rem;
            color: var(--text-color);
            background-color: var(--dark-color);
            transition: var(--transition);
        }

        .card__bx .card__data .card__icon {
            color: var(--clr);
            box-shadow: 0 0 0 4px var(--dark-color), 0 0 0 6px var(--clr);
        }

        .card__bx:hover .card__data .card__icon {
            color: var(--dark-color);
            background-color: var(--clr);
            box-shadow: 0 0 0 4px var(--dark-color), 0 0 0 300px var(--clr);
        }

        .card__bx .card__data .card__content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }

        .card__bx .card__data h3 {
            font-size: 1.5rem;
            font-weight: 500;
            color: var(--white-color);
            transition: var(--transition);
        }

        .card__bx:hover .card__data h3 {
            color: var(--dark-color);
            transition: var(--transition);
        }

        .card__bx .card__data p {
            font-size: 0.9rem;
            color: var(--dark-alt-color);
            transition: var(--transition);
        }

        .card__bx:hover .card__data p {
            color: var(--dark-color);
            transition: var(--transition);
        }

        .card__bx .card__data a {
            position: relative;
            display: inline-flex;
            padding: 8px 15px;
            text-decoration: none;
            font-weight: 500;
            margin-top: 10px;
            border: 2px solid var(--clr);
            color: var(--dark-color);
            background-color: var(--clr);
            transition: var(--transition);
        }

        .card__bx:hover .card__data a {
            color: var(--clr);
            background-color: var(--dark-color);
        }

        .card__bx:hover .card__data a:hover {
            border-color: var(--dark-color);
            color: var(--dark-color);
            background-color: var(--clr);
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(pics/6.jpg); height: 100vh;">
        <div class="container-fluid page-header-inner py-5" style="height: 100vh;">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl service"style="width:90%;">
        <div class="container">
            <div class="text-center" data-wow-delay="0.1s">

                <h1 class=" display-3  wow">Chose Your Car</h1>
            </div>
            <div class="row g-4" data-wow-delay="0.1s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Book your S- class</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Book your V- class</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Book your E- class</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Book Your EQV</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('template Resourses/pics/Mercedes-S-Class-13C1105_05_324x421.jpg') }}"
                                            style="object-fit: cover; width:400px ;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-3 text-dark"> <i class="fa-solid fa-chair"></i><span> 4 passangers </span>
                                        <i class="fa-solid fa-suitcase"></i><span> 2 Suitcases </span>
                                        <i class="fa-solid fa-bolt-lightning"></i><span> Hybrid availble </span>
                                        <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
                                    </h4>
                                    <p class="mb-4">
                                    <div class="description-heading"><br></div>
                                    <div class="description-icons">
                                        <span><i class="fa-regular fa-circle-check"></i> First class chauffeur</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot
                                            parking</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free 60 mins waiting time for
                                            airpot pickups, 15 mins all others</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Include meet & greet</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free cancellation within 24
                                            hours</span><br>
                                    </div>
                                    </p>
                                    <hr>
                                    <table id="price-description" class="price-table">
                                        <tr>
                                            <td>Hourly rate (minimum 3 hours)</td>
                                            <td>£65</td>
                                        </tr>
                                        <tr>
                                            <td>Day rate (8 hours)</td>
                                            <td>£520</td>
                                        </tr>
                                        <tr>
                                            <td>Heart throw to central London</td>
                                            <td>£15</td>
                                        </tr>
                                    </table>
                                    <a href="contact.html" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('template Resourses/pics/msv.jpeg') }}" style="object-fit: cover;"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-3 text-dark"> <i class="fa-solid fa-chair"></i><span> 7 passangers </span>
                                        <i class="fa-solid fa-suitcase"></i><span> 8 Suitcases </span>
                                        <i class="fa-solid fa-bolt-lightning"></i><span> Electric Option </span>
                                        <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
                                    </h4>
                                    <p class="mb-4">
                                    <div class="description-heading"><br></div>
                                    <div class="description-icons">
                                        <span><i class="fa-regular fa-circle-check"></i> First class chauffeur</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot
                                            parking</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free 60 mins waiting time for
                                            airpot pickups, 15 mins all others</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Include meet & greet</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free cancellation within 24
                                            hours</span><br>
                                    </div>
                                    </p>
                                    <hr>
                                    <table class="price-table">
                                        <tr>
                                            <td>Hourly rate (minimum 3 hours)</td>
                                            <td>£65</td>
                                        </tr>
                                        <tr>
                                            <td>Day rate (8 hours)</td>
                                            <td>£520</td>
                                        </tr>
                                        <tr>
                                            <td>Heart throw to central London</td>
                                            <td>£150</td>
                                        </tr>
                                    </table>
                                    <a href="contact.html" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('template Resourses/pics/eclas.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-3 text-dark"> <i class="fa-solid fa-chair"></i><span> 4 passangers
                                        </span>
                                        <i class="fa-solid fa-suitcase"></i><span> 2 Suitcases </span>
                                        <i class="fa-solid fa-bolt-lightning"></i><span> Hybrid availble </span>
                                        <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
                                    </h4>
                                    <p class="mb-4">
                                    <div class="description-heading"><br></div>
                                    <div class="description-icons">
                                        <span><i class="fa-regular fa-circle-check"></i> First class chauffeur</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot
                                            parking</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free 60 mins waiting time for
                                            airpot pickups, 15 mins all others</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Include meet & greet</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free cancellation within 24
                                            hours</span><br>
                                    </div>
                                    </p>
                                    <table class="price-table">
                                        <tr>
                                            <td>Hourly rate (minimum 3 hours)</td>
                                            <td>£55</td>
                                        </tr>
                                        <tr>
                                            <td>Day rate (8 hours)</td>
                                            <td>£440</td>
                                        </tr>
                                        <tr>
                                            <td>Heart throw to central London</td>
                                            <td>£135</td>
                                        </tr>
                                    </table>
                                    <a href="contact.html" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('template Resourses/pics/eqv.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-3 text-dark"> <i class="fa-solid fa-chair"></i><span> 7 passangers
                                        </span>
                                        <i class="fa-solid fa-suitcase"></i><span> 8 Suitcases </span>
                                        <i class="fa-solid fa-bolt-lightning"></i><span> Electric Option </span>
                                        <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
                                    </h4>
                                    <p class="mb-4">
                                    <div class="description-heading"><br></div>
                                    <div class="description-icons">
                                        <span><i class="fa-regular fa-circle-check"></i> First class chauffeur</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot
                                            parking</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free 60 mins waiting time for
                                            airpot pickups, 15 mins all others</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Include meet & greet</span><br>
                                        <span><i class="fa-regular fa-circle-check"></i> Free cancellation within 24
                                            hours</span><br>
                                    </div>
                                    </p>
                                    <hr>
                                    <table id="price-description" class="price-table">
                                        <tr>
                                            <td>Hourly rate (minimum 3 hours)</td>
                                            <td>£65</td>
                                        </tr>
                                        <tr>
                                            <td>Day rate (8 hours)</td>
                                            <td>£520</td>
                                        </tr>
                                        <tr>
                                            <td>Heart throw to central London</td>
                                            <td>£150</td>
                                        </tr>
                                    </table>
                                    <a href="contact.html" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- 2 Service End -->


    <!--  2Service End -->





    <!-- Booking Start -->
    <div class="container">
        <h1 align="center" class="display-3" data-wow-delay="0.1s">Chose Your service</h1>
    </div>
    <div class="py-5 service-7">
        <div class="container">
            <!-- Row  -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 mb-4">
                    <div class="">
                        <img class="rounded img-fluid"
                            src="{{ asset('template Resourses/pics/chauffeur-service-london.jpg') }}"
                            style="height: 50vh; width: 100%;" alt="wrappixel kit" />
                        <div class="mt-4">
                            <h6 class="font-weight-medium" style="font-size: 26px;">By The Hour</h6>
                            <h6 class="font-weight-medium" style="font-size: 20px; color: rgb(120, 120, 120);">As Direct
                                Hire</h6>
                            <p class="mt-3" style="font-size: 16px;">Transparent hourly pricing with no hidden extras
                                keeps you in control.</p>
                            <div class="col-12">
                                <a href="contact.html" class="btn btn-primary w-100 py-3" type="submit">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 mb-4">
                    <div class="">
                        <img class="rounded img-fluid" src="{{ asset('template Resourses/pics/birthday1.jpg') }}"
                            style="height: 50vh; width: 100%;" alt="wrappixel kit" />
                        <div class="mt-4">
                            <h6 class="font-weight-medium" style="font-size: 26px;">ONE WAY</h6>
                            <h6 class="font-weight-medium" style="font-size: 20px; color: rgb(120, 120, 120);">First Class
                                Service From A to B</h6>
                            <p class="mt-3">Enjoy safe and luxurious travel from pickup to destination.</p>
                            <div class="col-12">
                                <a href="contact.html" class="btn btn-primary w-100 py-3" type="submit">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->

                <div class="col-md-12 mt-3 text-center">
                    <a class="btn btn-info-gradiant btn-md border-0 text-white"><span>View Details</span></a>
                </div>
            </div>
        </div>
    </div>

    <section class="container_1">
        <section class="card__container">
            <div class="card__bx" style="--clr: #89ec5b">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Airport Transfer</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card__bx" style="--clr: #eb5ae5">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Wedding</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card__bx" style="--clr: #5b98eb">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Events</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="card__bx" style="--clr: #5b98eb">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Business</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="card__bx" style="--clr: #5b98eb">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Tours</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

        </section>

    </section>
@endsection

@section('coustomJs')
@endsection
