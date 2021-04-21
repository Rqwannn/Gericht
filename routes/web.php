<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPassword;

// User

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrivateDiningController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\InputDinningController;

// Admin

use App\Http\Controllers\OrderSuccessController;
use App\Http\Controllers\OrderFailedController;
use App\Http\Controllers\MainAdminController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\TotalOrderController;
use App\Http\Controllers\TotalUserController;

use App\Http\Controllers\ApiMidtransController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/signIn', [LoginController::class, "signIn"]);
Route::get('/signUp', [RegisterController::class, "signUp"]);

Route::get('/guest', [LoginController::class, "guest"]);
Route::get('/logout', [LoginController::class, "logout"]);
Route::post('/login/validation', [LoginController::class, "validation"]);

Route::group(["middleware" => "check"], function () {
    Route::get('/', [HomeController::class, "index"])->name("home");
    Route::post('/updateFoto', [HomeController::class, "updateFoto"]);
    Route::get('/withoutPicture', [HomeController::class, "withoutPicture"]);
    Route::get('/about', [AboutController::class, "index"])->name("about");
    Route::get('/privatedining', [PrivateDiningController::class, "index"]);
    Route::get('/inputdining', [InputDinningController::class, "index"]);
    Route::get('/menu', [MenuController::class, "index"])->name("menu");
    Route::post('/pay', [MenuController::class, "Payment"]);
    Route::get('/order', [OrderController::class, "index"])->name("order");
    Route::get('/subscribe', [SubscribeController::class, "index"]);
    Route::get('/DeleteTable/{id}', [OrderController::class, "DeleteTableHistori"]);

    // Payment Gateway

    Route::post("/midtrans", [ApiMidtransController::class, "getSnapToken"])->name("apigetSnapToken");
    Route::post("/PremiumMember", [ApiMidtransController::class, "PremiumMember"])->name("PremiumMember");
    Route::post("/TablePayment", [ApiMidtransController::class, "TablePayment"])->name("TablePayment");
});

Route::group(["middleware" => "after"], function () {
    Route::get('/login', [LoginController::class, "index"])->name("login");
    Route::get('/register', [RegisterController::class, "index"])->name("register");
    Route::post('/register/tambah', [RegisterController::class, "tambah"]);

    Route::get('/ForgotPassword', [ForgotPassword::class, "index"]);
    Route::get('/ForgotPassword/VerifyEmail', [ForgotPassword::class, "EmailVerify"]);
});

Route::group(['middleware' => 'Cyber'], function () {
    Route::get('/orderSuccess', [OrderSuccessController::class, "index"]);
    Route::get('/orderFailed', [OrderFailedController::class, "index"]);
    Route::get('/dasbord', [MainAdminController::class, "index"])->name("dasbord");
    Route::get("/profileAdmin", [ProfileAdminController::class, "index"]);
    Route::get("/totalOrder", [TotalOrderController::class, "index"]);
    Route::get("/totalUser", [TotalUserController::class, "index"]);
    Route::get("/updateUser/{id}", [TotalUserController::class, "updateUserView"]);

    Route::get('/setData', [MainAdminController::class, "setData"]);
});
