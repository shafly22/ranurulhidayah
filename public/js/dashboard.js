// public/js/dashboard.js

function toggleDropdown(event) {
    event.preventDefault(); // Mencegah aksi default link
    const dropdown = event.currentTarget.nextElementSibling; // Mendapatkan elemen <ul> berikutnya
    dropdown.classList.toggle("hidden"); // Menampilkan atau menyembunyikan dropdown
}

// Menutup dropdown saat klik di luar dropdown
window.onclick = function (event) {
    const dropdown = document.getElementById("dropdown-menu");
    if (!event.target.closest(".relative")) {
        // Cek jika klik di luar dropdown
        dropdown.classList.add("hidden");
    }
};

// public/js/dashboard.js
document.addEventListener("DOMContentLoaded", function () {
    fetchDataCounts();
});

function fetchDataCounts() {
    fetch("/dashboard/data-counts")
        .then((response) => response.json())
        .then((data) => {
            document.getElementById("jumlahSiswa").innerText =
                data.jumlah_siswa;
            document.getElementById("jumlahGuru").innerText = data.jumlah_guru;
            document.getElementById("jumlahPPDB").innerText = data.jumlah_ppdb;
        })
        .catch((error) => console.error("Error fetching data:", error));
}
