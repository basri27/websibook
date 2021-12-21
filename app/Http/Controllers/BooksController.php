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

    public function tambah() {
        return view('admin.adm_add');
    }
    public function add(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'user_id' => 'required',
            'image' => 'required'
        ]);

        $path = $request->image->store('images');

        if($validated) {
            Book::create([
                'title' => $request->input('title'),
                'desc' => $request->input('desc'),
                'user_id' => $request->input('user_id'),
                'image' => $path
            ]);
        }

        return redirect()->route('admin_index');
    }
}
