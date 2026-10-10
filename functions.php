<?php
/**
 * File: functions.php
 * Deskripsi: Processing Layer penampung fungsi bisnis dan helper visual.
 */

require_once 'config.php';

/**
 * Mengalkulasi total nilai aset gudang (Harga * Stok).
 * 
 * @param array $daftarProduk Multidimensional array dari produk
 * @return float Total nilai rupiah dari seluruh persediaan
 */
function hitungTotalNilaiStok(array $daftarProduk): float {
    $totalNilai = 0;
    foreach ($daftarProduk as $item) {
        $totalNilai += ($item['harga'] * $item['stok']);
    }
    return $totalNilai;
}

/**
 * Mengalkulasi total unit barang fisik yang ada di gudang.
 * 
 * @param array $daftarProduk
 * @return int Total jumlah fisik item
 */
function hitungTotalUnitStok(array $daftarProduk): int {
    $totalUnit = 0;
    foreach ($daftarProduk as $item) {
        $totalUnit += $item['stok'];
    }
    return $totalUnit;
}

/**
 * Memeriksa status stok dan mengembalikan kelas CSS untuk pewarnaan baris tabel.
 * Logika: Stok 0 (Habis/Merah), Stok < 3 (Kritis/Kuning), Stok >= 3 (Aman/Normal).
 * 
 * @param int $stok Jumlah stok barang
 * @return string Nama kelas CSS
 */
function dapatkanKelasWarnaStok(int $stok): string {
    if ($stok === 0) {
        return 'baris-stok-habis';
    } elseif ($stok < STOK_KRITIS_THRESHOLD) {
        return 'baris-stok-kritis';
    } else {
        return 'baris-stok-aman';
    }
}

/**
 * Memformat nominal angka menjadi format mata uang Rupiah (IDR).
 * 
 * @param float|int $angka Nominal angka
 * @return string Teks terformat Rupiah
 */
function formatRupiah($angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>