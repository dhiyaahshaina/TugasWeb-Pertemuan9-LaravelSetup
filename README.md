# TugasWeb P9 — Laravel Setup

## Deskripsi

Project ini dibuat untuk memenuhi **Tugas Rutin Pertemuan 9 — Setup Laravel**.

Project menggunakan Laravel dan memiliki beberapa route custom, Blade View, data dinamis dari route, database MySQL, Controller, Model, dan Migration.

## Teknologi yang Digunakan

* Laravel 12
* PHP
* Composer
* MySQL
* XAMPP
* Blade Template

## Requirements

Project ini memenuhi beberapa requirements tugas:

1. Install Composer dan membuat project Laravel.
2. Membuat database MySQL dan melakukan konfigurasi `.env`.
3. Menjalankan Laravel menggunakan `artisan serve` dan menampilkan halaman welcome.
4. Membuat 3 route custom:

   * `/`
   * `/about`
   * `/contact`
5. Menampilkan data dinamis berupa array dari route ke Blade View.
6. Membuat Controller menggunakan `make:controller`.
7. Membuat Model dan Migration menggunakan `make:model -m`.
8. Membuat README berisi langkah instalasi dan penjelasan struktur folder.

## Instalasi Project

### 1. Clone Repository

```bash
git clone [URL_REPOSITORY]
```

### 2. Masuk ke Folder Project

```bash
cd TugasWeb-Pertemuan9-LaravelSetup
```

### 3. Install Dependency

```bash
composer install
```

### 4. Membuat File Environment

Copy file `.env.example` menjadi `.env`.

Windows:

```bash
copy .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Konfigurasi Database

Buat database dengan nama:

```text
laravel
```

Kemudian konfigurasi file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Menjalankan Migration

```bash
php artisan migrate
```

### 8. Menjalankan Laravel

```bash
php artisan serve
```

Kemudian buka browser:

```text
http://127.0.0.1:8000
```

## Route yang Tersedia

| Route      | Keterangan                       |
| ---------- | -------------------------------- |
| `/`        | Halaman Home                     |
| `/about`   | Halaman About dan data mahasiswa |
| `/contact` | Halaman Contact                  |

## Data Dinamis

Halaman `/about` menerima data mahasiswa berupa array dari route dan menampilkannya pada Blade View.

Contoh data:

```php
$mahasiswa = [
    'nama' => 'Dhiya Ahshaina Fauzi Saragih',
    'nim' => '4253250018',
    'jurusan' => 'Ilmu Komputer'
];
```

Data tersebut dikirim ke view menggunakan:

```php
return view('about', compact('mahasiswa'));
```

Kemudian ditampilkan pada Blade:

```php
{{ $mahasiswa['nama'] }}
{{ $mahasiswa['nim'] }}
{{ $mahasiswa['jurusan'] }}
```

## Controller, Model, dan Migration

Project memiliki Controller:

```text
app/Http/Controllers/MahasiswaController.php
```

Model:

```text
app/Models/Mahasiswa.php
```

Migration:

```text
database/migrations/xxxx_xx_xx_xxxxxx_create_mahasiswas_table.php
```

Controller dibuat menggunakan:

```bash
php artisan make:controller MahasiswaController
```

Model dan Migration dibuat menggunakan:

```bash
php artisan make:model Mahasiswa -m
```

## Struktur Folder

```text
TugasWeb-P9-LaravelSetup/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── MahasiswaController.php
│   │
│   └── Models/
│       └── Mahasiswa.php
│
├── database/
│   └── migrations/
│       └── create_mahasiswas_table.php
│
├── resources/
│   └── views/
│       ├── welcome.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       └── contact.blade.php
│
├── routes/
│   └── web.php
│
├── .env.example
├── composer.json
└── README.md
```

## Penjelasan Struktur Folder

### `app/`

Berisi kode utama aplikasi Laravel, termasuk Controller dan Model.

### `app/Http/Controllers/`

Berisi Controller yang digunakan untuk mengatur alur request dan response aplikasi.

### `app/Models/`

Berisi Model yang digunakan untuk berinteraksi dengan database.

### `database/migrations/`

Berisi file migration untuk membuat dan mengatur struktur tabel database.

### `resources/views/`

Berisi file Blade View yang digunakan untuk menampilkan halaman website.

### `routes/web.php`

Berisi route web aplikasi seperti `/`, `/about`, dan `/contact`.

### `.env`

Berisi konfigurasi environment aplikasi, termasuk koneksi database.

### `README.md`

Berisi dokumentasi project, cara instalasi, cara menjalankan project, route yang tersedia, dan struktur folder.

## Menjalankan Project

Pastikan XAMPP dan MySQL sudah berjalan, kemudian jalankan:

```bash
php artisan serve
```

Buka:

```text
http://127.0.0.1:8000
```

## Repository

Nama repository:

```text
TugasWeb-Pertemuan9-LaravelSetup
```
