@extends('layouts.app')

@section('meta_title', ' Elegant wedding cars near me | Blueberry Chauffeur ')
@section('meta_desc',
    'Make your wedding day unforgettable with Blueberry Chauffeur s luxurious wedding car hire in London. Book your wedding chauffeur London now.')

@section('coustomCss')
<style>
    h2{
    color: #000000 !important;
    font-size: 30px !important;
    font-weight: 800 !important;
    line-height: 34px !important;
    margin-bottom: 20px !important;
}
</style>

@endsection


@section('content')


    <div class="image-container services">
        <img src="{{ asset('template Resourses/assets/wedding/1.webp') }}" alt="wedding services" class="responsive-image">
        <div class="text-overlay">
            <h1 class="mb-4 pb-3 animated slideInDown text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0,0.7)">Exclusive
                Wedding Chauffeur Hire</h1>
            <a href="{{ route('theme.reservation') }}" class="btn header-buttn py-3 px-5 animated slideInDown">Book Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">

                    <h2>Wedding chauffeur service</h2>
                </div>
                <p>
                Let us take care of your wedding day exceptionally because it is a day with a great attachment to emotions and sentiments. On a precise day when you must travel somewhere, transportation is a serious thing to manage. For your special day, let us worry about traveling from one place to another for your band for your guess. You must book a wedding chauffeur service from our company and leave the rest to us. Envisage entering in style with our luxurious wedding chauffeur service, a comfortable and perfect entrance by creating an unforgettable memory of your wedding day. We will add a touch of punctuality and troubleless travel for you.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">

                    <h2>Wedding car hire near me</h2>
                </div>
                <p>
                Wedding chauffeur service is not only a ride; it is more than you have to consider. Our company will take care of the wedding details, including the design of an elegant and perfect wedding car. They are punctual and will ensure your arrival at the venue on time. Our wedding car hire near me will give you peace of mind and grace.

                </p>
            </div>
        </div>
    </div>
    <div class="container overflow-hidden my-md-5">
    <div class="row about-section">
        <div class="col-lg-6 col-sm-12 mb-5 mb-lg-0 content-column">
            <ol class="alternating-colors text">

                    <h4>Luxury and comfort</h4>
                    <p>

Step out in a meticulously well-maintained luxury car, the essence of style and suavness. Our wedding chauffeur service provides transportation, takes care of your things, and makes your royal arrival at the wedding venue. We will ensure you and your belongings are safe with us.
                    </p>

                    <h4> Punctual service</h4>
                    <p>

With our wedding chauffeur service, you will receive a monarch's arrival at the venue. You can rely on our timekeeping and professional service. We will ensure your stunning entrance on our wedding and reception day and abolish any last-moment transportation tension.
                    </p>

                    <h4>Variety of vehicles</h4>
                    <p>

Our wedding chauffeurs are not only drivers; they will be your partners. They will be dressed in the perfect attire; they understand the importance of your momentous occasion. They will be available 24/7 to help and give you services from wedding preparation to wedding reception and from wedding ritual to closing day.
                    </p>

            </ol>
        </div>
        <div class="image-column mt-5 mt-lg-0 col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
                <figure class="image-1">
                    <a class="lightbox-image" data-fancybox="images">
                        <img src="{{ asset('template Resourses/assets/wedding/5.webp') }}" class="img-fluid" alt="Gatwick Airport Transfer">
                    </a>
                </figure>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 overflow-hidden my-md-5">
    <div class="row about-section">
        <div class="image-column col-lg-6 mb-3 col-md-12 col-sm-12">
            <div class="inner-column">
                <figure class="image-1">
                    <a class="lightbox-image" data-fancybox="images">
                        <img src="{{ asset('template Resourses/assets/wedding/2.webp') }}" class="img-fluid" alt="Heathrow Airport Transfer">
                    </a>
                </figure>
            </div>
        </div>

         <div class="col-lg-6 col-sm-12 mb-lg-0 content-column">
            <!-- <h3 class="mt-4">List of services in London airport transfer service:</h3> -->
            <ol class="alternating-colors text">
                     <h4 class="mt-5 mt-md-1"> Professional chauffuers</h4>
                    <p>


