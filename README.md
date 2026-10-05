# Tugas Web P9 - Laravel Setup

Project ini dibuat untuk memenuhi Tugas Rutin Pertemuan 9 Pemrograman Web menggunakan Laravel.

## Teknologi yang Digunakan

- PHP 8.5.11
- Laravel 13.34.0
- Composer 2.10.3
- MySQL
- Node.js dan npm
- XAMPP
- Visual Studio Code

## Langkah Instalasi

### 1. Install PHP dan Composer

Pastikan PHP dan Composer sudah terpasang dan dapat digunakan melalui terminal.

```bash
php -v
composer -V

2. Membuat Project Laravel

Project dibuat menggunakan Composer:

composer create-project laravel/laravel TugasWeb-P9-LaravelSetup

Masuk ke folder project:

cd TugasWeb-P9-LaravelSetup

3. Konfigurasi Database

Buat database MySQL melalui phpMyAdmin dengan nama:

tugasweb_p9

Kemudian konfigurasi file .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugasweb_p9
DB_USERNAME=root
DB_PASSWORD=

4. Menjalankan Migration
php artisan migrate

5. Menjalankan Laravel
php artisan serve

Kemudian buka:

http://127.0.0.1:8000
Route

Project memiliki beberapa route:

/ untuk halaman Home
/about untuk halaman About
/contact untuk halaman Contact
/hello/{nama} untuk route parameter

Contoh:

http://127.0.0.1:8000/hello/Annisa
Dynamic Data

Halaman Home menampilkan data mahasiswa yang dikirim dari route ke Blade view menggunakan array.

Data yang ditampilkan:

Nama
Program Studi
Semester
Controller dan Model

Controller dibuat menggunakan:

php artisan make:controller MahasiswaController

Model dan migration dibuat menggunakan:

php artisan make:model Mahasiswa -m

Model Mahasiswa memiliki migration dengan data:

nama
prodi
semester

Struktur Folder
TugasWeb-P9-LaravelSetup/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── MahasiswaController.php
│   └── Models/
│       └── Mahasiswa.php
├── database/
│   └── migrations/
├── public/
├── resources/
│   └── views/
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── contact.blade.php
│       └── welcome.blade.php
├── routes/
│   └── web.php
├── .env
└── README.md