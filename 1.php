<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text"  id="input-teks" name="teks" placeholder="Masukkan Teks" required>
        <button type="submit">cek angka</button>
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $teks = $_POST["teks"];
    echo ceknilai($teks);
}

function ceknilai($teks){
$result = preg_replace('/[^0-9]/', '', $teks); 
// preg replace untuk melakukan pergantian atau pencarian suatu berdasarkan pola tertentu
// pattern: Pola regular expression yang akan dicari dalam string.
// replacement: Teks pengganti untuk bagian string yang tdk cocok dengan pola.
// subject: String yang akan diproses.

if($result) {
    $array = str_split($result);
    // str_split buat mecahin string ke array
    $hasil = "Teks mengandung angka : " . implode(',', $array);
    // implode: Pemisah yang akan digunakan di antara elemen-elemen array dalam string hasil gabungan
} else {
    $hasil ="Teks tidak mengandung angka";
}
echo $hasil;
}

?>