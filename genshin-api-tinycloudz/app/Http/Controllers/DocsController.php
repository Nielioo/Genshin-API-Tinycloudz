<?php

namespace App\Http\Controllers;

use App\Models\UserApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocsController extends Controller
{
    public function index() {

        // ! This is used for development only, remove this on release
        // Return API key authenticated
        if (Auth::check()) {
            $apiKey = UserApiKey::getApiKeyByUserId(Auth::id())->api_key;
            return view('docs', compact('apiKey'));
        }

        return view('docs');
    }
}
