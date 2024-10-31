<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'toHome'])->name('home');

Route::get('/home', [PageController::class, 'searchHeroes'])->name('searchHeroes');

Route::get('/hero/{hero_id}', [PageController::class, 'toHero'])->name('hero');

Route::get('/role/{role_id}', [PageController::class, 'toRole'])->name('role');


