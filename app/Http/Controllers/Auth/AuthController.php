<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Services\AuthSocialiteService;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        Session::put('current_url', URL::previous());
        return AuthSocialiteService::redirectToProvider($provider);
    }

    public function handleProviderCallback($provider)
    {
        return AuthSocialiteService::handleProviderCallback($provider, Session::get('current_url'));
    }
}
