<!-- resources/views/backend/admin/logout.blade.php -->
@extends('layouts.ppdblayouts')

@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4 text-center">Logout</h2>
        <p class="mb-4 text-center">Anda yakin ingin keluar?</p>
        <<form action="{{ route('logout') }}" method="POST">
            @csrf
            <div class="flex justify-between">
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
                <a href="{{ url()->previous() }}" class="text-blue-500 px-4 py-2 rounded">Batal</a>
            </div>
        </form>
        
    </div>
</div>
@endsection




<!-- Menyertakan file JavaScript -->
<script src="{{ asset('js/dashboard.js') }}"></script>
