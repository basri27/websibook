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

Auth::routes();

//Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Buku
Route::get('/buku', [BooksController::class, 'category_book'])->name('book');
//Search Book
Route::get('/buku/cari/', [BooksController::class, 'cari_buku'])->name('cari_buku');

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
//Buku User
Route::get('/{id}/book', [BooksController::class, 'mybook'])->name('mybook');
//Buku User Edit
Route::get('/{id}/buku/edit', [BooksController::class, 'user_edit'])->name('user_edit');
Route::patch('/{id}/buku/update}', [BooksController::class, 'user_update'])->name('user_update');
//User Input Buku
Route::get('/{id}/buku/tambah', [BooksController::class, 'user_tambah'])->name('user_tambah');
Route::post('/{id}/buku/add', [BooksController::class, 'user_add'])->name('user_add');
//User Delete Buku
Route::delete('/{id}/buku/delete', [BooksController::class, 'user_delete'])->name('user_delete');
