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
     | This is the URL of your Discourse instance.
     |
     */

    "discourse_url" => "http://discourse.example.com",


    /*
    |--------------------------------------------------------------------------
    | Discourse SSO Route                                                     |
    |--------------------------------------------------------------------------
    |
    | Change this if you wish to change the route that is used for SSO.
    | A sane default has already been set for you.
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
     |
     */

    "user_fields" => [
        // REQUIRED FIELDS
        'id_field' => 'id',
        'email_field' => 'email',
        // OPTIONAL - if null, Discourse will make something up based on the email address
        'username_field' => null,
        'full_name_field' => 'name',
        'avatar_url_field' => 'image_url'
    ],

    /*
     |--------------------------------------------------------------------------
     | Advanced SSO Settings - Suppress Welcome Message                                                   |
     |--------------------------------------------------------------------------
     |
     | Discourse sends a Welcome message to all new users created by SSO.
     | Setting this value to true suppresses this message.
     |
     */
    "suppress_welcome_message" => false,

    /*
     |--------------------------------------------------------------------------
     | Advanced SSO Settings - Avatar Force Update                             |
     |--------------------------------------------------------------------------
     |
     | Discourse caches avatars.
     | Setting this value to true kills the cache when updating avatar_url.
     |
     */
    "avatar_force_update" => true

);