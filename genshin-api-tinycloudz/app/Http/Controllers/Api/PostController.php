<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index()
    {
        $response = Http::GET('https://api.genshin.dev/weapons');
        return new PostResource(true, 'List Weapon Data', json_decode($response->body()));
    }
}
