<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    // Route::crud('activity-preference', 'ActivityPreferenceCrudController');
    // Route::crud('article', 'ArticleCrudController');
    // Route::crud('booking', 'BookingCrudController');
    Route::crud('country', 'CountryCrudController');
    // Route::crud('customize-trip', 'CustomizeTripCrudController');
    // Route::crud('destination', 'DestinationCrudController');
    // Route::crud('email-subscription', 'EmailSubscriptionCrudController');
    // Route::crud('equipment', 'EquipmentCrudController');
    // Route::crud('faq', 'FaqCrudController');
    // Route::crud('faq-category', 'FaqCategoryCrudController');
    // Route::crud('home-faq', 'HomeFaqCrudController');
    Route::crud('icon', 'IconCrudController');
    Route::crud('slider', 'SliderCrudController');
    // Route::crud('tag', 'TagCrudController');
    // Route::crud('team-member', 'TeamMemberCrudController');
    // Route::crud('team-member-category', 'TeamMemberCategoryCrudController');
    // Route::crud('testimonial', 'TestimonialCrudController');
    // Route::crud('trip', 'TripCrudController');

}); // this should be the absolute last line of this file
