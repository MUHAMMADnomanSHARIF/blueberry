@extends('layouts.app')

@section('coustomCss')
    <link href="{{ asset('template Resourses/css/style1.css') }}" rel="stylesheet">


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
            left: 20%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 100%;
        }

        @media (max-width: 767px) {



            .text-overlay {
                position: absolute;
                top: 50%;
                left: 30%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: white;
                width: 100%;
            }

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


        .details-form {
            box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.6);
            /* Adjust values as needed */
            padding: 20px;
            /* Optional: Add some padding to make the shadow more noticeable */
        }

        .small-input {
            width: 90%;
            /* You can adjust the width as needed */
        }
    </style>
@endsection

@section('content')
    <!-- Heading -->


    {{-- <div class="image-container overflow-hidden">
        <img src="{{ asset('template Resourses/banners/details .png') }}" alt="reservation" class="responsive-image">
        <div class="text-overlay">
            <h1 class=" text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0,0.7)">
                Booking Details</h1>

        </div>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="steps">
                    <li class="step completed">
                        <div class="step-info">
                            <span class="step-name">Step 1</span>
                        </div>
                    </li>

                    <li class="step completed">
                        <div class="step-info">
                            <span class="step-name">Step 2</span>
                        </div>
                    </li>
                    <li class="step active">
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
    <!-- Details Form -->
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form class="details-form " action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <h4 class="mb-4 text-center">Booking Details</h4>

                    <div class="mb-3">
                        <p class="text-center">Car Fare: ${{ $carFare }}</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Left column form fields -->
                            <div class="form-group">
                                <label for="date" class="form-label">Date:</label>
                                <input type="date" name="date" id="date" class="form-control small-input" min=""
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="first-name" class="form-label">Time</label>
                                <input type="time" name="time" id="time" class="form-control small-input" min=""
                                    required>
                            </div>


                            <!-- Other form fields with Bootstrap styling -->
                            <div class="form-group">
                                <label for="first-name">First Name:</label>
                                <input type="text" name="firstname" id="first-name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="last-name">Last Name:</label>
                                <input type="text" name="lastname" id="last-name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="contact-number">Contact Number:</label>
                                <input type="tel" name="phone" id="contact-number" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <br>
                                <input type="email" name="email" id="" class="form-control" required>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="passenger-count">Number of Passengers:</label>
                                <input type="number" name="passengercount" id="passenger-count" class="form-control" min="0"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="suitcase-count">Number of Suitcases:</label>
                                <input type="number" name="suitcasecount" id="suitcase-count" class="form-control" min="0"
                                    required>
                            </div>



                            <div class="form-group">
                                <label for="flight-number">Flight Number:</label>
                                <input type="text" name="flightnumber" id="flight-number" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="name-board">Name Board:</label>
                                <input type="text" name="nameboard" id="name-board" class="form-control">
                            </div>

                            <input type="text" hidden name="carname" value="{{ $carName }}">
                            <input type="text" hidden name="carfare" value="{{ $carFare }}">
                            <input type="text" hidden name="destination" value="{{ $dest }}">
                            <input type="text" hidden name="source" value="{{ $source }}">
                            <input type="text" hidden name="hour" value="{{ $hour }}">
                            <input type="text" hidden name="ridetype" value="{{ $ridetype }}">




                            <div class="form-group">
                                <label for="additional-requirements">Additional Requirements:</label>
                                <textarea id="additional-requirements" name="textarea" class="form-control" rows="4"></textarea>
                            </div>

                        </div>
                        <div class="col-md-12 text-center">
                            <!-- Center-aligned submit button -->
                            <input class="btn btn-primary" style="width:200px" type="submit" id="goto-payment-btn"
                                value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
    // Get current date and time
const currentDate = new Date();
const currentTime = currentDate.toISOString().split('T')[1].slice(0, 5);

// Set minimum value for date and time inputs
document.getElementById('date').min = currentDate.toISOString().split('T')[0];
document.getElementById('time').min = currentTime;

</script>
    <!-- Details Form -->
@endsection







@section('coustomJs')
@endsection
