<?php
    $data = [80, 90, 75, 100, 85, 100, 66];
    $cari = 100;

    $jumlah = array_count_values($data);
    // arraycountvalues untuk menghitung berapa kali setiap nilai muncul dalam array $data

    // memeriksa apakah elemen yang dicari ada d array $data
    // klo ada blok kode di dalam if bakal berfungsi
    if (isset($jumlah[$cari])) {
        echo "Jumlah angka " . $cari . " = " . $jumlah[$cari];
    }
?>