<?php


Route::get(config('discourse-sso.sso_route'), ["middleware" => "auth", function () {
    $sso = new Cviebrock\DiscoursePHP\SSOHelper();

    $sso->setSecret(config('discourse-sso.secret'));

    $payload = request()->get('sso');
    $signature = request()->get('sig');

    if (!($sso->validatePayload($payload, $signature))) {
        abort(403); //Forbidden
    }

    $nonce = $sso->getNonce($payload);

    $userId = auth()->user()->{config('discourse-sso.user_fields.id_field')};
    $userEmail = auth()->user()->{config('discourse-sso.user_fields.email_field')};

    $extraParameters['username'] = config('discourse-sso.user_fields.username_field') ?
        auth()->user()->{config('discourse-sso.user_fields.username_field')} : null;

    $extraParameters['name'] = config('discourse-sso.user_fields.full_name_field') ?
        auth()->user()->{config('discourse-sso.user_fields.full_name_field')} : null;

    $extraParameters['avatar_url'] = config('discourse-sso.user_fields.avatar_url_field') ?
        auth()->user()->{config('discourse-sso.user_fields.avatar_url_field')} : null;

    $extraParameters['avatar_force_update'] = config('discourse-sso.avatar_force_update');

    $extraParameters['suppress_welcome_message'] = config('discourse-sso.suppress_welcome_message');


    $query = $sso->getSignInString($nonce, $userId, $userEmail, $extraParameters);

    return redirect(config('discourse-sso.discourse_url').'/session/sso_login?' . $query);
}]);