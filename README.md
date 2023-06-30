## Aplikasi Laravel Sistem Penyeleksian Penerimaan Peserta Didik Baru (PPDB)

<p>
Aplikasi Laravel Sistem Penyeleksian Penerimaan Peserta Didik Baru (PPDB) menggunakan methode SAW dengan menggunakan framework laravel versi 9
</p>
<h1>Preview aplikasi</h1>
<h3>Halaman Home</h3>

![alt text](https://github.com/Avrians/PPDB-Online-WebApps/blob/master/hasil%20output/home-1.png?raw=true)
![alt text](https://github.com/Avrians/PPDB-Online-WebApps/blob/master/hasil%20output/home-2.png?raw=true)
![alt text](https://github.com/Avrians/PPDB-Online-WebApps/blob/master/hasil%20output/home-4.png?raw=true)

<h3>Halaman Daftar</h3>

![alt text](https://github.com/Avrians/PPDB-Online-WebApps/blob/master/hasil%20output/daftar-1.png?raw=true)

<h3>Halaman Hasil Seleksi</h3>

![alt text](https://github.com/Avrians/PPDB-Online-WebApps/blob/master/hasil%20output/hasil.png?raw=true)

<h3>Halaman Admin</h3>

![alt text](https://github.com/Avrians/PPDB-Online-WebApps/blob/master/hasil%20output/admin/dashboard.png?raw=true)
![alt text](https://github.com/Avrians/PPDB-Online-WebApps/blob/master/hasil%20output/admin/ketentuan-nilai.png?raw=true)
![alt text](https://github.com/Avrians/PPDB-Online-WebApps/blob/master/hasil%20output/admin/rank.png?raw=true)

## Cara Install Projek Ini

-   Jalankan `git clone https://github.com/Avrians/PPDB-Online-WebApps`
-   Jalankan composer install.
-   Jalankan cp .env.example .env or copy .env.example .env.
-   Sesuaikan konfigurasi database anda di .env
-   Jalankan php artisan key:generate
-   Jalankan php artisan migrate --seed
-   Jalankan php artisan serve
-   Buka database phpmyadmin
-   Jalankan query nya untuk membuat view database
-   Buka website sesuai dengan localhost dan portnya di web browser anda contoh `http://localhost:8000`

```
user url : localhost:8000
admin url : localhost:8000/admin
```

##User dan Password Admin

```
email: admin@gmail.com
password: 12345
```
