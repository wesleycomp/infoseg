<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FuncaoComponente;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//criadas para teste

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('profile', function () {
    return view('profile.edit');
})->name('profile.edit');

Route::get('users-index', function () {
    return view('user.index');
})->name('user.index');


Route::get('table-list', function () {
    return view('pages.table_list');
})->name('table');

Route::get('typography', function () {
    return view('pages.typography');
})->name('typography');


Route::get('icons', function () {
    return view('pages.icons');
})->name('icons');

Route::get('map', function () {
    return view('pages.map');
})->name('map');

Route::get('notifications', function () {
    return view('pages.notifications');
})->name('notifications');

Route::get('language', function () {
    return view('pages.language');
})->name('language');

Route::get('upgrade', function () {
    return view('pages.upgrade');
})->name('upgrade');


Route::get('funcao', function () {
    return view('admin.funcao');
})->name('funcao');


Route::get('especialidade_medica', function () {
    return view('admin.especialidade-medicas');
})->name('especialidade_medica');

