<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | Base URL for the alchemy calls
    |
    */
    'url' => env('ALCHEMY_URL', 'http://access.alchemyapi.com/calls'),
	
    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | Enter your API key from the Alchemy service on Bluemix
    |
    */
	  'key' => env('ALCHEMY_API_KEY')
];