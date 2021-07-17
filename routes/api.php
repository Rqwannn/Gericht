<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotalMenuController;
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

Route::post('/TambahMakanan', [TotalMenuController::class, 'TambahDataMakanan']);
Route::post('/TambahMinuman', [TotalMenuController::class, 'TambahDataMinuman']);
Route::post('/TambahDessert', [TotalMenuController::class, 'TambahDataDessert']);
Route::post('/UpdateMenuData', [TotalMenuController::class, 'UpdateMenuData']);
Route::post('/DeleteMenuData', [TotalMenuController::class, 'DeleteMenuData']);
