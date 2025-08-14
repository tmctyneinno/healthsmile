<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use Spatie\GoogleCalendar\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require __DIR__.'/admin.php';

// Route::get('/calendar', function(){
//     $e = Event::get();
   
    
//     dd($e[0]);
// });

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/services', [FrontendController::class, 'service'])->name('home.services');
Route::get('/services/{slug}', [FrontendController::class, 'serviceShow'])->name('home.services.show');
Route::get('/about', [FrontendController::class, 'about'])->name('home.about');
Route::get('/founder', [FrontendController::class, 'founder'])->name('home.founder');
Route::get('/booking', [FrontendController::class, 'booking'])->name('home.booking');
Route::post('/book-session', [BookingController::class, 'bookSession'])->name('home.book.session');

Route::get('/workshops', [FrontendController::class, 'workshops'])->name('home.workshops');

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/blog', [FrontendController::class, 'blog'])->name('home.blog');
Route::get('/blog/blog-details', [FrontendController::class, 'blogDetails'])->name('home.blog-single');
Route::get('/contact', [FrontendController::class, 'contact'])->name('home.contact');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('home.gallery');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
