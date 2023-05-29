<?php

use App\Http\Controllers\AddBusinessController;
use App\Http\Controllers\Api\BusinessController;
use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\BusinessDetail;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Dashboard\ManageBusinessesView;
use App\Http\Livewire\Packages;
use App\Http\Livewire\WriteReview;
use Illuminate\Support\Facades\Route;

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

// Gets
Route::get('/',[WelcomeController::class, 'index'])->name('welcome');
Route::get('/subscription-packages', [AddBusinessController::class, 'firstStep'])->name('subscription');
Route::get('/business-registration', [AddBusinessController::class, 'secondStep'])->name('biz-reg');
Route::get('/categories', Categories::class)->name('categories');
Route::get('/business/{id}',BusinessDetail::class)->name('business-detail');

// Posts
Route::post('/business-registration-submission', [AddBusinessController::class, 'store'])->name('biz-store');

// Auths
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/write-a-review/{id}', WriteReview::class)->name('write-review');
    Route::get('/manage-business', ManageBusinessesView::class)->name('manage-business');
    Route::resource('businesses', BusinessController::class);
});
