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
                <h1 style="font-size: 40px;font-family: 'Balsamiq Sans', cursive;text-align: left;">Judul Buku</h1>
            </div>
            <div class="col" style="text-align: right;"><button class="btn btn-primary" type="button" style="background: var(--bs-gray-dark);">Edit Data Buku</button></div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding-bottom: 12px;padding-top: 12px;"><img></div>
            <div class="col-md-6">
                <p><strong>Id</strong> <strong>:</strong>&nbsp;</p>
                <p><strong>Penulis :&nbsp;</strong></p>
                <p><strong>Jumlah Halaman :&nbsp;</strong></p>
                <p><strong>Waktu Pembuatan Buku :&nbsp;</strong></p>
            </div>
        </div>
        <p style="margin-bottom: 0px;"><strong>Sinopsis :</strong></p>
        <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum ultrices vehicula. Nunc volutpat fringilla enim, ac vulputate massa placerat et. Praesent nunc libero, malesuada suscipit lacus sit amet, mollis elementum est. In convallis interdum finibus. Nulla tellus velit, commodo sed accumsan in, tempor non tellus. Quisque in interdum ante. Nullam at elit sed sapien egestas mattis quis nec nulla. Nulla ultricies urna non lectus lacinia sodales. Sed maximus purus ante, et tempor ex auctor id. Pellentesque semper eleifend tortor, et vehicula massa commodo id. Aliquam non ante in quam efficitur fringilla posuere at libero.Vestibulum bibendum faucibus lobortis. Vestibulum consequat, orci vel varius luctus, odio dui vehicula nisl, id feugiat mauris felis quis turpis. Sed vestibulum tortor et porttitor malesuada. In hac habitasse platea dictumst. Curabitur porttitor est non ante eleifend aliquet. Mauris fringilla odio ac mi interdum pulvinar. Etiam sit amet magna risus. Maecenas quis pretium justo. Vestibulum quis est nisl. Proin metus lorem, pretium ut tortor vel, porta consequat arcu. Etiam erat leo, scelerisque iaculis rhoncus sed, rhoncus ac dui. Aliquam ornare, sem ut luctus lacinia, turpis quam congue leo, sed faucibus felis ante quis nisl. Proin neque augue, posuere bibendum porttitor et, malesuada ut ipsum. Praesent at viverra elit. Curabitur ullamcorper lorem odio, nec congue erat auctor a. Aliquam erat volutpat.<br><br></p>
    </div>
    <script src="{{ asset('detail/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>