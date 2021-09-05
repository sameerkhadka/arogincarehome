<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CareServiceController;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\FaqController;
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

Route::GET('/blogs', [SiteController::class,'blog'])->name('blogs');

Route::GET('/blogs/{slug}', [SiteController::class,'blog_detail'])->name('blog.detail');

Route::GET('/events', [SiteController::class,'event'])->name('events');

Route::GET('/events/{slug}', [SiteController::class,'event_detail'])->name('events.detail');

Route::GET('/testimonial', [SiteController::class,'testimonial'])->name('testimonial');

Route::GET('/our-story', [SiteController::class,'story'])->name('story');

Route::GET('/our-team', [SiteController::class,'team'])->name('team');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::POST('/update', [CareServiceController::class,'update'])->name('care.update');

    Route::GET('/homepage/faqs', [FaqController::class,'homepage'])->name('homepage.faq');

    Route::POST('faq/add', [FaqController::class,'add'])->name('add');
});


