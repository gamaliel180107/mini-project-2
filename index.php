<?php
/**
 * File: index.php
 * Deskripsi: Presentation Layer yang mengintegrasikan seluruh komponen dan merender UI.
 */

// Mengimpor dependensi modul utama secara aman
require_once 'config.php';
require_once 'products.php';
require_once 'functions.php';

// Menghitung statistik inventori gudang
$totalNilaiGudang = hitungTotalNilaiStok($katalog);
$totalUnitBarang  = hitungTotalUnitStok($katalog);
$jumlahJenisBarang = count($katalog);

// Menghitung jumlah produk bernilai stok kritis (< STOK_KRITIS_THRESHOLD)
$jumlahStokKritis = 0;
foreach ($katalog as $produk) {
    if ($produk['stok'] < STOK_KRITIS_THRESHOLD) {
        $jumlahStokKritis++;
    }
}

// Merender Layout Header
include 'layout_header.php';
?>

<!-- Ringkasan Eksekutif Inventori Gudang -->
<div class="card-grid">
    <div class="card">
        <h3>Total Jenis Komoditas</h3>
        <div class="value"><?= $jumlahJenisBarang; ?> Item</div>
    </div>
    <div class="card">
        <h3>Total Unit Fisik Gudang</h3>
        <div class="value"><?= $totalUnitBarang; ?> Unit</div>
    </div>
    <div class="card">
        <h3>Total Nilai Aset Gudang</h3>
        <div class="value"><?= formatRupiah($totalNilaiGudang); ?></div>
    </div>
    <div class="card kritis">
        <h3>Perhatian Stok Kritis (< <?= STOK_KRITIS_THRESHOLD; ?>)</h3>
        <div class="value"><?= $jumlahStokKritis; ?> Produk</div>
    </div>
</div>

<!-- Tabel Informasi Produk -->
<h2>Katalog Produk & Status Inventori</h2>
<table>
    <thead>
        <tr>
            <th>Kode SKUs</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga Satuan</th>
            <th>Stok</th>
            <th>Subtotal Aset</th>
            <th>Deskripsi Produk</th>
            <th>Status Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($katalog as $produk): ?>
            <?php 
                $kelasWarna = dapatkanKelasWarnaStok($produk['stok']);
                $subtotalAset = $produk['harga'] * $produk['stok'];
            ?>
            <tr class="<?= $kelasWarna; ?>">
                <td><strong><?= htmlspecialchars($produk['id']); ?></strong></td>
                <td><?= htmlspecialchars($produk['nama']); ?></td>
                <td><?= htmlspecialchars($produk['kategori']); ?></td>
                <td><?= formatRupiah($produk['harga']); ?></td>
                <td><strong><?= $produk['stok']; ?></strong></td>
                <td><?= formatRupiah($subtotalAset); ?></td>
                <td><?= htmlspecialchars($produk['deskripsi']); ?></td>
                <td>
                    <?php if ($produk['stok'] === 0): ?>
                        <span class="status-pill habis">Habis</span>
                    <?php elseif ($produk['stok'] < STOK_KRITIS_THRESHOLD): ?>
                        <span class="status-pill kritis">Kritis</span>
                    <?php else: ?>
                        <span class="status-pill aman">Aman</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
// Merender Layout Footer
include 'layout_footer.php';
?>