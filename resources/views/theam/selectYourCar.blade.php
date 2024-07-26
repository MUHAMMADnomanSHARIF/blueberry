@extends('layouts.app')

@section('coustomCss')
    <link href="{{ asset('template Resourses/css/style1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- START: Javascript Scroll Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        body {
            width: 100%;


        }

        .image-container {
            position: relative;
        }


        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 100%;
        }

        .text-overlay h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }


        .steps {
            display: flex;
            flex-grow: 1;
            counter-reset: step;
            max-width: 80%;
            margin: auto;
            padding: 2em;
            position: relative;
            list-style: none;
            --primary-color: hsl(0, 0%, 87%);
            --active-color: var(--yellow-color);
        }

        .step {
            color: var(--primary-color);
            flex: 1;
            padding-top: calc(40px + 1rem);
            /*40px is for the circle*/
            text-align: center;
            position: relative;
            background-image: linear-gradient(to bottom, transparent calc(20px - 2px), currentColor 0, currentColor calc(20px + 2px), transparent 0);
            font-weight: 100;
        }

        .step::before {
            display: flex;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-color);
            content: ' ';
            position: absolute;
            justify-content: center;
            align-items: center;
            color: white;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        @media (max-width: 767px) {

            html,
            body {
                overflow-x: hidden;
            }

            /* Adjust as needed for your mobile breakpoint */
            .steps {
                max-width: 100%;
                /* Make it full width */
            }



            .step::before {
                width: 20px;
            }
        }

        .step:last-child,
        .step:first-child {
            background-size: 50% 100%;
            background-repeat: no-repeat;
        }

        .step:first-child {
            background-position: 100% 0;
        }

        .step-info::before {
            font-weight: bold;
            display: block;
            content: " ";
        }

        /* States */
        .step.active {
            color: var(--active-color);
        }

        .step.active::before {
            background: var(--active-color);
        }

        .step.completed {
            color: #3C40C6
        }

        .step.completed::before {
            content: '✓';
            color: white;
            background: #3C40C6;
        }
    </style>
@endsection

