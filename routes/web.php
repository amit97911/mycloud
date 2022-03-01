<?php

use App\Http\Controllers\UploadHandler;
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
    return view('welcome', $data);
})->name('home-index');

Route::get('upload', [UploadHandler::class, 'index'])->name('upload-index');
Route::post('upload', [UploadHandler::class, 'upload']);
