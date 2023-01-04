<?php

use App\Http\Controllers\Api\WeaponController;
use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\ArtifactsController;
use App\Http\Controllers\Api\ElementController;
use App\Http\Controllers\Api\EnemyController;
use App\Http\Controllers\Api\NationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/weapons', WeaponController::class);
Route::apiResource('/characters', CharacterController::class);
Route::get('/characters/{account_id}/gacha-splash', [CharacterController::class, 'showGachaSplash']);
Route::apiResource('/artifacts', ArtifactsController::class);
Route::apiResource('/elements', ElementController::class);
Route::apiResource('/enemies', EnemyController::class);
Route::apiResource('/nations', NationController::class);
