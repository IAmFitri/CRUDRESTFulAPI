<?php

use App\Http\Controllers\DataController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data', [DataController::class, 'index']);
Route::post('/data/store', [DataController::class, 'store']);
Route::post('/data/update/{id}', [DataController::class, 'update']);
Route::get('/data/delete/{id}', [DataController::class, 'delete']);
Route::get('/data/getDataById/{id}', [DataController::class, 'getDataById']);
