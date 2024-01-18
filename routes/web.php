<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\TonerController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SiteOptionsController;
use App\Http\Controllers\Auth\AdminsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\SlidesController;
use App\Http\Controllers\PostsController;
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

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', HomeController::class)->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::put('roles/{role}/change-activation', [RoleController::class, 'changeActivation'])->name('roles.active');
});

