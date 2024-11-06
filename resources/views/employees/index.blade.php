@extends('layouts.app')

@section('content')
<div class="container fade-in">
    <h1 class="mb-4">Daftar Pegawai</h1>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('employees.create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i> Tambah Pegawai
        </a>
        <form action="{{ route('employees.index') }}" method="GET" class="form-inline" id="employeeFilterForm">
            <div class="input-group">
                <input type="text" name="search" class="form-control mr-2" placeholder="⌕ Cari pegawai..." value="{{ request('search') }}" id="searchInput">
                <div class="input-group-append">
                    <select name="sort" id="position" class="form-control mr-2">
                        <option value="created_at_desc" {{ request('sort') == 'created_at_desc' ? 'selected' : '' }}>Baru Ditambahkan</option>
                        <option value="created_at_asc" {{ request('sort') == 'created_at_asc' ? 'selected' : '' }}>Terlama Ditambahkan</option>
                        <option value="hired_at_asc" {{ request('sort') == 'hired_at_asc' ? 'selected' : '' }}>Terlama Bergabung</option>
                        <option value="hired_at_desc" {{ request('sort') == 'hired_at_desc' ? 'selected' : '' }}>Baru Bergabung</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <div class="table-responsive">
        <table id="employeeTable" class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Jabatan</th>
                    <th>Bergabung</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td><img src="{{ asset('storage/' . $employee->image) }}" alt="{{ $employee->name }}" class="img-thumbnail" style="max-width: 100px; max-height: 100px;"></td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ \Carbon\Carbon::parse($employee->hired_at)->format('d M Y') }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm mr-1"><i class="fas fa-edit"></i></a>
                            <!-- Tombol Hapus yang Memicu Modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal{{ $employee->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                            <div class="modal fade" id="confirmDeleteModal{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger text-white">
                                            <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data pegawai ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

                                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="pagination pagination-sm">
        {{ $employees->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('position').addEventListener('change', function() {
        document.getElementById('employeeFilterForm').submit();
    });
</script>
@endsection