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

    public function showById (Request $request)
    {
        $account_id = $request->route('accountId');
    }

    public function show(ApiRequest $request, $account_id)
    {
        $response = Http::GET('https://api.genshin.dev/characters/'.$account_id);

        $data = json_decode($response->body());

        return $data;
    }
}