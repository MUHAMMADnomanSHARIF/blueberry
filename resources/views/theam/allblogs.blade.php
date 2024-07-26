@extends('layouts.app')
@section('meta_title', 'Chauffeur Services Blog | Tips & Insights | Blueberry Chauffeur')
@section('meta_desc',
    'Stay updated with the latest trends, tips, and insights in the luxury chauffeur service industry. Read our blog for expert advice, travel tips, and more from Blueberry Chauffeur.')

@section('customCss')
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="blog-post">
                    <a href="{{ route('theme.sblog') }}"><img src="{{ asset('template Resourses/assets/blog/blog img1.webp') }}"
                            class="img-fluid" alt="Blog Image"></a>
                    <h3>Explore the new paths with Blueberry Chauffeur</h3>
                    <p class="text-muted">Posted on March 28, 2024</p>
                    <a href="{{ route('theme.sblog') }}" class="btn btn-primary">Read More</a>
                </div>

            </div>
            <div class="col-md-6">
                <div class="blog-post">
                    <a href="{{ route('theme.blog2') }}"><img src="{{ asset('template Resourses/assets/blog/blog img2.webp') }}"
                            class="img-fluid" alt="Blog Image"></a>
                    <h3>Why Chauffeur Services are the Perfect Choice for Luxury Travel</h3>
                    <p class="text-muted">Posted on May 8, 2024</p>
                    <a href="{{ route('theme.blog2') }}" class="btn btn-primary">Read More</a>
                </div>

            </div>
            <


        </div>
        <div class="row mt-5">
            <div class="row">
        <div class="col-md-6">
                <div class="blog-post">
                    <a href="{{ route('theme.blog2') }}"><img src="{{ asset('template Resourses/assets/blog/blog img3.webp') }}"
                            class="img-fluid" alt="Blog Image"></a>
                    <h3>Best wedding Car Hire Service in the U.K. at Coupling Day</h3>
                    <p class="text-muted">Posted on May 8, 2024</p>
                    <a href="{{ route('theme.blog3') }}" class="btn btn-primary">Read More</a>
                </div>

            </div>
            <div class="col-md-6">
                <div class="blog-post">
                    <a href="{{ route('theme.blog4') }}"><img src="{{ asset('template Resourses/assets/blog/blog img4.webp') }}"
                            class="img-fluid" alt="Blog Image"></a>
                    <h3>Blueberry chauffeur service for business travel</h3>
                    <p class="text-muted">Posted on May 8, 2024</p>
                    <a href="{{ route('theme.blog4') }}" class="btn btn-primary">Read More</a>
                </div>

            </div>

        </div>
        </div>

        <div class="row mt-5">
            <div class="row">
                <div class="col-md-6">
                <div class="blog-post">
                    <a href="{{ route('theme.blog5') }}"><img src="{{ asset('template Resourses/assets/blog/luxury-chauffeur-service.jpg') }}" alt="Lluxury-chauffeur-service-in-london"class="img-fluid"></a>
                    <h3>Why Luxury Chauffeur Service in London is the Best Choice for You
                    </h3>
                    <p class="text-muted">Posted on Jul 26, 2024</p>
                    <a href="{{ route('theme.blog5') }}" class="btn btn-primary">Read More</a>
                </div>

            </div>
        </div>


    </div>
@endsection



@section('custromJs')
@endsection
