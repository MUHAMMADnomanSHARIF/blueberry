@extends('layouts.app')
@section('meta_title', 'Contact Us - Blueberry Chauffeur | Luxury Chauffeur Services')
@section('meta_desc',
    'Get in touch with Blueberry Chauffeur for top-tier luxury chauffeur services. Contact us for inquiries, bookings, and customer support. We`re here to assist you 24/7.!')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid header-section p-0" style=" position: relative;">


        <img src="{{ asset('template Resourses/assets/contact/au.webp') }}" alt="Image" height="500px" width="100%"
            class="img-fluid" style="object-fit: cover;">
        <div class="carousel-caption text-overlay">
            <h1 class="text-gray   animated slideInDown">Contact Us</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl mt-4">
        <div class="container">
            <div class="text-center" data-wow-delay="0.1s">

                <h2 class="mb-5" ><span class="display-4  head-gold animated slideInDown">Contact For </span>Any Query</h2>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> Email </h5>
                                <p class="m-0 text-break"><i
                                        class="fa fa-envelope-open text-primary me-2"></i>info@blueberrychauffeur.co.uk</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">Facebook</h5>
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.facebook.com/blueberrychauffeur"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> Instagram</h5>
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.instagram.com/blueberrychauffeur/"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.933592434511!2d-0.026629724190073832!3d51.4960861115308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602c07a8bad1f%3A0xfd1d45d1367b1e72!2sDocklands%20Business%20Centre%2C%2010%20%E2%80%93%2016%20Tiller%20Rd%2C%20London%20E14%208PX%2C%20UK!5e0!3m2!1sen!2s!4v1720592392236!5m2!1sen!2s"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">

                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name"
                                            required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email"
                                            required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject"
                                            required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
@section('coustomJs')
@endsection
