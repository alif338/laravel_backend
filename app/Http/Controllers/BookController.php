<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'search', 'detail', 'filter']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        $books = $books->reverse();
        return view('bookshelf_api.main', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bookshelf_api.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul_buku' => 'required|unique:books',
            'penulis' => 'required',
            'jumlah_halaman' => 'required',
            'tanggal_terbit' => 'required',
            'isbn' => 'required',
            'sinopsis' => 'required'
        ]);

        $book = new Book;
        $book->judul_buku = $request["judul_buku"];
        $book->penulis = $request["penulis"];
        if (!is_null($request["url_gambar"])) {
            $book->url_gambar = $request["url_gambar"];
        }
        $book->jumlah_halaman = $request["jumlah_halaman"];
        $book->tanggal_terbit = $request["tanggal_terbit"];
        $book->isbn = $request["isbn"];
        $book->sinopsis = $request["sinopsis"];

        $book->save();

        return redirect('/book_list')->with('success', 'Data buku berhasil ditambahkan');    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $books = Book::find($id);
        return view('bookshelf_api.detail', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $books = Book::find($id);
        return view('bookshelf_api.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            "judul_buku" => 'required',
            "penulis" => 'required',
            "jumlah_halaman" => 'required',
            "isbn" => 'required',
            "tanggal_terbit" => 'required',
            "sinopsis" => 'required',
        ]);

        $query = Book::where('id', $id)->update([
            "judul_buku" => $request["judul_buku"],
            "penulis" =>  $request["penulis"],
            "url_gambar" =>  $request["url_gambar"],
            "jumlah_halaman" => $request["jumlah_halaman"],
            "isbn" => $request["isbn"],
            "tanggal_terbit" => $request["tanggal_terbit"],
            "sinopsis" => $request["sinopsis"],
        ]);

        return redirect('/book_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $books = Book::find($id);
        $books->delete();
        return redirect('/book_list');
    }

    public function search(Request $request)
    {
        $books = Book::where('judul_buku', 'LIKE', '%'.$request->search.'%')->get();
        return view('bookshelf_api.main', compact('books'));
    }

    public function filter(Request $request)
    {
        $books = Book::where('penulis', 'LIKE', '%'.$request->filter.'%')->get();
        return view('bookshelf_api.main', compact('books'));
    }
}
