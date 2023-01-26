<?php

use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'developers'], function () {
    Route::get('/', [DeveloperController::class, "getDeveloperList"])->name("developer-list");
    Route::get('/{developer}', [DeveloperController::class, "getDeveloperDetail"])->name("developer-detail");
});
