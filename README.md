# Manajemen Pegawai

Aplikasi **Manajemen Pegawai** adalah sistem berbasis web yang memungkinkan pengguna untuk dengan mudah mencari, melihat, dan menambah data pegawai. Aplikasi ini menyediakan antarmuka yang ramah pengguna, baik untuk desktop maupun mobile, serta berbagai fitur seperti filter pencarian, pengurutan data, dan pengelolaan data pegawai yang intuitif. 

## Fitur Utama

- **Pencarian Data Pegawai**: Mencari pegawai dengan mudah menggunakan fitur pencarian di berbagai kolom seperti nama, email, posisi, dan lainnya.
- **Pengurutan & Penyaringan**: Menyortir dan memfilter data pegawai berdasarkan kolom yang diinginkan (misalnya, tanggal perekrutan atau tanggal pembuatan).
- **Manajemen Pegawai**: Menambah, mengedit, dan menghapus data pegawai dengan antarmuka yang sederhana dan mudah digunakan.
- **Responsif**: Aplikasi dirancang responsif untuk memberikan pengalaman yang nyaman di perangkat desktop maupun mobile.
- **Validator Input**: Menggunakan jQuery validator untuk memastikan data yang dimasukkan valid.
- **Pengelolaan File**: Menggunakan **Bootstrap FileInput** dan **Dropzone** untuk unggah gambar profil pegawai yang nyaman dan mudah digunakan.
- **Tabel Data Interaktif**: Menampilkan daftar pegawai dengan kemampuan sortir dan pencarian menggunakan **DataTables**.
- **API untuk List Pegawai**: Menyediakan akses API untuk mengelola data pegawai.
- **Data Dummy**: Menyediakan fitur seeder untuk memasukkan data dummy ke dalam database.

## Teknologi yang Digunakan

- **Backend**: PHP, Laravel
- **Frontend**: HTML, CSS, Bootstrap, jQuery, Select2, Toastr
- **Database**: SQLite
- **Autentikasi**: Laravel Auth
- **File Upload**: Bootstrap Fileinput, Dropzone
- **Pencarian & Pengurutan**: DataTables
- **Validator Input**: jQuery Validator

## Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini secara lokal:

### 1. Clone Repository

Clone repositori ini ke dalam mesin lokal Anda menggunakan Git.

```bash
git clone https://github.com/username/repository-name.git
cd repository-name
```

- **Konfigurasi Database**: Mengubah database ke SQLite dalam file `.env`:
    - `DB_CONNECTION=sqlite`
    - `DB_DATABASE=database/database.sqlite`
    - Jika file `database.sqlite` belum ada, Anda perlu membuatnya di dalam folder `database/`.
- **Instalasi**: Penjelasan tentang cara mengatur SQLite sebagai database dan cara memigrasi tabel.

**SQLite** sebagai database, yang lebih ringan dan mudah untuk pengembangan lokal tanpa perlu setup server database seperti MySQL atau PostgreSQL.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
