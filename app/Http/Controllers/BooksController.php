<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;

class BooksController extends Controller
{
    public function backend_index() {
        $books = Book::with('category')->get();
        return view('admin.backend_index', compact('books'));
    }

    //Tambah data
    public function tambah() {
        $list_categories = Category::all();
        return view('admin.adm_add', compact('list_categories'));
    }
    public function add(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'desc' => 'required',
            'user_id' => 'required',
            'file' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp|max:2048;'
        ]);

        $file = Request()->file;
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('file'), $fileName);

        $image = Request()->image;
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('image'), $imageName);

        if($validated) {
            Book::create([
                'title' => $request->input('title'),
                'category_id' => $request->input('category_id'),
                'desc' => $request->input('desc'),
                'user_id' => $request->input('user_id'),
                'file' => $fileName,
                'image' => $imageName
            ]);
        }
        return redirect()->route('admin_index');
    }

    //Ubah data
    public function edit($id) {
        $books = Book::where('id', '=', $id)->first();
        $list_categories = Category::all();

        return view('admin.adm_edit', compact('books', 'list_categories'));
    }
    public function update(Request $request, $id) {
        $books = Book::where('id', '=', $id)->first();

        $books->update([
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
            'desc' => $request->input('desc'),
            'user_id' => $request->input('user_id')
        ]);

        return redirect()->route('admin_index');
    }

    //Hapus data
    public function delete($id) {
        $book = Book::where('id', '=', $id)->first();
        if ($book->image <> "") {
            unlink(public_path('image') . '/' . $book->image);
        }
        if ($book->file <> "") {
            unlink(public_path('file') . '/' . $book->file);
        }
        $book->delete();

        return redirect()->route('admin_index');
    }

    //User Book
    public function mybook($id) {
        $books = Book::where('user_id', '=', $id)->get();
        return view('mybook', compact('books'));
    }
    
    //User insert
    public function user_tambah() {
        $list_categories = Category::all();
        return view('user.user_add', compact('list_categories'));
    }
    public function user_add(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'desc' => 'required',
            'user_id' => 'required',
            'file' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp|max:2048;'
        ]);

        $file = Request()->file;
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('file'), $fileName);

        $image = Request()->image;
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('image'), $imageName);

        if($validated) {
            Book::create([
                'title' => $request->input('title'),
                'category_id' => $request->input('category_id'),
                'desc' => $request->input('desc'),
                'user_id' => $request->input('user_id'),
                'file' => $fileName,
                'image' => $imageName
            ]);
        }
        return redirect()->route('mybook', $id);
    }
}
