<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/about', [App\Http\Controllers\general\GeneralPageController::class, 'showAboutPage'])->name('general.about');
Route::get('/contact', [App\Http\Controllers\general\GeneralPageController::class, 'showContactPage'])->name('general.contact');
Route::get('/menu', [App\Http\Controllers\general\GeneralPageController::class, 'showMenuPage'])->name('general.menu');
Route::get('/gallery', [App\Http\Controllers\general\GeneralPageController::class, 'showGalleryPage'])->name('general.gallery');
Route::get('/admintop', [App\Http\Controllers\admin\AdminPageController::class, 'showTopPage'])->name('admin.top');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
