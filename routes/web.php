<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

Route::get('/buku', function(){
    return view('buku');
})->name('buku');

//Buku User
Route::get('/book/{id}', [BooksController::class, 'mybook'])->name('mybook');

//User Input Buku
Route::get('/{username}/buku/tambah', [BooksController::class, 'user_tambah'])->name('user_tambah');
Route::post('/{username}/buku/add', [BooksController::class, 'user_add'])->name('user_add');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin
Route::get('/admin/book', [BooksController::class, 'backend_index'])->name('admin_index');
//Admin Add
Route::get('/admin/book/tambah', [BooksController::class, 'tambah'])->name('adm_tambah');
Route::post('/admin/book/add', [BooksController::class, 'add'])->name('adm_add');
//Admin Edit
Route::get('/admin/book/edit/{id}', [BooksController::class, 'edit'])->name('adm_edit');
Route::patch('/admin/book/update/{id}', [BooksController::class, 'update'])->name('adm_update');
//Admin Delete
Route::delete('/admin/book/{id}', [BooksController::class, 'delete'])->name('adm_deleteBook');

//User
//Route::get('/', [BooksController::class, 'homepage'])->name('homepage');