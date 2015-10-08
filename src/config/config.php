<?php

return array(

    /*
     |--------------------------------------------------------------------------
     | Discourse SSO Settings                                                  |
     |--------------------------------------------------------------------------
     |
     | You can disable Discourse SSO simply by setting enable to false.
     |
     */

    "enabled" => true,

    /*
     |--------------------------------------------------------------------------
     | Discourse Instance URL                                                  |
     |--------------------------------------------------------------------------
     |
     | Tell SSO where to return your users to once they've authenticated.
     |
     */

    "discourse_url" => "http://example.discourse.com",

    /*
    |--------------------------------------------------------------------------
    | Discourse Instance URL                                                  |
    |--------------------------------------------------------------------------
    |
    | Tell SSO where to return your users to once they've authenticated.
    |
    */

    "sso_route" => "/discourse/sso",


    /*
     |--------------------------------------------------------------------------
     | Discourse SSO Secret                                                    |
     |--------------------------------------------------------------------------
     |
     | Set your discourse secret key either here or in your .env file.
     | This should be the same as what you have set in Discourse.
     |
     */

    "secret" => env('DISCOURSE_SSO_SECRET', "example-key"),


    /*
     |--------------------------------------------------------------------------
     | Discourse SSO User Fields                                               |
     |--------------------------------------------------------------------------
     |
     | This tells SSO what fields to look at on your User model.
     | This should be the same as what you have set in Discourse.
     |
     */

    "user_fields" => [
        // REQUIRED FIELDS
        'id_field' => 'id',
        'email_field' => 'email',
        // OPTIONAL - if null, Discourse will make something up based on the email address
        'username_field' => null,
        'full_name_field' => 'name'
    ],

);