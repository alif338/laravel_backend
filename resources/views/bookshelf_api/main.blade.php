<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dot_backend_main</title>
    <link rel="stylesheet" href="{{ asset('main/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Kanadaka">
    <link rel="stylesheet" href="{{ asset('main/css/styles.css') }}">
</head>

<body class="text-start" style="opacity: 1;">
    <h1>Bookshelf API</h1>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><a href="{{ route('create') }}" class="btn btn-primary" type="button" style="background: var(--bs-info);">BUAT DATA BARU</a></div>
                <div class="col-md-6">
                    <p class="text-end">Login Status : 
                        @if (!Auth::user())
                            <span>Not Logged</span> 
                            <a href="{{ route('login') }}" class="btn btn-primary" type="button" style="margin-left: 12px;background: var(--bs-success);">Login</a>
                        @else
                            <span>Logged</span> 
                            <a href="{{ route('main') }}" class="btn btn-danger" type="button" style="margin-left: 12px;" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <div class="container" style="margin-right: 0px;margin-left: 13.2px;">
            <div class="row" style="margin-right: 0px;margin-left: 0px;padding-right: 0px;padding-left: 0px;">
                
                <div class="col-md-6"><span>Filter berdasarkan Penulis</span>
                    <form action="{{ route('filter') }}">
                        @csrf
                        <div class="row" style="padding: 0px;">
                            <div class="col" style="padding: 0px;"><input class="form-control" name="filter" type="search" style="margin-left: 10px;"></div>
                            <div class="col"><button class="btn btn-primary" type="submit" style="margin-left: 10px;background: var(--bs-gray-dark);">Filter</button></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5" style="padding-left: 0px;"><span>Search by Judul Buku</span>
                    <form action="{{ route('search') }}" >
                        <div class="row" style="padding: 0px;">
                            <div class="col" style="padding: 0px;"><input class="form-control" name="search" style="margin-left: 10px;"></div>
                            <div class="col"><button type="submit" class="btn btn-primary" style="margin-left: 10px;background: var(--bs-gray-dark);">Search</button></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"><span>&nbsp;</span>
                    <div class="row">
                        <div class="col"><a href="{{ route('main') }}" type="submit" class="btn btn-success">Refresh</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-break">
            <table class="table table-striped">
                <thead>
                    <tr class="flex-grow-0">
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Jumlah Halaman</th>
                        <th>Tanggal Terbit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $item)
                    <tr>
                        <td><i>{{ $item->judul_buku }}</i></td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->jumlah_halaman }}</td>
                        <td>{{ $item->tanggal_terbit }}</td>
                        <td><a href="{{ route('show', ['book_id' => $item->id]) }}" class="btn btn-primary" type="button">Detail</a></td>
                    </tr>
                    @empty
                        
                    @endforelse
                    
                    {{-- <tr>
                        <td>Cell 1</td>
                        <td>Cell 3</td>
                        <td>Cell 3</td>
                        <td><button class="btn btn-primary" type="button">Detail</button></td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('main/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>