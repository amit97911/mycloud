<?php

use App\Http\Controllers\UploadHandler;
use App\Http\Controllers\HomeController;
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
    $data['active'] = "home";
    return view('home.index', $data);
})->name('home-index');


Route::get('shared', function () {
    $data['active'] = "shared";
    return view('welcome', $data);
})->name('shared-index');



Route::get('download', [HomeController::class, 'index'])->name('download');

Route::get('upload', [UploadHandler::class, 'index'])->name('upload-index');
Route::post('upload', [UploadHandler::class, 'upload']);
