<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Logout;
use App\Http\Livewire\UserManager;
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

Route::get('/', UserManager::class)->middleware('auth');

Route::get('/login', Login::class)->name('login');
Route::get('/logout', Logout::class)->name('logout');
