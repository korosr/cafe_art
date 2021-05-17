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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/admintop', [App\Http\Controllers\admin\AdminPageController::class, 'showTopPage'])->name('admin.top');
    Route::get('/admin_menu_insert', [App\Http\Controllers\admin\AdminPageController::class, 'showMenuInsertPage'])->name('admin.menu_insert');
    Route::post('/admin_menu_add', [App\Http\Controllers\admin\AdminPageController::class, 'addMenuPage'])->name('admin.menu_add');
    Route::get('/admin_menu_edit/{id}', [App\Http\Controllers\admin\AdminPageController::class, 'editMenuPage'])->name('admin.menu_edit');
    Route::post('/admin_menu_edit', [App\Http\Controllers\admin\AdminPageController::class, 'updateMenuPage'])->name('admin.menu_update');
    Route::get('/admin_gallery', [App\Http\Controllers\admin\AdminPageController::class, 'showGalleryTopPage'])->name('admin.gallery');
    Route::get('/admin_gallery_edit/{id}', [App\Http\Controllers\admin\AdminPageController::class, 'editGalleryPage'])->name('admin.gallery_edit');
    Route::get('/admin_gallery_insert', [App\Http\Controllers\admin\AdminPageController::class, 'insertGalleryTopPage'])->name('admin.gallery_insert');
    Route::post('/admin_gallery_edit', [App\Http\Controllers\admin\AdminPageController::class, 'updateGalleryPage'])->name('admin.gallery_update');
    Route::post('/admin_gallery_add', [App\Http\Controllers\admin\AdminPageController::class, 'addGalleryPage'])->name('admin.gallery_add');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');