<?php
use App\Http\Controllers\loginController;
use App\Http\Controllers\doaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\jadwalSholatController;

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

Route::get('quran',[QuranController::class,'index']);
Route::get('quran/{id}',[QuranController::class,'indexId']);

Route::get('doa',[doaController::class,'index']);
Route::get('doa/{id}',[doaController::class,'indexId']);

Route::get('jadwal-sholat',[jadwalSholatController::class,'index']);
Route::get('jadwal-sholat/{id}',[jadwalSholatController::class,'indexId']);

Route::get('/login', function (){
    return view('login');
});