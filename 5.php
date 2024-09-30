<?php
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    $kel1 = array_intersect($bil1, $bil2);
    $kel2 = array_diff($bil1, $bil2);
    // membandingkan dua arrray
    // intersect hanya memunculkan elemen ada di kedua array 
    // diff kebalikannya kalau gaadadi kedua array bakal muncul

    echo "Bilangan yang ada di kedua variabel <br>" . implode(",", $kel1) . "<br>";
    echo "Bilangan yang tidak ada di kedua variabel <br>" . implode(",", $kel2) . "<br>";
?>