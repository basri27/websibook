<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class BooksController extends Controller
{
    public function backend_index() {
        $books = Book::all();
        return view('admin.backend_index', compact('books'));
    }

    //Tambah data
    public function tambah() {
        return view('admin.adm_add');
    }
    public function add(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'user_id' => 'required',
            'file' => 'required',
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
        return view('admin.adm_edit', compact('books'));
    }
    public function update(Request $request, $id) {
        $books = Book::where('id', '=', $id)->first();
        
        $books->update([
            'title' => $request->input('title'),
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
}
