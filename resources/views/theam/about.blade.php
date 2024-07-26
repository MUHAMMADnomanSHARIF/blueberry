@extends('layouts.app')
@section('meta_title', ' About Us | Premier Chauffeur Services in London ')
@section('meta_desc',
    'Learn about Blueberry Chauffeur, London`s premier provider of luxury chauffeur services. Discover our commitment to excellence.!')


@section('coustomCss')
    <style>
        .page-header {
            max-width: 100%;
            height: 500px;
        }
    </style>
@endsection


@section('content')
    <!-- Page Header Start --><div
        class="image-container"style="background-image: url('{{ asset('template Resourses/assets/airport/Banner.webp') }}');height:100vh; background-repeat:no-repeat;width:100%;object-fit:cover">
        {{-- <img src="{{ asset('template Resourses/assets/airport/4.png') }}" alt="airport services" class="responsive-image"> --}}
        <div class="text-overlay">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About US</h1>
        </div>
    </div>

    <!-- Page Header End -->


    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h3 class="title">Blueberry Chauffeurs</h3>
                            <h2>We aim to craft memories. </h2>
                        </div>
                        <div class="text">Welcome to Blueberry Chauffeurs, the finest chauffeurs company in the UK. Our
                            commitment to prioritizing your travel needs. We offer a chauffeur and a vehicle to assist you
                            in your journey and make reaching your destination easy. Our journey starts with your travel
                            needs. We provide well-trained professional drivers who guide you throughout the journey. We
                            offer you safe and affordable rides that reduce the stress of your finances and work. Our
                            drivers are not ordinary. They are highly trained in their services.
                        </div>
                        <div class="text">
                            To make your journey easier, we trained a person to know all the possible routes to your
                            destination and the best routes for your journey. They are fully updated with the city's traffic
                            habits and traffic flow. They are experts in uncovering every nook and cranny of the path that
                            further explores your journey. We cover all aspects of your life, from private to personalized
                            tours, city-to-city travel, airport travel, travel for business trips or family trips, and
                            corporate to wedding events.
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('theme.content') }}" class="btn ">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image-1"><a class="lightbox-image" data-fancybox="images"><img
                                    src="{{ asset('template Resourses/assets/airport/5.webp') }}" class="img-fluid"
                                    alt="about-img"></a></figure>

                    </div>
                </div>

            </div>
            <div class="sec-title">

                <h2>Your journey with us</h2>
            </div>
            <div class="text">
                Our professionals are trained for every event and tour 24 by 7. Extreme verbal etiquettes of chauffeurs help
                you manage your travel burden. They know how to manage your travel schedule. Highly punctual and ensure you
                and your safety first. We have trained them to make your journey easier as they can assist you.
            </div>
            <div class="sec-title">

                <h2>For travelers</h2>
            </div>
            <div class="text">
                We understand that every journey is unique, and we make it more amazing for you. We provide luxury Mercedes
                with different classes according to your journey requirements. If you're traveling and want to explore the
                land of specific places, our professionals know the lay of the land and help you unlock every street corner.
            </div>
            <div class="sec-title">

                <h2>For business bodies</h2>
            </div>
            <div class="text">
                Our professionals elevate your business travel with high-protocol travel services. They hit hard on your
                business schedule. Take care of your meeting and conference times. They manage your busy schedule and guide
                you to all the possible places for work.
            </div>
            <div class="sec-title">

                <h2>Make your day special </h2>
            </div>
            <div class="text">
                we greatly appreciate your family gatherings and events to ensure that reaching your destination is our
                milestone. Our driver will cover all your family events during your or your relative's wedding and family
                gathering. They are always ready to ease your way.
            </div>
            <div class="sec-title">

                <h2>Your city-to-city travel </h2>
            </div>
            <div class="text">
                Explore the city's beauty with blueberry drivers who guide you around the city, historical sites,
                restaurants, hotels, and tourist attractions. They guide you in traveling and provide you with the best
                driving services.
            </div>


        </div>
    </section>
@endsection


@section('coustomJs')
@endsection
