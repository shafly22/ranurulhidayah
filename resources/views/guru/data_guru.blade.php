{{-- @extends('layouts.app') <!-- Ini merujuk ke layouts/app.blade.php -->

@section('title', 'Data Guru') <!-- Set judul halaman -->

@section('content')
    <h1>Data Guru</h1>

    <div class="container">
        <h1 class="mb-4">Data Guru</h1>
        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>
    
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Mata Pelajaran</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gurus as $guru)
                    <tr>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->nip }}</td>
                        <td>{{ $guru->email }}</td>
                        <td>{{ $guru->telepon }}</td>
                        <td>{{ $guru->mata_pelajaran }}</td>
                        <td>{{ $guru->alamat }}</td>
                        <td>
                            <a href="{{ route('guru.edit', $guru) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('guru.destroy', $guru) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}

