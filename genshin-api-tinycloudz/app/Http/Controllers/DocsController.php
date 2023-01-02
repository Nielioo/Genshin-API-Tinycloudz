<?php

namespace App\Http\Controllers;

use App\Models\UserApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocsController extends Controller
{
    public function index() {
        $apiKey = "{YOUR_API_KEY}";

        // Return API key authenticated
        if (Auth::check()) {
            $apiKey = UserApiKey::getApiKeyByUserId(Auth::id())->api_key;
        }

        return view('docs', compact('apiKey'));
    }
}
