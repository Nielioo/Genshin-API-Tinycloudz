<?php

namespace App\Http\Controllers;

use App\Models\UserApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

        // ! This is used for development only, remove this on release
        // Return API key authenticated
        if (Auth::check()) {
            $apiKey = UserApiKey::getApiKeyByUserId(Auth::id())->api_key;
            return view('home', compact('apiKey'));
        }

        return view('home');
    }
}
