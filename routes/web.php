<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CareServiceController;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\FaqController;

use App\Http\Controllers\EmailController;

use App\Http\Controllers\PageController;

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

Route::GET('/our-testimonials', [SiteController::class,'testimonial'])->name('testimonial');

Route::GET('/our-story', [SiteController::class,'story'])->name('story');

Route::GET('/tips', [SiteController::class,'tip'])->name('tip');

Route::GET('/faqs', [SiteController::class,'faq'])->name('main.faq');

Route::GET('/our-team', [SiteController::class,'team'])->name('our-team');

Route::GET('/contact-us', [SiteController::class,'contact'])->name('contact');

Route::GET('/services/{slug}', [SiteController::class,'services'])->name('services');

Route::post('/submit-form',[EmailController::class,'send'])->name('submit-form');

Route::post('/update-data', [PageController::class,'updateStatus'])->name('update-data');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::POST('/update', [CareServiceController::class,'update'])->name('care.update');

    Route::GET('/{slug}/faqs', [FaqController::class,'index'])->name('homepage.faq');

    Route::GET('/our-team', [PageController::class,'page'])->name('team');

    Route::POST('faq/add', [FaqController::class,'add'])->name('add');

    Route::POST('update/{id}', [PageController::class,'update'])->name('page.update');

});


