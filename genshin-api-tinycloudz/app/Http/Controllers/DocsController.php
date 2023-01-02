<?php

namespace App\Http\Controllers;

use App\Models\UserApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocsController extends Controller
{
    public function index() {
        $apiKey = "{YOUR_API_KEY}";

        if (Auth::check()) {
            $username = Auth::user()->name;
            $apiKey = UserApiKey::getApiKeyByUserId(Auth::id())->api_key;
            return view('docs', compact('username', 'apiKey'));
        }

        return view('docs', compact('apiKey'));
    }
}
