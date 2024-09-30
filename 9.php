<?php
function hitungPecahanUang($jumlahUang) {
    $pecahanUang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
    
    echo "Jumlah Uang : Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br>";
    echo "Lembar rupiah : <br>";

    foreach ($pecahanUang as $pecahan) {
        // Membagi jumlah uang dengan pecahan uang = jumlah lembar uang
        $jumlahLembar = intdiv($jumlahUang, $pecahan);

        // buat Mengurangi jumlah uang dengan sisa uang setelah dihitung lembar pecahannya
        $jumlahUang %= $pecahan;


        if ($jumlahLembar > 0) {
            echo "Rp. " . number_format($pecahan, 0, ',', '.') . " : " . $jumlahLembar . "<br>";
        }
    }
}

$jumlahUang = 140500;
hitungPecahanUang($jumlahUang);
?>