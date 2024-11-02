@extends('layouts.ppdblayouts')

@section('konten')

<!-- Hero Section -->
<section class="w-full bg-[#EDF5F4] py-14">
    <div class="container mx-auto">
      <div class="w-[90%] flex mx-auto items-center">
        <div class="w-2/4 pr-4">
          <h1 class="font-poppins font-bold text-5xl text-[#272626] mb-2">Selamat Datang Di PPDB Online</h1>
          <h2 class="font-bold text-2xl text-[#423F3F] py-1 mb-2">RA NURUL HIDAYAH</h2>
          <p class="font-medium text-sm text-[#423F3F] leading-relaxed mb-3">Akses dan cari tahu prosedur serta ketentuan informasi pendaftaran RA NURUL HIDAYAH.</p>
          <div class="flex gap-2">
            <a href="#" class="py-4 px-10 bg-[#5EC6BA] text-white font-semibold rounded-full flex items-center justify-center drop-shadow shadow-inner hover:bg-transparent hover:bg-white hover:text-black transition-all duration-500">Mendaftar</a>
          </div>
        </div>
        <div class="flex-grow flex justify-end">
          <div class="w-4/2 h-auto rounded-xl overflow-hidden">
            <img alt="Gambar" class="w-full h-auto object-cover" src="{{ asset('assets/images/01.png') }}">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
  
  <!-- Alur Pendaftaran Section -->
  <section class="w-full bg-[#EDF5F4] py-20">
    <div class="container mx-auto">
      <div class="flex justify-center">
        <div class="max-w-4xl w-full mx-auto rounded-lg shadow-2xl bg-white p-8">
          <h2 class="text-3xl font-bold mb-4 text-center">Alur Pendaftaran</h2>
          <p class="text-gray-600 mb-6 text-center text-lg">Sebagai panduan Anda untuk mengikuti program pembelajaran di sekolah kami, kami sediakan panduan alur pendaftaran sebagai berikut:</p>
          <div class="flex justify-around">
            <!-- Step Cards -->
            <div class="flex flex-col items-center justify-center">
              <img src="{{ asset('assets/images/pencil-dynamic-color.png') }}" alt="Daftar Online" class="w-15">
              <p class="mt-2 text-gray-700 font-medium">Daftar Online</p>
            </div>
            <div class="flex flex-col items-center justify-center">
              <img src="{{ asset('assets/images/megaphone-dynamic-color.png')}}" alt="Pengumuman" class="w-15">
              <p class="mt-2 text-gray-700 font-medium">Pengumuman</p>
            </div>
            <div class="flex flex-col items-center justify-center">
              <img src="{{ asset('assets/images/folder-dynamic-color.png')}}" alt="Heregistrasi" class="w-15">
              <p class="mt-2 text-gray-700 font-medium">Heregistrasi</p>
            </div>
            <div class="flex flex-col items-center justify-center">
              <img src="{{asset('assets/images/notebook-dynamic-color.png')}}" alt="Selesai" class="w-15">
              <p class="mt-2 text-gray-700 font-medium">Selesai</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Alur Pendaftaran Section -->
  
  <!-- Informasi Section -->
  <section class="w-full bg-[#EDF5F4] py-20">
    <div class="container bg-[#EDF5F4] mx-auto px-4 py-16">
      <div class="max-w-4xl mx-auto rounded-lg shadow-2xl bg-white p-6">
        <h2 class="text-2xl font-bold mb-4 text-center">INFORMASI PPDB ONLINE</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="max-w-md">
            <p class="text-gray-700 text-base leading-relaxed">RA NURUL HIDAYAH menyediakan PPDB secara online diharapkan proses PPDB dapat berjalan cepat dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka.</p>
          </div>
          <div class="max-w-md">
            <p class="text-gray-700 text-base leading-relaxed">Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai dalam proses PPDB.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Informasi Section -->
  
  <!-- Persyaratan Section -->
  <section class="w-full bg-[#EDF5F4] py-18">
    <div class="container bg-[#EDF5F4] mx-auto px-4 py-16">
      <div class="max-w-4xl mx-auto rounded-lg shadow-2xl bg-white p-6">
        <h2 class="text-2xl font-bold mb-4 text-center">PERSYARATAN PPDB</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="max-w-md">
            <p class="text-gray-700 text-base leading-relaxed mb-4">Persyaratan untuk mendaftar PPDB tahun ajaran 2024/2025:</p>
            <ul class="list-disc pl-5 text-gray-700 text-base leading-relaxed">
              <li>Fotokopi akta kelahiran atau surat keterangan kelahiran</li>
              <li>Fotokopi Kartu Keluarga (KK)</li>
              <li>Fotokopi KTP orang tua/wali</li>
              <li>Pas foto 3 x 4 sebanyak 3 lembar</li>
            </ul>
          </div>
          <div class="max-w-md">
            <ul class="list-disc pl-5 text-gray-700 text-base leading-relaxed">
              <li>Usia Kelompok A minimal 4 tahun di bulan Juni 2024</li>
              <li>Usia Kelompok B minimal 5 tahun di bulan Juni 2024</li>
              <li>Pendaftaran dilakukan secara online</li>
              <li>Membayar biaya pendaftaran Rp. 350.000</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Persyaratan Section -->
  
  <!-- More Info Section -->
  <div class="w-full bg-[#EDF5F4] py-8">
    <div class="max-w-3xl mx-auto rounded-lg shadow-xl bg-white p-6">
      <h2 class="text-2xl font-bold mb-6 text-center">Biaya Pendaftaran</h2>

      <!-- FAQ Item 1 -->
      <div class="border-b border-gray-300 py-4">
        <button class="w-full text-left flex items-center justify-between"
          onclick="toggleDropdown('faq1')">
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-600 mr-2" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"
                d="M13 16h-1v-4h-1m0-4h.01M12 12h.01m-1-1V8m0 2h.01m-1-1V8M12 12v8m0-4h-.01M12 12h.01m-.01 0H11"></path>
            </svg>
            <span class="text-gray-800 font-semibold">Bagaimana Cara Melakukan
              Pembayaran ?</span>
          </div>
          <svg id="icon-faq1" xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq1"
          class="hidden mt-3 pl-7 text-gray-600 text-sm leading-relaxed">
          Proses pembayaran biaya pendaftaran dan heregistrasi dapat dilakukan
          melalui Bank Mandiri, BPD, dan BNI atau dapat diserahkan langsung ke
          Bidang Administrasi Sekolah pada jam kerja dengan mengikuti protokol
          kesehatan.
        </div>
      </div>

      <!-- FAQ Item 2 -->
      <div class="border-b border-gray-300 py-4">
        <button class="w-full text-left flex items-center justify-between"
          onclick="toggleDropdown('faq2')">
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-600 mr-2" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"
                d="M13 16h-1v-4h-1m0-4h.01M12 12h.01m-1-1V8m0 2h.01m-1-1V8M12 12v8m0-4h-.01M12 12h.01m-.01 0H11"></path>
            </svg>
            <span class="text-gray-800 font-semibold">Dimana Saya Dapat
              Mengakses Hasil Seleksi ?</span>
          </div>
          <svg id="icon-faq2" xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq2"
          class="hidden mt-3 pl-7 text-gray-600 text-sm leading-relaxed">
          Informasi mengenai hasil seleksi dapat diakses melalui laman resmi
          sekolah pada bagian "Hasil Seleksi".
        </div>
      </div>

      <!-- FAQ Item 3 -->
      <div class="border-b border-gray-300 py-4">
        <button class="w-full text-left flex items-center justify-between"
          onclick="toggleDropdown('faq3')">
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-600 mr-2" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"
                d="M13 16h-1v-4h-1m0-4h.01M12 12h.01m-1-1V8m0 2h.01m-1-1V8M12 12v8m0-4h-.01M12 12h.01m-.01 0H11"></path>
            </svg>
            <span class="text-gray-800 font-semibold">Apakah Ada Keringanan
              Untuk Proses Pendaftaran ?</span>
          </div>
          <svg id="icon-faq3" xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq3"
          class="hidden mt-3 pl-7 text-gray-600 text-sm leading-relaxed">
          Keringanan dapat diajukan berdasarkan syarat dan ketentuan sekolah
          yang berlaku. Silakan menghubungi bagian administrasi untuk
          informasi lebih lanjut.
        </div>
      </div>

      <!-- FAQ Item 4 -->
      <div class="py-4">
        <button class="w-full text-left flex items-center justify-between"
          onclick="toggleDropdown('faq4')">
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-600 mr-2" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"
                d="M13 16h-1v-4h-1m0-4h.01M12 12h.01m-1-1V8m0 2h.01m-1-1V8M12 12v8m0-4h-.01M12 12h.01m-.01 0H11"></path>
            </svg>
            <span class="text-gray-800 font-semibold">Adakah Kontak Untuk
              Mengupdate Informasi ?</span>
          </div>
          <svg id="icon-faq4" xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq4"
          class="hidden mt-3 pl-7 text-gray-600 text-sm leading-relaxed">
          Ya, Anda dapat menghubungi bagian admin di kontak resmi sekolah
          untuk mengupdate informasi Anda.
        </div>
      </div>

    </div>
  </div>

  <script>
    function toggleDropdown(faqId) {
      const faq = document.getElementById(faqId);
      const icon = document.getElementById('icon-' + faqId);
  
      // Toggle the hidden class
      faq.classList.toggle('hidden');
  
      // Toggle icon rotation for dropdown
      icon.classList.toggle('transform');
      icon.classList.toggle('rotate-180');
    }
  </script>

@endsection