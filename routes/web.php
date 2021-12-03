<?php

use App\Http\Controllers\Admin\PagesController;
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
  return view('web.index');
});

Route::get('/home', function () {
  return view('web.index');
});

Route::get('/about', function () {
  return view('web.about');
});

Route::get('/services', function () {
  return view('web.services');
});

Route::get('/personal', function () {
  return view('web.services.personal');
});

Route::get('/contact', function () {
  return view('web.contact');
});

Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/inbox', [PagesController::class, 'inbox'])->middleware(['auth'])->name('inbox');
Route::get('/questions', [PagesController::class, 'questions'])->middleware(['auth'])->name('questions');

Route::get('/admin/dashboard', [PagesController::class, 'dashboard'])->middleware(['auth'])->name('admin-dashboard');
Route::get('/admin/inbox', [PagesController::class, 'adminInbox'])->middleware(['auth'])->name('admin-inbox');
Route::get('/admin/table', [PagesController::class, 'adminTable'])->middleware(['auth'])->name('admin-table');

require __DIR__.'/auth.php';
