<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksApiController extends Controller
{
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
        $items = array();
        foreach($books as $b) {
            $items[] = [
                'id' => $b->id,
                'judul_buku' =>  $b->judul_buku,
                'penulis' => $b->penulis,
                'jumlah_halaman' => $b->jumlah_halaman,
                'tanggal_terbit' => $b->tanggal_terbit,
            ];
        }
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $items
        ], 200);
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
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => [
                'id' => $books->id,
                'judul_buku' =>  $books->judul_buku,
                'penulis' => $books->penulis,
                'url_gambar' => $books->url_gambar,
                'jumlah_halaman' => $books->jumlah_halaman,
                'tanggal_terbit' => $books->tanggal_terbit,
                'sinopsis' => $books->sinopsis,
                'createdAt' => $books->created_at,
                'updatedAt' => $books->updated_at
            ]
        ], 200);
    }

    public function search(Request $request)
    {
        $books = Book::where('judul_buku', 'LIKE', '%'.$request->search.'%')->get();
        $items = array();
        foreach($books as $b) {
            $items[] = [
                'id' => $b->id,
                'judul_buku' => $b->judul_buku,
                'penulis' => $b->penulis,
                'jumlah_halaman' => $b->jumlah_halaman,
                'tanggal_terbit' => $b->tanggal_terbit,
            ];
        }
        return response()->json([
            'status' => 200,
            'message' => 'search judul berdasarkan '.$request->search." berhasil!",
            'data' => $items
        ], 200);
    }

    public function filter(Request $request)
    {
        $books = Book::where('penulis', 'LIKE', '%'.$request->filter.'%')->get();
        $items = array();
        foreach($books as $b) {
            $items[] = [
                'id' => $b->id,
                'judul_buku' =>  $b->judul_buku,
                'penulis' => $b->penulis,
                'jumlah_halaman' => $b->jumlah_halaman,
                'tanggal_terbit' => $b->tanggal_terbit,
            ];
        }
        return response()->json([
            'status' => 200,
            'message' => 'fiter penulis berdasarkan "'.$request->filter.'" berhasil',
            'data' => $items
        ], 200);
    }
}
