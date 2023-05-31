<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Anonymous Message

Anonymous Message adalah sebuah website yang memungkinkan pengguna untuk mengirim pesan anonim

### Fitur

- Pengguna dapat memposting pesan anonim
- Tampilan responsif dan menarik menggunakan Tailwind CSS dengan komponen tambahan dari DaisyUI.
- Penggunaan SweetAlert2 untuk memberikan notifikasi yang menarik dan interaktif.

## Prasyarat

Sebelum memulai menginstal dan menjalankan proyek ini, pastikan sistem Anda memenuhi prasyarat berikut:

1. PHP versi 7.4 atau lebih baru
2. Composer [https://getcomposer.org/]
3. Node.js [https://nodejs.org/]

## Instalasi

1. Salin repositori ini ke komputer lokal Anda dengan menggunakan perintah berikut:
```bash
git clone https://github.com/nama_pengguna/nama_repositori.git
```

2. Masuk ke direktori proyek:
```bash
cd nama_repositori
```

3. Instal semua dependensi PHP melalui Composer:
```bash
composer install
```

4. Instal semua dependensi Node.js menggunakan npm:
```bash
npm install
```

5. Salin file .env.example menjadi .env:
```bash
cp .env.example .env
```

6. Generate kunci aplikasi Laravel:
```bash
php artisan key:generate
```

7. Konfigurasikan koneksi database di file .env sesuai dengan pengaturan lokal Anda:
```text
DB_CONNECTION=nama_connection
DB_HOST=nama_host
DB_PORT=port
DB_DATABASE=nama_database
DB_USERNAME=nama_pengguna
DB_PASSWORD=kata_sandi
```

8. Jalankan migrasi untuk membuat tabel yang diperlukan:
```bash
php artisan migrate
```

9. Jalankan server pengembangan Laravel:
```bash
php artisan serve
npm run dev
```

## License

Basically, feel free to use and re-use any way you want. Created by [Ahmad Ramadani](https://github.com/Ramadani-coding)
