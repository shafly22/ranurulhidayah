<!-- resources/views/backend/admin/sidebar.blade.php -->
<div class="w-full md:w-1/4 bg-teal-500 h-auto md:h-screen p-4">
    <div class="flex items-center mb-6">
        <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
        <span class="ml-4 text-white font-bold">RA NURUL HIDAYAH</span>
    </div>
    <ul>
        <li class="mb-4">
            <a href="{{ route('dashboard') }}" class="flex items-center text-white">
                <i class="fas fa-th-large mr-2"></i> Dashboard
            </a>
        </li>
        
        <li class="mb-4">
            <a href="#" class="flex items-center text-white" onclick="toggleDropdown(event)">
                <i class="fas fa-database mr-2"></i> Data Akademik <i class="fas fa-chevron-right ml-auto"></i>
            </a>
            <ul class="hidden mt-2 bg-white rounded-md">
                <li class="mb-2">
                    <a href="{{ route('data-guru') }}" class="flex items-center text-black pl-4">
                        <i class="fas fa-chalkboard-teacher mr-2"></i> Data Guru
                    </a>
                </li>
                <li class="mb-2">
                    <a href="/data-siswa" class="flex items-center text-black pl-4">
                        <i class="fas fa-user-graduate mr-2"></i> Data Siswa
                    </a>
                </li>
            </ul>
        </li>
        <li class="mb-4">
            <a href="#" class="flex items-center text-white">
                <i class="fas fa-money-bill-wave mr-2"></i> Pembayaran SPP
            </a>
        </li>
        <li class="mb-4">
            <a href="#" class="flex items-center text-white">
                <i class="fas fa-edit mr-2"></i> PPDB
            </a>
        </li>
        <li class="mb-4">
            <a href="#" class="flex items-center text-white">
                <i class="fas fa-money-bill-wave mr-2"></i> Pembayaran PPDB
            </a>
        </li>
    </ul>
</div>
