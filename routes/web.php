<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CareServiceController;

use App\Http\Controllers\SiteController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::GET('/', [SiteController::class,'index'])->name('index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::POST('/update', [CareServiceController::class,'update'])->name('care.update');

});
