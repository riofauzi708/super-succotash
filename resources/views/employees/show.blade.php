@extends('layouts.app')

@section('content')
<div class="container fade-in my-5">
    <h1 class="mb-4 text-center">Detail Pegawai</h1>
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0">{{ $employee->name }}</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('storage/' . $employee->image) }}" alt="{{ $employee->name }}" class="img-fluid img-thumbnail rounded-circle shadow" style="width: 200px; height: 200px; object-fit: cover;">
                </div>
                <div class="col-md-8">
                    <table class="table table-borderless">
                        <tr>
                            <th>Email</th>
                            <td>{{ $employee->email }}</td>
                        </tr>
                        <tr>
                            <th>Telepon</th>
                            <td>{{ $employee->phone }}</td>
                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <td>{{ $employee->position }}</td>
                        </tr>
                        <tr>
                            <th>Bergabung</th>
                            <td>{{ \Carbon\Carbon::parse($employee->hired_at)->format('d M Y') }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $employee->address ?? 'Alamat belum tersedia' }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <span class="badge {{ $employee->status == 1 ? 'badge-success' : 'badge-secondary' }}">
                                    {{ $employee->status == 1 ? 'Aktif' : 'Tidak Aktif' }}
                                </span>
                            </td>
                        </tr>
                    </table>
                    <div class="text-center mt-4">
                        <a href="{{ route('employees.index') }}" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Pegawai
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection