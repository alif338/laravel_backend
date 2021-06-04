<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dot_backend_detail</title>
    <link rel="stylesheet" href="{{ asset('detail/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Kanadaka">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Balsamiq+Sans">
    <link rel="stylesheet" href="{{ asset('detail/css/styles.css') }}">
</head>

<body style="padding: 0px;">
    <h1>Bookshelf API</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="font-size: 40px;font-family: 'Balsamiq Sans', cursive;text-align: left;"><i>{{ $books->judul_buku }}</i></h1>
            </div>
            <div class="col" style="text-align: right;">
                <a href="{{ route('edit', ['book_id' => $books->id]) }}" class="btn btn-primary" type="button" style="background: var(--bs-gray-dark);">Edit Data Buku</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding-bottom: 12px;padding-top: 12px; text-align:center;">
                <img src="{{ $books->url_gambar }}" width="400" height="480">
            </div>
            <div class="col-md-6">
                <p><strong>Id</strong> <strong>: {{ $books->id }}</strong>&nbsp;</p>
                <p><strong>Penulis : &nbsp;</strong>{{ $books->penulis }}</p>
                <p><strong>Jumlah Halaman : &nbsp;</strong>{{ $books->jumlah_halaman }}</p>
                <p><strong>Waktu Pembuatan Buku : &nbsp;</strong>{{ $books->tanggal_terbit }}</p>
                <p><strong>ISBN : &nbsp;</strong>{{ $books->isbn }}</p>
            </div>
        </div>
        <p style="margin-bottom: 0px;"><strong>Sinopsis :</strong></p>
        <p><br>{{ $books->sinopsis }}</p>
        
    </div>
    <div class="container" style="text-align: center;padding-bottom: 24px;">
        <form action="{{ route('destroy', ['book_id' => $books->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Hapus data buku</button>
        </form>
    </div>
    <script src="{{ asset('detail/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>