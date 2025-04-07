<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomizeTripController;
use App\Http\Controllers\EmailSubscriptionController;
use App\Http\Controllers\FriendlyVersionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TripInquiryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Clear Cache
Route::get('/cache-clear', function () {
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return 'Go to >> <a href="' . route('home') . '" style="color: blue;">Home</a>';
})->name('cache.clear');

Route::group(['middleware' => ['web']], function () {
    // Home Page
    Route::get('/', function () {
        $home = new PageController;
        return $home->index('home');
    })->name('home');

    // Welcome Page
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    // // Contact Route
    // Route::post('contact/send', [ContactController::class, 'send'])->name('contacts.send');

    // // Blog
    // Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    // Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');
    
    // // Trip Route
    // Route::get('/trips', [TripController::class, 'index'])->name('trips.index');
    // Route::get('/trips/activity-preference/{slug}', [TripController::class, 'getTripsByActivePreference'])->name('trips.activityPreference');
    // Route::get('/trips/destination/{slug}', [TripController::class, 'getTripsByDestination'])->name('trips.destination');
    // Route::get('/trip/{slug}', [TripController::class, 'show'])->name('trips.show');

    // // Friendly Version Trip
    // Route::get('/friendly-version/trips/{slug}', [FriendlyVersionController::class, 'showTrip'])->name('friendlyVersion.trips.show');

    // // Trip Booking Forms
    // Route::get('trip/{slug}/booking/form/index', [BookingController::class, 'index'])->name('booking.form.index');
    // Route::post('trip/{slug}/booking/form/send', [BookingController::class, 'send'])->name('booking.form.send');

    // Route::get('fix-departure/trip/{slug}/booking/form', [BookingController::class, 'fixDepartureTripBookingForm'])->name('fixDeparture.trip.booking.form');
    // Route::post('fix-departure/trip/{slug}/booking/send', [BookingController::class, 'fixDepartureTripBookingFormSend'])->name('fixDeparture.trip.booking.form.send');
    
    // // Customize Trip
    // Route::post('customize-trip/send', [CustomizeTripController::class, 'send'])->name('customizetrip.send');

    // // Trip Inquiry Route
    // Route::post('trip-inquiry/send', [TripInquiryController::class, 'send'])->name('inquiry.send');

    // // Reviw Form
    // Route::post('trip/review/send', [ReviewController::class, 'send'])->name('trip.review.send');

    // // Email Subscription
    // Route::post('/app/newsletter/subscribe', [EmailSubscriptionController::class, 'subscribe'])->name('email.subscribe');

    // // Update Ajax Route
    // Route::post('/customize-trip/status-update', [CustomizeTripController::class, 'statusUpdate'])->name('customizeTrip.status.update');
});

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => '\App\Http\Controllers\PageController@index'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
