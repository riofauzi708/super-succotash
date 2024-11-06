@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pegawai</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="image">Foto</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
            @if($employee->image)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $employee->image) }}" alt="Foto Pegawai" class="img-thumbnail" style="max-width: 150px;">
            </div>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Telepon</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $employee->phone }}" required>
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $employee->address }}" required>
        </div>

        <div class="form-group">
            <label for="position">Posisi</label>
            <select name="position" id="position" class="form-control">
                <option value="Manager" {{ $employee->position == 'Manager' ? 'selected' : '' }}>Manager</option>
                <option value="Staff" {{ $employee->position == 'Staff' ? 'selected' : '' }}>Staff</option>
                <option value="Supervisor" {{ $employee->position == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
                <option value="Developer" {{ $employee->position == 'Developer' ? 'selected' : '' }}>Developer</option>
                <option value="Tester" {{ $employee->position == 'Tester' ? 'selected' : '' }}>Tester</option>
                <option value="Designer" {{ $employee->position == 'Designer' ? 'selected' : '' }}>Designer</option>
            </select>
        </div>

        <div class="form-group">
            <label for="hired_at">Tanggal Bergabung</label>
            <input type="text" name="hired_at" id="hired_at" class="form-control" value="{{ \Carbon\Carbon::parse($employee->hired_at)->format('Y-m-d') }}" required>
        </div>

        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-success">Simpan</button>
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