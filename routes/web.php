<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
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

//FRONT
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/profile', [FrontController::class, 'profile'])->name('profile');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/skills', [FrontController::class, 'skills'])->name('skills');
Route::get('/projects', [FrontController::class, 'projects'])->name('projects');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/admin/dashboard', [FrontController::class, 'dashboard'])->name('dashboard');


//BACK

//CRUD CREAT ACCUIEL ('CREATE')
//CRUD CREAT ACCUIEL ('STORE')

//CRUD DELETE

//CRUD EDIT

//CRUD SHOW



