<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebdevController;

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
    return redirect()->route('webdev.page');
});

Route::prefix('webdev')->group(function() {
    Route::get('/', [WebdevController::class, 'page'])->name('webdev.page');
});

