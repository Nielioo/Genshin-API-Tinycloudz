<?php

namespace App\Http\Controllers;

use App\Models\UserApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        if (Auth::check()) {
            $username = Auth::user()->name;
            return view('home', compact('username'));
        }

        return view('home');
    }
}
