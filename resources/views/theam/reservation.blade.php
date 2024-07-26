@extends('layouts.app')
@section('meta_title', 'Book Your Luxury Chauffeur Service - Blueberry Chauffeur Reservation ')
@section('meta_desc',
    'Reserve your premium chauffeur service with Blueberry Chauffeur. Enjoy a seamless, luxury experience with our professional drivers and top-of-the-line fleet.!')

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
            overflow-x: hidden;


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


        /* Steps Component */
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

            /* Adjust as needed for your mobile breakpoint */

            html,
            body {
                overflow-x: hidden;
            }

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

    <style>
        form {
            /* background-color: #2689ee; */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form input {
            border-radius: 10px;
        }

        form .sub {
            display: flex;

        }

        .field-group {
            margin-bottom: 15px;
            /* Adjust the margin as needed */
        }

        label {
            margin-bottom: 5px;
        }
    </style>
@endsection

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="image-container overflow-hidden">
        <img src="{{ asset('template Resourses/banners/reservation.webp') }}" alt="reservation" class="responsive-image">
        <div class="text-overlay">
            <h1 class=" text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0,0.7)">
                Reservation</h1>

        </div>
    </div>


    <div class="container-">
        <div class="row">
            <div class="col-12">
                <ul class="steps">
                    <li class="step active">
                        <div class="step-info">
                            <span class="step-name">Reservation</span>
                        </div>
                    </li>

                    <li class="step">
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


    <div class="container mt-5">
        <div class="row justify-content-center">
            <h2 class="text-center">Make a Reservation</h2>
            <div class="col-lg-6">
                <form action="{{ url('select-your-car') }}" method="POST" id="formOne">
                    {{ csrf_field() }}


                    <div class="form-group sub mb-4">
                        {{-- <div class="field-group">
                            <label for="date">Pick up date</label>
                            <input type="date" name="date" id="date" required>
                        </div>

                        <div class="field-group">
                            <label for="time">Pick up time</label>
                            <input type="time" name="time" id="time" required>
                        </div> --}}

                    </div>

                    <div class="form-group mb-4">
                        <label for="source">Pick up Point</label>
                        <input type="text" class="form-control" placeholder="Choose your Pick Point" name="source"
                            id="source" required>
                    </div>


                    <div class="form-group mb-4">
                        <label for="dest">Your Destination</label>
                        <input type="text" class="form-control " placeholder=" Choose your Your Destination"
                            name="dest" id="dest" required>
                    </div>


                    <div class="col-12 col-sm-6">
                        <input type="text" hidden name="latitude" id="lat1">
                        <input type="text" hidden name="longitude" id="long1">
                        <input type="text" hidden name="latitude1" id="lat2">
                        <input type="text" hidden name="longitude1" id="long2">
                        <input type="text" hidden name="ridetype" value="By Destination">
                    </div>



                    <div class="col-12">
                        <button class="btn btn-secondary w-100 py-3" type="submit" style="border-radius:50px;">Book
                            Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
