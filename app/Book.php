<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'books';
    protected $fillable = ['judul_buku', 'penulis', 'url_gambar', 'jumlah_halaman', 'tanggal_terbit', 'sinopsis'];
    protected $guarded = ['id'];
    public $timestamps = true;
}
