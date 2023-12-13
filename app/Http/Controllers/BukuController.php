<?php

namespace App\Http\Controllers;
use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $books = buku::all();
    
        return view('welcome', compact('books'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
        ]);

        buku::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
        ]);

        return redirect('/');
    }

    public function edit($id) {
        $book = buku::findOrFail($id);

        return view('edit', compact('book'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
        ]);

        $book = buku::findOrFail($id);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
        ]);

        return redirect()->route('bukus.index')->with('success', 'Book updated successfully');
    }

    public function destroy($id) {
        $book = buku::findOrFail($id);
        $book->delete();

        return redirect()->route('bukus.index')->with('success', 'Book deleted successfully');
    }

}
