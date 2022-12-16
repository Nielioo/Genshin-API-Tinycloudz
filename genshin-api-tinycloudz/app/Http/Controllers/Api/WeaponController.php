<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeaponController extends Controller
{
    public function index(ApiRequest $request)
    {
        $response = Http::GET('https://api.genshin.dev/weapons');

        $data = json_decode($response->body());

        return $data;
    }
}
