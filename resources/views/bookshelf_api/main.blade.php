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
                <div class="col-md-6"><button class="btn btn-primary" type="button" style="background: var(--bs-info);">BUAT DATA BARU</button></div>
                <div class="col-md-6">
                    <p class="text-end">Login Status : Not Logged
                        <a href="{{ route('login') }}" class="btn btn-primary" type="button" style="margin-left: 12px;background: var(--bs-success);">Login</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="container" style="margin-right: 0px;margin-left: 13.2px;">
            <form>
                <div class="row" style="margin-right: 0px;margin-left: 0px;padding-right: 0px;padding-left: 0px;">
                    <div class="col-md-6"><span>Filter berdasarkan Penulis</span>
                        <div class="row" style="padding: 0px;">
                            <div class="col" style="padding: 0px;"><input class="form-control" type="search" style="margin-left: 10px;"></div>
                            <div class="col"><button class="btn btn-primary" type="button" style="margin-left: 10px;background: var(--bs-gray-dark);">Filter</button></div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px;"><span>Search by Judul Buku</span>
                        <div class="row" style="padding: 0px;">
                            <div class="col" style="padding: 0px;"><input class="form-control" type="search" style="margin-left: 10px;"></div>
                            <div class="col"><button class="btn btn-primary" type="button" style="margin-left: 10px;background: var(--bs-gray-dark);">Search</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-break">
            <table class="table table-striped">
                <thead>
                    <tr class="flex-grow-0">
                        <th>Id</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 1</td>
                        <td>cell 2</td>
                        <td><button class="btn btn-primary" type="button">Detail</button></td>
                    </tr>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 3</td>
                        <td>Cell 3</td>
                        <td><button class="btn btn-primary" type="button">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('main/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>