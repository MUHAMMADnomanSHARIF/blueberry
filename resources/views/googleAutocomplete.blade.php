<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>Laravel Google Autocomplete Address Example</title> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    {{-- <div class="container mt-5">
        <h2>Laravel Google Autocomplete Address Example</h2>
        <form action="{{ url('calculate')}}" method="POST">
            @csrf

            <div class="form-group">
                <label>starting</label>
                <input type="text" name="autocomplete" id="autocomplete" class="form-control"
                    placeholder="Choose Location" required>
            </div>
            <div class="form-group">
                <label>Destination</label>
                <input type="text" name="autocomplete1" id="autocomplete1" class="form-control"
                    placeholder="Choose Location" required>
            </div>
            <input type="text" name="latitude" id="latitude">
            <input type="text" name="longitude" id="longitude">
            <input type="text" name="latitude1" id="latitude1">
            <input type="text" name="longitude1" id="longitude1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div>
        <p>distance in kilometers</p>


    </div> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script>
    <script></script>
    <script>
        $(document).ready(function() {
            var autocomplete;
            var autocomplete1;
            var from = 'autocomplete';
            var to = 'autocomplete1';

            autocomplete = new google.maps.places.Autocomplete((document.getElementById(from)), {
                types: ['geocode'],
            });
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var in_place = autocomplete.getPlace();

                jQuery("#latitude").val(in_place.geometry.location.lat());
                jQuery("#longitude").val(in_place.geometry.location.lng());
            });
            autocomplete1 = new google.maps.places.Autocomplete((document.getElementById(to)), {
                types: ['geocode'],
            });
            google.maps.event.addListener(autocomplete1, 'place_changed', function() {
                var fi_place = autocomplete1.getPlace();

                jQuery("#latitude1").val(fi_place.geometry.location.lat());
                jQuery("#longitude1").val(fi_place.geometry.location.lng());
            });


        });
    </script>


</body>

</html>
