<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;
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

// Route::get('/login', function () {

//     return view('welcome');
// });

// // Route::get('/', function() {
// //     return view('home');
// // });

// Route::redirect('/here', '/there');
// Route::view('/home', 'home');

// Route::get('/categories', [CategoryController::class, 'index']);

// Route::fallback(function() {
//     return "This route is not available";
// });

Route::get('/', function() {
    return "hello world";
});

Route::get('/student', function () {
    return "this is from student route";
});

Route::get('/dashboard', function () {
    return view('/dashboard');
})->name('dashboard');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories_index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories_create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories_store');


Route::get('/lists', [ListController::class, 'index'])->name("lists_index");
Route::get('/lists/create', [ListController::class, 'create'])->name("list_create");
Route::post("/lists", [ListController::class, 'store'])->name("lists_store");
Route::get("/lists/edit/{list_id}", [ListController::class, 'edit'])->name("lists_edit");
Route::post("list/edit", [ListController::class, 'update'])->name("lists_update");
Route::delete("lists/{task_id}", [ListController::class, 'destroy'])->name("lists_delete");

Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Route::resource('lists', ListController::class);