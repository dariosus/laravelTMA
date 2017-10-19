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
        'client_id' => '357156138040037',
        'client_secret' => 'b18579afeb876f67d1804b104c334115',
        'redirect' => 'http://localhost:8000/callback',
    ],

    'google' => [
        'client_id' => '439182274772-jg9as7rr1c78svgi27hdgqjl4s3005l6.apps.googleusercontent.com',
        'client_secret' => 'wopI3cuUDB7BagcawJPdnw7C',
        'redirect' => 'http://localhost:8000/callback',
    ],

];
