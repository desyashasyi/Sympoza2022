<?php

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

Route::prefix('chat')->group(function() {
    Route::get('/', 'ChatController@index')->name('chat');
    Route::post('isi_pesan', [Modules\Chat\Http\Controllers\ChatController::class, 'isi_pesan']);
    Route::get('{NamaPenerima}', [Modules\Chat\Http\Controllers\ChatController::class, 'post'])->name('{NamaPenerima}');
});
