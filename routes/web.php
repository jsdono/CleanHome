<?php

use App\Livewire\Admin\AdminDashboardComponent;
use App\livewire\CleanHome;
use Illuminate\Support\Facades\Route;
use App\Livewire\Sprovider\SproviderDashboardComponent;
use App\Livewire\Customer\CustomerDashboardComponent;
use App\livewire\HomeComponent;
use App\livewire\ServiceCategoryComponent;
use App\livewire\Admin\AdminServiceCategoryComponent;
use App\livewire\Admin\AdminAddServiceCategoryComponent;
use App\livewire\Admin\AdminEditServiceCategoryComponent;


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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/',CleanHome::class)->name('home');
Route::get('/service-categories',ServiceCategoryComponent::class)->name('home.service_categories');

//For Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/customer/dashboard',CustomerDashboardComponent::Class)->name('customer.dashboard');
});

//Service Provider
Route::middleware(['auth:sanctum', 'verified', 'authsprovider'])->group(function () {
    Route::get('/sprovider/dashboard',SproviderDashboardComponent::Class)->name('sprovider.dashboard');
});


//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
   Route::get('/admin/dashboard',AdminDashboardComponent::Class)->name('admin.dashboard');
   Route::get('/admin/service-categories',AdminServiceCategoryComponent::class)->name('admin.service_categories');
   Route::get('/admin/service-categories/add',AdminAddServiceCategoryComponent::class)->name('admin.add_service_category');
   Route::get('/admin/service-category/edit/{category_id}',AdminEditServiceCategoryComponent::class)->name('admin.edit_service_category');
});


