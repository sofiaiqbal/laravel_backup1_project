<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormUserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\XmlExportController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[FormUserController::class,'index']);
Route::post('form-submit',[FormUserController::class,'store']);

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('see-more/{id}', [HomeController::class, 'detail']);

/*Route::get('details/{id}', [HomeController::class, 'detailform']);*/
// routes/web.php or routes/api.php
Route::get('/download-xml', [XmlExportController::class,'downloadXml']);

