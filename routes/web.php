<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesttubeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function() {
    return view('stages.start');
});

Route::get('/colors', [TesttubeController::class, 'index']);

Route::get('/stage1', [TesttubeController::class, 'index']);

Route::get('/clear', function() {
    return view('stages.clear');
});