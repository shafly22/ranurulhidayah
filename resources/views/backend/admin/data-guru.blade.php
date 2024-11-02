<!-- resources/views/backend/admin/data-guru.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-6">Data Guru</h2>

    <table class="min-w-full bg-white">
        <thead class="bg-teal-500 text-white">
            <tr>
                <th class="w-1/4 px-4 py-2">Nama</th>
                <th class="w-1/4 px-4 py-2">NIP</th>
                <th class="w-1/4 px-4 py-2">Email</th>
                <th class="w-1/4 px-4 py-2">Mata Pelajaran</th>
                <th class="w-1/4 px-4 py-2">Telepon</th>
                <th class="w-1/4 px-4 py-2">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataGuru as $guru)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $guru->nama }}</td>
                    <td class="px-4 py-2">{{ $guru->nip }}</td>
                    <td class="px-4 py-2">{{ $guru->email }}</td>
                    <td class="px-4 py-2">{{ $guru->mata_pelajaran }}</td>
                    <td class="px-4 py-2">{{ $guru->telepon }}</td>
                    <td class="px-4 py-2">{{ $guru->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
