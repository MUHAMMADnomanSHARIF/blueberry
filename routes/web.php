<?php

use Carbon\Carbon;
use App\Http\Controllers\fleetController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use Spatie\Sitemap\Sitemap;


use Spatie\Sitemap\Tags\Url;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('theam.index');
})->name('theme.index');
Route::get('/about-us', function () {
    return view('theam.about');
})->name('theme.about');

Route::redirect('/aboutus', '/about-us');

Route::get('/service', function () {
    return view('theam.service');
})->name('theme.service');

Route::group(['prefix' => 'services'], function () {
    Route::get('/london-airport-transfer', function () {
        return view('theam.airport');
    })->name('theme.airport');
    Route::get('/event-transportation', function () {
        return view('theam.event');
    })->name('theme.event');
    Route::get('/business-chauffeur-service', function () {
        return view('theam.business');
    })->name('theme.business');
    Route::get('/wedding-chauffeur-hire', function () {
        return view('theam.wedding');
    })->name('theme.wedding');
    Route::get('/private-london-tours', function () {
        return view('theam.tours');
    })->name('theme.tours');
});
Route::redirect('/tours', '/services/private-london-tours');
Route::redirect('/services/tour', '/services/private-london-tours');
Route::redirect('/wedding', '/services/wedding-chauffeur-hire');
Route::redirect('/services/wedding', '/services/wedding-chauffeur-hire');
Route::redirect('/services/events', '/services/event-transportation');
Route::redirect('/events', '/services/event-transportation');
Route::redirect('/business', '/services/business-chauffeur-service');
Route::redirect('/services/business', '/services/business-chauffeur-service');
Route::redirect('/airport', '/services/london-airport-transfer');
Route::redirect('/services/airport-transfer', '/services/london-airport-transfer');

Route::get('/contact-us', function () {
    return view('theam.contact');
})->name('theme.content');
Route::redirect('/contactus', '/contact-us');
Route::get('/fleet', function () {
    return view('theam.fleet');
})->name('theme.fleet');
Route::get('select-your-car', [GoogleController::class, 'calculate'])->name('theme.selectYourCar');
Route::post('select-your-car', [GoogleController::class, 'calculate'])->name('theme.selectYourCar');
Route::get('google-autocomplete', [GoogleController::class, 'index']);
Route::get('/reservation', function () {
    return view('theam.reservation');
})->name('theme.reservation');
Route::get('/blog', function () {
    return view('theam.allblogs');
})->name('theme.allblogs');
Route::get('/blog/explore-the-new-paths-with-blueberry-chauffeur', function () {
    return view('theam.singleblog');
})->name('theme.sblog');
Route::get('/blog/why-chauffeur-services-are-the-perfect-choice-for-luxury-travel', function () {
    return view('theam.single-blog-2');
})->name('theme.blog2');
Route::get('/blog/best-wedding-car-hire-service-in-the-uk-at-coupling-day', function () {
    return view('theam.single-blog-3');
})->name('theme.blog3');
Route::get('/blog/blueberry-chauffeur-service-for-business-travel', function () {
    return view('theam.single-blog-4');
})->name('theme.blog4');
Route::get('/blog/why-luxury-chauffeur-service-in-london-is-the-best-choice-for-you', function () {
    return view('theam.single-blog-5');
})->name('theme.blog5');



Route::get('book', [GoogleController::class, 'booking']);
Route::post('fare', [GoogleController::class, 'fare']);
Route::post('booking', [fleetController::class, 'store'])->name('booking.store');
Route::get('payment', [fleetController::class, 'payment']);


Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe')->name('stripe.index');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::get('/cache', function () {

    Artisan::call('cache:clear');
    dd('cache is clear');
});


// SitemapGenerator::create('https://blueberrychauffeur.co.uk/')->writeToFile(public_path('sitemap.xml'));

Route::get('/generate-sitemap', function () {

    Sitemap::create()

        ->add(Url::create('/')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

        ->add(Url::create('/about-us')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))
        ->add(Url::create('services/london-airport-transfer')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

        ->add(Url::create('services/event-transportation')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

        ->add(Url::create('services/business-chauffeur-service')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

        ->add(Url::create('services/wedding-chauffeur-hire')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))
        ->add(Url::create('reservation')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

        ->add(Url::create('services/private-london-tours')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

        ->add(Url::create('contact-us')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

        ->add(Url::create('fleet')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

        ->add(Url::create('blog')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

            ->add(Url::create('blog/why-chauffeur-services-are-the-perfect-choice-for-luxury-travel')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))

        ->add(Url::create('blog/explore-the-new-paths-with-blueberry-chauffeur')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))
        ->add(Url::create('blog/best-wedding-car-hire-service-in-the-uk-at-coupling-day')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))
        ->add(Url::create('blog/explore-the-new-paths-with-blueberry-chauffeur')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))
            ->add(Url::create('/blog/why-luxury-chauffeur-service-in-london-is-the-best-choice-for-you')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))




        ->writeToFile(public_path('sitemap.xml'));
});
