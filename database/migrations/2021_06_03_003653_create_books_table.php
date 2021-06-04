<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_buku');
            $table->string('penulis');
            $table->string('url_gambar')->default('https://via.placeholder.com/400x480?text=Book+Cover+Image');
            $table->integer('jumlah_halaman');
            $table->date('tanggal_terbit'); // Format YYYY-MM-DD
            $table->longText('sinopsis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