Our wedding chauffeurs are not only drivers; they will be your partners in ensuring an outstanding wedding day. They will be dressed in the perfect attire; they understand the importance of your momentous occasion. They will be available 24/7 and also help you with the wedding preparation and give you services from wedding preparation to wedding reception and from wedding ritual to closing day.

                    <h4>Wedding car decoration</h4>
                    <p>


Our wedding car hire near me service will also add an elegant touch to your royal day. Our company provides a customized look and many options for wedding car decoration to match your wedding theme.
Finding the perfect car for hire near me can be hectic, but for you, here we are. Our company offers a well-embracing wedding chauffeur service to satisfy your needs.
                    </p>
            </ol>
        </div>
    </div>
    <div class="row about-section pt-0 pt-lg-5">

    <div class="col-lg-6 content-column mt-5 mt-lg-0 mb-0">


<ol class="alternating-colors text ">

<h4>Options for you</h4>
        <p>
We have a range of wedding car hires that suit you according to your special day needs, style, and budget. Whatever you care for, like a modern or classic touch, we have ideal care for you.
</p>

        <h4>One-to-one service</h4>
        <p>
Our professional wedding chauffeurs will assist you with all your wedding care decoration demands and recommend the ideal options for optional decoration.
</p>

        <h4>Competitive rates</h4>
        <p>
We offer you a competitive rate for a wedding chauffeur service, which will be the best one you get for the best days of your life
</p>

</ol>
</div>
<div class="image-column col-lg-6 col-md-12 col-sm-12 mt-5">
    <div class="inner-column mt-4">

        <figure class="image-1"><a class="lightbox-image" data-fancybox="images"><img
                    src="{{ asset('template Resourses/assets/wedding/3.webp') }}" class="img-fluid"
                    alt="Best business chauffeur in London"></a></figure>

    </div>
</div>




</div>

    </div>

    </div>



    {{-- end swiper container --}}

     {{-- service card --}}
     <section class="container_1 overflow-hidden">
        <section class="card__container">
            <div class="card__bx" style="--clr: var(--yellow-color) ">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Promptness</h3>
                        <p>
Our chauffeurs are punctual and always ready to go with you to your destination. Our drivers will be with you all the time of wedding decided timeline.
</p>
                        <a href="{{ route('theme.reservation') }} " class="btn">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card__bx" style="--clr:#ff9900">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Go-head cost</h3>
                        <p>

Our <a href="https://blueberrychauffeur.co.uk/">blueberry company </a>offers wedding car service within your budget and never let you down in font of your guests. Be relax and stay happy with our service.
</p>

</p>
<a href="{{ route('theme.reservation') }}" class="btn">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card__bx" style="--clr: var(--yellow-color) ">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="card__content">
                        <h3>Chauffeur details</h3>
                        <p>

As you book your rides we will give you all the details like photo, liscence picture etc of our chauffeur of those who will assist you in your special days.
</p>
<a href="{{ route('theme.reservation') }}" class="btn">Book Now</a>
                    </div>
                </div>
            </div>


        </section>
    </section>
    {{-- end services --}}
    {{-- why choose  --}}
    <div class="container mb-5 choose">
        <div class="row">
            <h2 class="text-center mt-20" style="margin-top:60px; padding-bottom:60px;">Why choose Blueberry chauffeurs company</h2>
        </div>
        <div class="row about-section">
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column h-50 mt-3">

                    <figure class="image-1"><a class="lightbox-image" data-fancybox="images"><img
                                src="{{ asset('template Resourses/assets/wedding/4.webp') }}" class="img-fluid"
                                alt="Why Choose Us"></a></figure>

                </div>
            </div>
            <div class="col-lg-6 content-column mt-5 mt-lg-0 mb-0">


                <ol class="alternating-colors text ">
                        <p>
                        Never get an ordinary transportation service on your extraordinary day of life. Contact our company and let us care for you and provide you with a perfect wedding chauffeur service. Please provide details about your wedding venue, date, time, and everything with us. Let have your day best one with our Blueberry chauffeurs company. Our Blueberry chauffeurs company also give a luxury <a style="text-decoration: underline;" href="https://blueberrychauffeur.co.uk/services/london-airport-transfer">luxury airport transfer</a> in London, as well as wedding chauffeur service.

           </div>
        </div>
    </div>
@endsection


@section('coustomJs')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
            },
        });
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
    </script>
@endsection
