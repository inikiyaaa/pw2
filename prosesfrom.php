<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'];
    $produk = isset($_POST['produk']) ? $_POST['produk'] : '';
    $jumlah = $_POST['jumlah'];

    // mendapatkan harga dari data-harga pada radio button yang dipilih
    $harga = 0;

    // buat perhitungan if untuk mencari harga produk
    if ($produk == "applewatch") {
        $harga = 2100000;
    } elseif ($produk == "handphone") {
        $harga = 2500000;
    } elseif ($produk == "airpods") {
        $harga = 1750000;
    }

    // menghitung total harga
    $total_harga = $harga * $jumlah;

    // cetak hasil
    echo "<div class='container mt-4'>";
    echo "<h5>Hasil Request:</h5>";
    echo "<p><strong>Customer:</strong> $customer</p>";
    echo "<p><strong>Produk Pilihan:</strong> $produk</p>";
    echo "<p><strong>Jumlah Beli:</strong> $jumlah</p>";
    echo "<p><strong>Total Harga:</strong> $$total_harga</p>";
    echo "</div>";
}
?>