@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pegawai</h1>
    <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Pegawai" value="{{ old('name') }}" required>
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Pegawai" value="{{ old('email') }}" required>
            @error('email')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Telepon</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{ old('phone') }}" required>
            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Masukkan Alamat Pegawai" value="{{ old('address') }}" required>
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="position">Posisi</label>
            <select name="position" id="position" class="form-control">
                <option value="">Pilih Posisi</option>
                <option value="Manager" {{ old('position') == 'Manager' ? 'selected' : '' }}>Manager</option>
                <option value="Staff" {{ old('position') == 'Staff' ? 'selected' : '' }}>Staff</option>
                <option value="Supervisor" {{ old('position') == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
                <option value="Developer" {{ old('position') == 'Developer' ? 'selected' : '' }}>Developer</option>
                <option value="Tester" {{ old('position') == 'Tester' ? 'selected' : '' }}>Tester</option>
                <option value="Designer" {{ old('position') == 'Designer' ? 'selected' : '' }}>Designer</option>
            </select>
            @error('position')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="hired_at">Tanggal Bergabung</label>
            <input type="text" name="hired_at" id="hired_at" class="form-control" placeholder="Masukan tanggal" value="{{ old('hired_at') }}" required>
            @error('hired_at')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
            @error('image')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group text-right">
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#position').select2();

        $('#hired_at').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            locale: {
                format: 'YYYY-MM-DD'
            }
        });
    });
</script>
@endsection