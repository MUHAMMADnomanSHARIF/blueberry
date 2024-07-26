@extends('layouts.app')
@section('coustomCss')
<link href="{{ asset('template Resourses/css/style1.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')

<section class="select-car-section details-form-section">
    <!-- Heading -->
    <div class="chauffer-cars-heading">
        <h3 class="select-car-steps">STEP 4 OF 4</h3>
        <h1>YOUR Payment <br> DETAILS</h1>
        <h3>ENTER YOUR BILLING DETAILS</h3>
        <br>
        <div class="step-circles">
            <p class="step1" style="background-color: #f7f7f7; color: black;">1</p><span>Location</span>
            <p class="step2" style="background-color: #f7f7f7; color: black;">2</p><span>Cars</span>
            <p class="step3" style="background-color: #f7f7f7; color: black;">3</p><span>Your Details</span>
            <p class="step4" style="background-color: #2689ee; color: black;">4</p><span>Payment</span>
        </div>

        <br><br>
        <!-- START: Summary -->
        <div class="booking-summary">
            <h3>Your Summary</h3>
            <br>
            <div class="booking-car" style="display: flex; gap: 1rem;">
               <div class="booking-car-details">
                    <h3>{{$lastEntity->carname}}</h3>
                    <p>Max Passangers, 4</p>
                </div>
            </div>

            <hr><br>
            <div class="passenger-info">
                <p><strong>Passengers Name:</strong> <span style="size: smaller;">{{$lastEntity->name}}</span></p>
                <p><strong>Phone Number:</strong> <span style="size: smaller;">{{$lastEntity->phoneNumber}}</span></p>
            </div>
            <br><hr>

            <br>
            <div class="passenger-info">
                <p><strong>Additional Requirements:</strong> <span style="size: smaller;">{{$lastEntity->additionalRequirments}}</span></p>
            </div>
            <br><hr>

            <div class="passenger-info">
                <p>From: {{$lastEntity->pickLocation}}</p>
                <p>To: {{$lastEntity->destination}}</p>
                <p>Date: {{$lastEntity->pickDate}}</p>
                <p>Time: {{$lastEntity->pickTime}}</p>
            </div>
            <br><hr>

        </div>
        <!-- END: Summary -->
    </div>
    <!-- Details Form -->
    <div class="booking-details-form">
        <form class="details-form" action="#">
            <h4>Your Billing Details</h4>
            <br>
        <form>
            <div class="form-group">
                <label for="company-name">Company Name:</label>
                <input type="text" id="company-name">
            </div>

            <div class="form-group">
                <label for="billing-address">Billing Address:</label>
                <input type="text" id="billing-address" required>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" required>
            </div>

            <div class="form-group">
                <label for="postal-code">Postal/Zip Code:</label>
                <input type="text" id="postal-code" required>
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <select id="country" required>
                  <option value="Pakistan">Pakistan</option>
                  <option value="India">India</option>
                  <option value="China">China</option>
                  <option value="UnitedStates">UnitedStates</option>
                  <option value="Canada">Canada</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Peru">Peru</option>
                  <option value="Chile">Chile</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Suriname">Suriname</option>
                  <option value="FrenchGuiana">FrenchGuiana</option>
                </select>
              </div>

              <h1>Total: {{$lastEntity->fare}}£ <span style="font-size: xx-small;">price including VAT</span></h1>

              <img src="{{ asset('template Resourses/assets/payments.PNG') }}" alt="payment" width="94%">

              <h4>Checkout With Stripe</h4>

              <div class="form-group">
                <label for="cardholder-name">Card Holder name:</label>
                <input type="text" id="cardholder-name" placeholder="Enter Cardholder Name" required>
              </div>

              <div class="form-group">
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" placeholder="Enter Card Number" required>
              </div>

              <div class="form-group">
                <label for="card-details">Card Details:</label>
                <input type="text" id="card-details" placeholder="MM/YY CVV" required>
              </div>

              <p><small>
                Please note after you have confirmed your reservation you will be sent a full booking confirmation. You can amend your journey at any time. Free cancellation within 12 hours.
                All bookings are subject to our <a href="terms.html">Terms and Conditions.</a>
                <br> <b>Not Available For Wedding Bookings.
              </small></b>
            </p>

            <button class="button get-price-btn" id="continue-booking" style="width: 90%;">Continue Booking</button>
        </form>
    </div>
    <!-- Details Form -->
</section>


@endsection
@section('coustomJs')
@endsection
