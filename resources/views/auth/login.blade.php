@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Masuk ke Aplikasi Manajemen Pegawai</h4>
                </div>

                <div class="card-body">
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> Nama</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="fas fa-lock"></i> Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Ingat saya</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection