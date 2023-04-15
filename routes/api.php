<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\API\ImageUploadController;
use App\Http\Controllers\API\VideoUploadController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/article-chart', [HomeController::class, 'apiTest']);

// Image Action
Route::group(['prefix' => 'image'], function () {
    Route::get('/', [ImageUploadController::class, 'index']);
});

// Video Action
Route::group(['prefix' => 'video'], function () {
    Route::get('/', [VideoUploadController::class, 'index']);
});
