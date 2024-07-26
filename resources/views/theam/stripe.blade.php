<!doctype html>
<html lang="en">

<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>

<style>
    .container {
        height: 100%;
        width: 100%;
        margin-left: 100px;
        margin-top: 50px;
    }
</style>


<body>
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table">
                        <h2 class="panel-title">Checkout Forms</h2>
                    </div>
                    <div class="panel-body">
                        <!-- Your PayPal section here -->
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <div class="collapse show p-3 pt-0" id="collapseExample">
                            <div class="row">

                                <div class="col-lg-5 mb-lg-0 mb-3">

                                    @if (session('detail'))
                                        @foreach (session('detail') as $id => $detail)
                                            <p class="h4 mb-0">Summary</p>
                                            <p class="mb-0"><span class="fw-bold">Customer Name :</span><span
                                                    class="c-green">{{ $detail['name'] }}</span>
                                            </p>
                                            <p class="mb-0"><span class="fw-bold">Selected Car</span><span
                                                    class="c-green"> {{ $detail['carname'] }}</span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bold">Date</span>
                                                <span class="c-green">{{ $detail['pickdate'] }}</span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bold">Pick Up Time:</span>
                                                <span class="c-green">{{ $detail['picktime'] }}</span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bold">Fare</span>
                                                <span class="c-green"> {{ $detail['fare'] }}</span>
                                            </p>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="col-lg-7">

                                    <form id='checkout-form' method='post' action="{{ route('stripe.post') }}">
                                        @csrf
                                        <input type='hidden' name='stripeToken' id='stripe-token-id'>
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="card-element" class="form-control"></div>
                                            </div>
                                            <div class="col-12">
                                                <button id='pay-btn' class="btn btn-primary mt-3 w-100" type="button"
                                                    style="margin-top: 20px; padding: 7px;" onclick="createToken()">Pay
                                                    Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Your Credit Card section here -->

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var stripe = Stripe('{{ env('STRIPE_KEY') }}')
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        function createToken() {
            document.getElementById("pay-btn").disabled = true;
            stripe.createToken(cardElement).then(function(result) {

                if (typeof result.error != 'undefined') {
                    document.getElementById("pay-btn").disabled = false;
                    alert(result.error.message);
                }

                if (typeof result.token != 'undefined') {
                    document.getElementById("stripe-token-id").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
