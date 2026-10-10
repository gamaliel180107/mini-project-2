<?php
/**
 * File: products.php
 * Deskripsi: Data Layer yang menyimpan koleksi produk dalam Multidimensional Array.
 */

$katalog = [
    [
        "id"        => "PRD-001",
        "nama"      => "Laptop Asus ROG Strix G16",
        "kategori"  => "Elektronik",
        "harga"     => 22500000,
        "stok"      => 5,
        "deskripsi" => "Laptop gaming powerful dengan prosesor Intel i7 gen 13 dan RTX 4060."
    ],
    [
        "id"        => "PRD-002",
        "nama"      => "Mouse Wireless Logitech MX Master 3S",
        "kategori"  => "Aksesoris",
        "harga"     => 1650000,
        "stok"      => 2, // Stok Kritis (< 3)
        "deskripsi" => "Mouse ergonomis nirkabel dengan sensor Quiet Clicks 8K DPI."
    ],
    [
        "id"        => "PRD-003",
        "nama"      => "Keyboard Mechanical Keychron K2 V2",
        "kategori"  => "Aksesoris",
        "harga"     => 1350000,
        "stok"      => 8,
        "deskripsi" => "Keyboard mechanical Bluetooth layout 75% switch Gateron Brown."
    ],
    
    [
        "id"        => "PRD-004",
        "nama"      => "Monitor Gaming LG UltraGear 27 Inch",
        "kategori"  => "Elektronik",
        "harga"     => 3400000,
        "stok"      => 1, // Stok Kritis (< 3)
        "deskripsi" => "Monitor IPS Full HD 144Hz 1ms dengan dukungan NVIDIA G-Sync."
    ],
    [
        "id"        => "PRD-005",
        "nama"      => "Headset Wireless SteelSeries Arctis Nova 7",
        "kategori"  => "Audio",
        "harga"     => 2850000,
        "stok"      => 0, // Stok Habis (< 3)
        "deskripsi" => "Headset nirkabel multi-platform dengan High-Fidelity Audio."
    ],
    [
        "id"        => "PRD-006",
        "nama"      => "Webcam Logitech C920 HD Pro",
        "kategori"  => "Aksesoris",
        "harga"     => 980000,
        "stok"      => 12,
        "deskripsi" => "Webcam Full HD 1080p dengan mikrofon stereo ganda untuk streaming."
    ]
];
?>