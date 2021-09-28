<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\dataSantriController;
use App\Http\Controllers\DataPengurusController;
// use App\Models\Santri;
// use App\Models\pengurus;
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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// Route::get('/santri', function () {
//     return view('santri', [
//         "title" => "Santri"
//     ]);
// });

// Route::get('/pengurus', function () {
//     return view('pengurus',[
//         "title" => "Pengurus"
//     ]);
// });

Route::get('/santri',[dataSantriController::class, 'index']);

Route::get('/pengurus',[DataPengurusController::class, 'index']);