@extends('layouts.app')
@section('meta_title', 'London Chauffeur & Limousine Service Prices ')
@section('meta_desc',
    'Get Personal Chauffeur Driven Car Service To & From London For Airport, Hotel, Station, Stadium, & UK Ports or Cruise Terminal Transfers!')

@section('coustomCss')
    <style>
        img {
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid booking my-10 overflow-hidden" data-wow-delay="0.1s" style="background-color: #201e1e">
        <div class="container-lg">
            <div class="row gx-5">
                <h1 align="center" class="display-3 text-white fs-1 fw-bold  animated slideInDown" data-wow-delay="0.1s"
                    style="margin-top: 10px;  margin-bottom: 30px;">
                    Our Fleet
                </h1>

                <div id="carSelect" class="container-xxl service" style="width:100%;">
                    <div class="container px-0">
                        <div class="text-center" data-wow-delay="0.1s">
                            <h2 class="mb-5 text-light">Choose Your Car</h2>
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
                                                        style="object-fit: fill;" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="mb-3  head-gold"> <i class="fa-solid fa-chair"></i><span> 4
                                                        passangers </span>
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
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot
                                                        parking</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins
                                                        waiting time for airpot pickups, 15 mins all others</span><br>
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
                                                        <td class=" head-gold">£15</td>
                                                    </tr>
                                                </table>
                                                <a href="{{route('theme.reservation')}}" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
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
                                                <h4 class="mb-3 head-gold"> <i class="fa-solid fa-chair"></i><span> 7
                                                        passangers </span>
                                                    <i class="fa-solid fa-suitcase"></i><span> 8 Suitcases </span>
                                                    <i class="fa-solid fa-bolt-lightning"></i><span> Electric Option
                                                    </span>
                                                    <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
                                                </h4>
                                                <p class="mb-4">
                                                <div class="description-heading"><br></div>
                                                <div class="description-icons">
                                                    <span><i class="fa-regular fa-circle-check"></i> First class
                                                        chauffeur</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot
                                                        parking</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins
                                                        waiting time for airpot pickups, 15 mins all others</span><br>
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
                                                <a href="{{route('theme.reservation')}}" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
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
                                                        style="object-fit: fill;" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="mb-3 head-gild"> <i class="fa-solid fa-chair"></i><span> 4
                                                        passangers </span>
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
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot
                                                        parking</span><br>
                                                    <span><i class="fa-regular fa-circle-check"></i> Free 60 mins
                                                        waiting time for airpot pickups, 15 mins all others</span><br>
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
                                                <a href="{{route('theme.reservation')}}" class="btn btn-primary py-3 px-5 mt-3">Book Now<i
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
