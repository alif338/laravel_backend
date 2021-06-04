<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dot_backend_ce</title>
    <link rel="stylesheet" href="{{ asset('create/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('create/css/Contact-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('create/css/styles.css') }}">
</head>

<body>
    <section class="contact-clean">
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <h2 class="text-center">Buat Data Buku Baru</h2>
            <div class="mb-3"><input class="form-control" type="text" placeholder="id" disabled=""></div>
            <div class="mb-3"><input class="form-control" type="text" name="judul_buku" placeholder="Judul Buku"></div>
            <div class="mb-3"><input class="form-control" type="text" name="penulis" placeholder="penulis"><small>Note : Jika penulis buku lebih dari 1 orang, GUNAKAN tanda koma (",") sebagai pemisah antar nama penulis<br></small></div>
            <div class="mb-3"><input class="form-control" type="url" name="url_gambar" placeholder="Link Gambar"></div>
            <div class="mb-3"><input class="form-control" type="number" name="jumlah_halaman" placeholder="Jumlah Halaman"></div>
            <div class="mb-3"><input class="form-control" type="date" name="tanggal_terbit" placeholder="Tanggal Terbit (dd-mm-yyyy)"></div>
            <div class="mb-3"><textarea class="form-control" name="sinopsis" placeholder="sinopsis"></textarea></div>
            <div class="mb-3"><button class="btn btn-primary" type="submit">Submit</button></div>
        </form>
    </section>
    <script src="{{ asset('create/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>