@section('content')
    {{-- <div class="image-container overflow-hidden">
        <img src="{{ asset('template Resourses/banners/car.png') }}" alt="reservation" class="responsive-image">
        <div class="text-overlay">
            <h1 class=" text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0,0.7)">
                SELECT YOUR LUXURY CHAUFFEUR DRIVEN CAR</h1>

        </div>
    </div> --}}


    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12">
                <ul class="steps">
                    <li class="step completed">
                        <div class="step-info">
                            <span class="step-name">Step 1</span>
                        </div>
                    </li>

                    <li class="step active">
                        <div class="step-info">
                            <span class="step-name">Step 2</span>
                        </div>
                    </li>
                    <li class="step ">
                        <div class="step-info">
                            <span class="step-name">Step 3</span>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-info">
                            <span class="step-name">Step 4</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Select Car Section -->

    <!-- Car Cards Section -->

    <section class="car-cards-section row overflow-hidden">
        <!-- 1 -->

        <div class="cp-stuff">
            <div class="mar">
                <h3>MERCEDES S-CLASS</h3>
            </div><br>
            <div class="car-icon-bar mar">
                <div><span style="font-size: 10px;"> Seats 4
                        adults</span></div>
                <div><span style="font-size: 10px;"> 2
                        suitcases</span></div>
                <div><span style="font-size: 10px;"> 2 carry-on
                        bags</span></div>
                <div><span style="font-size: 10px;"> Onboard WiFi</span>
                </div>
            </div>
        </div>

        <div class="car-price-cards">
            <div class="cp-card">
                <div><img src="{{ asset('template Resourses/assets/cars/sclass.webp') }}" alt="mercedes"></div>
                <div class="cp-card-info">
                    <p><i class="fa-regular fa-circle-check"></i> First class chauffeur </p>
                    <p><i class="fa-regular fa-circle-check"></i> Free 60 mins airport parking & waiting </p>
                    <p><i class="fa-regular fa-circle-check"></i> Free 15 mins waiting for other journeys </p>
                    <p><i class="fa-regular fa-circle-check"></i> Includes meet & greet </p>
                    <p><i class="fa-regular fa-circle-check"></i> Free cancellation within 24 hours </p>
                </div>
                <form action="{{ url('fare') }}" method="POST">
                    @csrf
                    <div class="journey-price">
                        <h5>Your Journey Price</h5>
                        <input type="text" hidden name="sclass" value="{{ $sclass }}">
                        <input type="text" hidden name="hour" id="" value="{{ $hour }}">
                        <input type="text" hidden name="dest" id="" value="{{ $dest }}">
                        <input type="text" hidden name="source" id="" value="{{ $source }}">
                        <input type="text" hidden name="ridetype" id="" value="{{ $ridetype }}">
                        <input type="text" hidden name="sclassname" value="Mercedes S-Class">
                        <h1>£ {{ $sclass }}</h1> <span>Prices including VAT</span>
                        <button class="select-car-btn" type="submit"><a style="text-decoration: none; color:white; ">SELECT
                                THIS CAR</a></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- 2 -->
        <div class="cp-stuff">
            <div class="mar">
                <h3>MERCEDES V-CLASS & EQV-Class</h3>
            </div><br>
            <div class="car-icon-bar mar">
                <div><span style="font-size: 10px;"> Seats 7
                        adults</span></div>
                <div><span style="font-size: 10px;"> 8
                        suitcases</span></div>
                <div><span style="font-size: 10px;"> 4 carry-on
                        bags</span></div>
                <div><span style="font-size: 10px;"> Onboard WiFi</span>
                </div>
            </div>
        </div>

        <div class="car-price-cards">
            <div class="cp-card">
                <div><img src="{{ asset('template Resourses/assets/cars/vclass.webp') }}" style="object-fit: contain"
                        alt="mercedes"></div>
                <div class="cp-card-info">
                    <p><i class="fa-regular fa-circle-check"></i> First class chauffeur </p>
                    <p><i class="fa-regular fa-circle-check"></i> Free 60 mins airport parking & waiting </p>
                    <p><i class="fa-regular fa-circle-check"></i> Free 15 mins waiting for other journeys </p>
                    <p><i class="fa-regular fa-circle-check"></i> Includes meet & greet </p>
                    <p><i class="fa-regular fa-circle-check"></i> Free cancellation within 24 hours </p>
                </div>

                <form action="{{ url('fare') }}" method="POST">
                    @csrf
                    <div class="journey-price">
                        <h5>Your Journey Price</h5>
                        <input type="text" hidden name="vclass" hidden value="{{ $vclass }}">
                        <input type="text" hidden name="hour" id="" value="{{ $hour }}">
                        <input type="text" hidden name="dest" id="" value="{{ $dest }}">
                        <input type="text" hidden name="source" id="" value="{{ $source }}">
                        <input type="text" hidden name="ridetype" id="" value="{{ $ridetype }}">
                        <input type="text" hidden name="vclassname" hidden value="Mercedes V-Class">
                        <h1>£ {{ $vclass }}</h1> <span>Prices including VAT</span>
                        <button class="select-car-btn" type="submit"><a
                                style="text-decoration: none; color:white; ">SELECT
                                THIS CAR</a></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- 3 -->
        <div class="cp-stuff">
            <div class="mar">
                <h3>MERCEDES E-CLASS </h3>
            </div><br>
            <div class="car-icon-bar mar">
                <div><span style="font-size: 10px;"> Seats 4
                        adults</span></div>
                <div><span style="font-size: 10px;"> 2
                        suitcases</span></div>
                <div><span style="font-size: 10px;"> 2 carry-on
                        bags</span></div>
                <div><span style="font-size: 10px;"> Onboard
                        WiFi</span></div>
            </div>
        </div>

        <div class="car-price-cards">
            <div class="cp-card">
                <div><img src="{{ asset('template Resourses/assets/cars/eclass.webp') }}" alt="mercedes"></div>
                <div class="cp-card-info">
                    <p><i class="fa-regular fa-circle-check"></i> First class chauffeur </p>
                    <p><i class="fa-regular fa-circle-check"></i> Free 60 mins airport parking & waiting </p>
                    <p><i class="fa-regular fa-circle-check"></i> Free 15 mins waiting for other journeys </p>
                    <p><i class="fa-regular fa-circle-check"></i> Includes meet & greet </p>
                    <p><i class="fa-regular fa-circle-check"></i> Free cancellation within 24 hours </p>
                </div>
                <form action="{{ url('fare') }}" method="POST">
                    @csrf
                    <div class="journey-price">
                        <h5>Your Journey Price</h5>
                        <input type="text" hidden name="eclass" value="{{ $eclass }}">
                        <input type="text" hidden name="hour" id="" value="{{ $hour }}">
                        <input type="text" hidden name="dest" id="" value="{{ $dest }}">
                        <input type="text" hidden name="source" id="" value="{{ $source }}">
                        <input type="text" hidden name="ridetype" id="" value="{{ $ridetype }}">
                        <input type="text" hidden hidden name="eclassname" id="" value="Mercedes E-Class">
                        <h1>£ {{ $eclass }}</h1> <span>Prices including VAT</span>
                        <button class="select-car-btn" type="submit"><a style="text-decoration: none; "><a
                                    style="text-decoration: none; color:white; ">SELECT THIS CAR</a></a></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- 4 -->
    </section>
@endsection







@section('coustomJs')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 500,
        });
    </script>
@endsection
