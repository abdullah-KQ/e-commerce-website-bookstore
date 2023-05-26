<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/allBooks',[BookController::class,'BookType']);

Route::get('/novels',[BookController::class,'Novels']);

Route::get('/islamicBook',[BookController::class,'IslamicBook']);

Route::get('/businessEconomicsBooks',[BookController::class,'BusinessEconomicsBooks']);

Route::get('/childrenBooks',[BookController::class,'ChildrenBooks']);

Route::get('/educationalBooks',[BookController::class,'EducationalBooks']);


Route::get('/BookType',[BookController::class,'BookType'])->name('BookType');

Route::get('/checkout/{id}',[BookController::class,'Checkout']);

Route::get('invoic',[BookController::class,'invoic']);

Route::get('/invoic',[BookController::class,'invoic']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
