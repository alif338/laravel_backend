

## Bookshelf API (dengan panel admin)

Projek ini adalah sebuah panel admin serta API yang berguna untuk mengelola data identitas suatu buku. Seperti Judul, penulis, jumlah halaman, dll. Bila ingin menmbuat, mengedit, maupun menghapus data buku, diperlukan autentikasi admin agar pengguna pada panel admin ini dapat terekam pada database. Selain itu, karena adanya aturan middleware yang diterapkan pada beberapa routes. Database yang digunakan adalah database relasional (MySQL), dengan bantuan web server XAMPP untuk me-run projek ini pada server lokal

### Design Database

Digunakan sebuah tabel (dinamakan 'dot_backend', dapat dicek di file .env) yang terdiri atas kolom-kolom:

- id UNSIGNED INT AUTO_INCREMENT
- judul_buku VARCHAR
- penulis VARCHAR
- url_gambar VARCHAR
- jumlah_halaman INT
- isbn VARCHAR
- tanggal_terbit DATE
- sinopsis LONGTEXT

### Screenshot Aplikasi

<img src="public/screenshot app/Screenshot1.png" alt="...">
<img src="public/screenshot app/Screenshot2.png" alt="...">
<img src="public/screenshot app/Screenshot3.png" alt="...">
<img src="public/screenshot app/Screenshot4.png" alt="...">
<img src="public/screenshot app/Screenshot5.png" alt="...">
<img src="public/screenshot app/Screenshot6.png" alt="...">

### Dependencies

Package luar yang digunakan adalah ```laravel/ui^2.4``` sebagai ui untuk Auth

### Running this project

1. Clone this project ```git clone https://github.com/alif338/laravel_backend.git``` 
2. Install packages ```npm install && npm run dev```
3. Buat database MySQL dengan nama 'dot_backend' 
4. Run ```php artisan migrate```
5. Run ```php artisan serve``` dengan url main ```localhost:8000/book_list```
    
