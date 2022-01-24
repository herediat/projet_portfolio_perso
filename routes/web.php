<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Promise\Create;
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
Route::get('/admin/dashboard/accueil/main', [ProfileController::class, 'index'])->name('accueil.main');
// //CRUD CREAT ACCUIEL ('CREATE')
Route::get('/admin/dashboard/accueil/create', [ProfileController::class, 'create'])->name('accueil.create');
// //CRUD CREAT ACCUIEL ('STORE')
Route::post('/admin/dashboard/accueil/store', [ProfileController::class, 'store'])->name('accueil.store');

// //CRUD DELETE
Route::delete('/admin/dashboard/accueil/{id}/delete', [ProfileController::class, 'destroy'])->name('accueil.destroy');

// //CRUD EDIT
// Route::get('/admin/dashboard/accueil/{id}/delete', [ProfileController::class, 'destroy'])->name('accueil.destroy');
// Route::put('/admin/accueil/{id}/update', [ProfileController::class, 'update'])->name('accueil.update');


// //CRUD SHOW
// Route::get('/admin/dashboard/accueil/{id}/show', [ProfileController::class, 'show'])->name('accueil.show');



