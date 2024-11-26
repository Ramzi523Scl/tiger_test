<?php

use App\Http\Controllers\Api\V1\ProxyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {

	Route::prefix('numbers')->controller(ProxyController::class)->group(function () {

		Route::get('', 'getNumber');

		Route::prefix('{activation_id}')->group(function () {
			Route::get('sms', 'getSms');
			Route::get('status', 'getStatus');
			Route::delete('', 'cancelNumber');
		});

	});

});


