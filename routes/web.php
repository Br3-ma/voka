<?php

use App\Http\Controllers\AddBusinessController;
use App\Http\Controllers\Api\BusinessController;
use App\Http\Controllers\BusinessDetailsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\BusinessDetail;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Dashboard\Business\Create;
use App\Http\Livewire\Dashboard\Business\Update;
use App\Http\Livewire\Dashboard\Categories\Create as CategoriesCreate;
use App\Http\Livewire\Dashboard\ManageBusinessesView;
use App\Http\Livewire\Dashboard\ManageCategoryView;
use App\Http\Livewire\Dashboard\ManagePaymentsView;
use App\Http\Livewire\Dashboard\ManageReviewsView;
use App\Http\Livewire\Dashboard\ManageSubscriptionView;
use App\Http\Livewire\Dashboard\ManageTagView;
use App\Http\Livewire\Dashboard\Subscription\Create as SubscriptionCreate;
use App\Http\Livewire\Dashboard\Tags\Create as TagsCreate;
use App\Http\Livewire\Packages;
use App\Http\Livewire\Users\ChangePassword;
use App\Http\Livewire\Users\EditProfile;
use App\Http\Livewire\Users\MyCollection;
use App\Http\Livewire\Users\MyProfile;
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
Route::get('/business/{id}/{rev?}',[BusinessDetailsController::class, 'index'])->name('business-detail');

// Posts
Route::post('/business-registration-submission', [AddBusinessController::class, 'store'])->name('biz-store');

// Auths
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('/write-a-review/{id}', WriteReview::class)->name('write-review');
    
    Route::get('/manage-reviews', ManageReviewsView::class)->name('manage-reviews');

    Route::get('/my-profile', MyProfile::class)->name('my-profile');
    Route::get('/my-collection', MyCollection::class)->name('my-collection');
    Route::get('/profile/change-password', ChangePassword::class)->name('change-pass');
    Route::get('/profile/edit-info', EditProfile::class)->name('edit-info');
    
    
    Route::get('/manage-categories', ManageCategoryView::class)->name('manage-categories');
    Route::get('/create-a-category', CategoriesCreate::class)->name('create-category');
    
    Route::get('/manage-tags', ManageTagView::class)->name('manage-tags');
    Route::get('/create-tags', TagsCreate::class)->name('create-tag');

    Route::get('/manage-business', ManageBusinessesView::class)->name('manage-business');
    Route::get('/create-business', Create::class)->name('create-business');


    Route::get('/manage-subscriptions', ManageSubscriptionView::class)->name('manage-subscriptions');
    Route::get('/create-subscriptions', SubscriptionCreate::class)->name('create-subscription');


    Route::get('/manage-payments', ManagePaymentsView::class)->name('manage-payments');

    
    Route::resource('businesses', BusinessController::class);
    Route::post('update-biz', [BusinessController::class, 'update'])->name('biz.update');
    Route::get('edit-biz/{id}' , Update::class)->name('biz.edit');
});
