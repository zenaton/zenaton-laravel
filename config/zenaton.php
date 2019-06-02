<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Zenaton Application ID
    |--------------------------------------------------------------------------
    |
    | This is the application identifier that was generated for you when you
    | registered on Zenaton, or when you created an additional application.
    | You can find it on: https://app.zenaton.com/api
    |
    */

    'app_id' => env('ZENATON_APP_ID', null),

    /*
    |--------------------------------------------------------------------------
    | Zenaton API Token
    |--------------------------------------------------------------------------
    |
    | This is one of the API Tokens that is allowed to access your application.
    | You can find the list of your application's API tokens on:
    | https://app.zenaton.com/api.
    |
    */

    'api_token' => env('ZENATON_API_TOKEN', null),

    /*
    |--------------------------------------------------------------------------
    | Zenaton Application environment
    |--------------------------------------------------------------------------
    |
    | This configuration options determines the environment that will
    | be used to run you background jobs and workflows.
    |
    */

    'app_env' => env('ZENATON_APP_ENV', 'dev'),

];
