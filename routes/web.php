<?php

use App\Http\Controllers\AddBusinessController;
use App\Http\Controllers\Api\BusinessController;
use App\Http\Controllers\BusinessDetailsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\BusinessDetail;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Dashboard\Business\Create;
use App\Http\Livewire\Dashboard\Categories\Create as CategoriesCreate;
use App\Http\Livewire\Dashboard\ManageBusinessesView;
use App\Http\Livewire\Dashboard\ManageCategoryView;
use App\Http\Livewire\Dashboard\ManageReviewsView;
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
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('/search', [CategoriesController::class, 'search'])->name('search');
Route::get('/business/{id}',[BusinessDetailsController::class, 'index'])->name('business-detail');

// Posts
Route::post('/business-registration-submission', [AddBusinessController::class, 'store'])->name('biz-store');

// Auths
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/write-a-review/{id}', WriteReview::class)->name('write-review');
    
    Route::get('/manage-reviews', ManageReviewsView::class)->name('manage-reviews');
    
    
    Route::get('/manage-categories', ManageCategoryView::class)->name('manage-categories');
    Route::get('/create-a-category', CategoriesCreate::class)->name('create-category');


    Route::get('/manage-business', ManageBusinessesView::class)->name('manage-business');
    Route::get('/create-business', Create::class)->name('create-business');

    
    Route::resource('businesses', BusinessController::class);
});
