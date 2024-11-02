<!-- resources/views/backend/admin/content.blade.php -->
<div class="w-full md:w-3/4 p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">DASHBOARD</h1>
        <div class="relative">
            <div class="flex items-center cursor-pointer" onclick="toggleDropdown(event)">
                <span class="mr-2">Admin</span>
                <i class="fas fa-user-circle"></i>
            </div>
            <ul id="dropdown-menu" class="absolute right-0 w-48 bg-white border border-gray-300 rounded-md shadow-lg mt-2 hidden z-10">
                <li>
                    <a href="/logout" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4" id="data-counts">
        <div class="bg-white p-4 rounded-lg shadow">
            <div class="flex justify-between items-center">
                <span class="text-blue-500">Jumlah Siswa</span>
                <i class="fas fa-users text-2xl"></i>
            </div>
            <div id="jumlahSiswa" class="text-2xl font-bold mt-2">0</div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <div class="flex justify-between items-center">
                <span class="text-green-500">Jumlah Guru</span>
                <i class="fas fa-user text-2xl"></i>
            </div>
            <div id="jumlahGuru" class="text-2xl font-bold mt-2">0</div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <div class="flex justify-between items-center">
                <span class="text-yellow-500">Jumlah PPDB</span>
                <i class="fas fa-book text-2xl"></i>
            </div>
            <div id="jumlahPPDB" class="text-2xl font-bold mt-2">0</div>
        </div>
    </div>
</div>

<!-- Memuat file JavaScript -->
<script src="{{ asset('js/dashboard.js') }}"></script>
