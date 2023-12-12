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

    public function create() {
        return view('buku.create');
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
}
