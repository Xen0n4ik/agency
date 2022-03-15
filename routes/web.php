<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FixController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\UserAgreementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleTourController;


Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/cities', [CitiesController::class, 'index'])->name('cities_index');

Route::get('/comments_service', [CommentsController::class, 'serv_com_print'])->name('comments_serv_print');

Route::post('/add_comments', [CommentsController::class, 'add_serv'])->name('comments_add');

Route::post('/add_comments_tour', [CommentsController::class, 'add_tour'])->name('comments_tour_add');

Route::get('/write_comment/{ID_TOUR}', [CommentsController::class, 'index'])->name('write_comment_index');

Route::get('/about', [AboutController::class, 'index'])->name('about_index');

Route::get('/tours/{ID_CITY}/{ID_TOUR}', [ToursController::class, 'tour_get'])->name('tour_get');

Route::get('/tours/{ID_CITY}', [ToursController::class, 'tours_city_get'])->name('tours_city_get');

Route::get('/tours', [ToursController::class, 'index'])->name('tours_index');

Route::get('/example_tour', [ExampleTourController::class, 'index'])->name('example_tour_index');

Route::get('/booking', [BookingController::class, 'index'])->name('booking_index');

Route::get('/fix_page', [FixController::class, 'index'])->name('fix_index');

//Route::get('/accord', [AgreementController::class, 'index'])->name('agreement_index');

//Route::get('/user_agreement', [UserAgreementController::class, 'index'])->name('user_agreement_index');

Route::post('/login', [LoginController::class, 'login'])->name('login_account');

Route::get('/account', [AccountController::class, 'index'])->name('account_index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
