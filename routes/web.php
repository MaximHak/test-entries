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

Route::get('/', [\App\Http\Controllers\FisrtPageController::class, 'index'])->name('index');
//Users
Route::get('users', [\App\Http\Controllers\FisrtPageController::class, 'users'])->name('users');
Route::any('add/user', [\App\Http\Controllers\FisrtPageController::class, 'add_user'])->name('add_user');
Route::get('delete/users/{id?}', [\App\Http\Controllers\FisrtPageController::class, 'delete_users'])->name('delete_users');
Route::any('update/users/{id?}', [\App\Http\Controllers\FisrtPageController::class, 'update_users'])->name('update_users');
//Entries
Route::get('entries', [\App\Http\Controllers\FisrtPageController::class, 'entries'])->name('entries');
Route::any('add/entrie', [\App\Http\Controllers\FisrtPageController::class, 'add_entrie'])->name('add_entrie');
Route::get('delete/entries/{id?}', [\App\Http\Controllers\FisrtPageController::class, 'delete_entries'])->name('delete_entries');
Route::any('update/entries/{id?}', [\App\Http\Controllers\FisrtPageController::class, 'update_entries'])->name('update_entries');
//Employees
Route::get('employees', [\App\Http\Controllers\FisrtPageController::class, 'employees'])->name('employees');
Route::any('add/employer', [\App\Http\Controllers\FisrtPageController::class, 'add_employer'])->name('add_employer');
Route::get('delete/employees/{id?}', [\App\Http\Controllers\FisrtPageController::class, 'delete_employees'])->name('delete_employees');
Route::any('update/employees/{id?}', [\App\Http\Controllers\FisrtPageController::class, 'update_employees'])->name('update_employees');
