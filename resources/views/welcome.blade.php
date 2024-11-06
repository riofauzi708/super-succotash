@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero-section text-center text-white py-5 px-4" style="background: url('/cover.jpg') no-repeat center center/cover;">
    <div class="container">
        <h1 class="display-4 font-weight-bold">Selamat datang di Aplikasi Data Pegawai</h1>
        <p class="lead">Kelola data pegawai Anda dengan mudah dan cepat. Temukan pegawai yang Anda cari, dan lakukan perubahan yang diperlukan secara efisien.</p>
        <a href="{{ route('employees.index') }}" class="btn btn-primary btn-lg mt-3">Lihat Data Pegawai</a>
    </div>
</div>

<!-- About Section -->
<section class="about-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Kenapa Memilih Aplikasi Ini?</h2>
        <p class="text-center">Aplikasi ini dibuat untuk memudahkan pengelolaan data pegawai Anda dengan antarmuka yang intuitif dan mudah digunakan. Anda dapat melihat, mencari, dan mengurutkan data pegawai hanya dalam beberapa klik!</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="/team.jpg" class="card-img-top" alt="Kecepatan">
                    <div class="card-body">
                        <h5 class="card-title">Kecepatan</h5>
                        <p class="card-text">Aplikasi ini didesain untuk bekerja dengan cepat dan responsif, baik di perangkat desktop maupun mobile.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/service.jpg" class="card-img-top" alt="Keamanan">
                    <div class="card-body">
                        <h5 class="card-title">Keamanan</h5>
                        <p class="card-text">Data pegawai Anda disimpan dengan aman dan dilindungi menggunakan enkripsi tingkat tinggi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/succed.jpg" class="card-img-top" alt="Kemudahan Penggunaan">
                    <div class="card-body">
                        <h5 class="card-title">Kemudahan Penggunaan</h5>
                        <p class="card-text">Antarmuka yang sederhana dan mudah digunakan, bahkan bagi pengguna yang tidak berpengalaman sekalipun.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<div class="cta-section text-center py-4" style="background-color: #007bff; color: white;">
    <div class="container">
        <h3>Siap untuk mengelola data pegawai Anda?</h3>
        <a href="{{ route('employees.index') }}" class="btn btn-light btn-lg mt-3">Mulai Sekarang</a>
    </div>
</div>

@endsection

@section('styles')
<style>
    .hero-section {
        background: url('https://via.placeholder.com/1600x900') no-repeat center center/cover;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .about-section .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .about-section .card:hover {
        transform: translateY(-10px);
    }

    .cta-section {
        background-color: #007bff;
        color: white;
    }
</style>
@endsection