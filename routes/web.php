<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeekController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {

    if(Auth::user() != null) {
        return redirect('dashboard');
    }

    return inertia('home');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['validated']);

Route::post('/destroy', [UserController::class, 'destroy']);

Route::get('/week/{slug}', [WeekController::class, 'show'])->middleware(['validated']);


