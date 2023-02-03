<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '899433165137-4rptm2g9k1t1r1lstuve0b50cain856o.apps.googleusercontent.com',
        'client_secret' => 'o0_gfd8kbEr8GI9tTXUipdkH',
        'redirect' => 'http://localhost/kaebor/ecommerce/callback/google',
    ], 
    'facebook' => [
        'client_id' => '275708197370739',
        'client_secret' => 'a1dc0d09aeb9068e64e7310bf20800f6',
        'redirect' => 'http://localhost/kaebor/ecommerce/callback/facebook',
    ], 

];
