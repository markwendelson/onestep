<?php

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
    return redirect('/test');

});

Route::get('/test', function () {
    $settings = \DB::table('settings')->get();
    return view('index', ['settings' => $settings]);
})->name('index');


Route::get('/indexold', function () {
    return view('indexold');
})->name('indexold');


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/update-branch', [App\Http\Controllers\SettingsController::class, 'updateBranch'])->name('update.branch');
Route::post('/update-link', [App\Http\Controllers\SettingsController::class, 'updateLink'])->name('update.link');
Route::post('/update-chat-room-link', [App\Http\Controllers\SettingsController::class, 'updateChatRoomLink'])->name('update.chat-room-link');
Route::post('/update-kakaotalk', [App\Http\Controllers\SettingsController::class, 'updateKakaoTalk'])->name('update.kakaotalk');
Route::post('/update-codename', [App\Http\Controllers\SettingsController::class, 'updateCodeName'])->name('update.codename');
