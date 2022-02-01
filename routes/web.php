<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\DocumentController;

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

Route::get('/photo', [PhotoController::class, 'photo']);
Route::post('/photo', [PhotoController::class, 'photoSave']);

Route::get('/images', [ImagesController::class, 'images']);
Route::post('/images', [ImagesController::class, 'saveImages']);

Route::get('/document', [DocumentController::class, 'document']);
Route::post('/document', [DocumentController::class, 'saveDocument']);