<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public function index(ApiRequest $request)
    {
        $response = Http::GET('https://api.genshin.dev/characters');

        $data = json_decode($response->body());

        return $data;
    }
}