<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
