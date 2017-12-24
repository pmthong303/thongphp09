<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '157755724976455',
        'client_secret' =>'885c8199ce284a38f94b929296ed9285',
        'redirect' => 'http://localhost/Softech/public/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '141280540139-dt1k0fma7ia7qi8la5ofj0hjgm5t7kqn.apps.googleusercontent.com' ,
        'client_secret' => '87-7Ayv_bLCzPgm_GSblzMqA' ,
        'redirect' => 'http://localhost/Softech/public/auth/google/callback',
    ],

];
