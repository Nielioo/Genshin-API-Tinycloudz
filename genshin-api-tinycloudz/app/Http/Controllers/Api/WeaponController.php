<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeaponController extends Controller
{
    public function index()
    {
        $response = Http::GET('https://api.genshin.dev/weapons');

        $success = $response->successful();
        $message = "List Weapon Data";
        $data = json_decode($response->body());

        $resource = new ApiResponse($success, $message, $data);
        return $resource;
    }
}
