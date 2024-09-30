<?php
    $umur = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

    $jumlahDewasa = 0;
    $jumlahAnak = 0;

    echo "list usia :";
    echo implode(",", $umur);

    foreach($umur as $umurs) {
        if($umurs >= 17) {
            $jumlahDewasa++; 
            // akan bertambah 1 jika terdapat umur >= 17 jika tidak maka jumlah anak yang akan bertambah 1
        } else {
            $jumlahAnak++;
        }
    }
    

    echo "<br>";
    echo "Jumlah Kategori Dewasa : " . $jumlahDewasa . "<br>";
    echo "Jumlah Kategori Anak : " . $jumlahAnak;
?>