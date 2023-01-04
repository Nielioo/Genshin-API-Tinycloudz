<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NationController extends Controller
{
    public function index(ApiRequest $request)
    {
        $response = Http::GET('https://api.genshin.dev/nations');

        $data = json_decode($response->body());

        return $data;

    }

    public function showById (Request $request)
    {
        $account_id = $request->route('accountId');
    }

    public function show(ApiRequest $request, $account_id)
    {
        $response = Http::GET('https://api.genshin.dev/nations/'.$account_id);

        $data = json_decode($response->body());

        return $data;
    }
}
