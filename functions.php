<?php
declare(strict_types=1);

// format rupiah
function formatRupiah(int $angka) : string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// cek ketersedian
function cekKetersediaan(bool $isTersedia) : string {
    return match($isTersedia) {
        true => "Tersedia",
        false => "Habis",
    };
}

// 3. hitung total harga
function hitungTotalHarga(array $dataMenu) : int {
    $semuaHarga = array_column($dataMenu, 'harga');
    return array_sum($semuaHarga);
}

// 4. hitung jumlah menu
function hitungJumlahMenu(array $dataMenu) : int {
    return count($dataMenu);
}

// pengaman xss
function e(string $teks) : string {
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}