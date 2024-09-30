<?php
$siswa = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88]
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81]
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81]
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88]
    ]
];

$angka = 1;
foreach ($siswa as $murid) {
    $rata_rata = array_sum($murid['nilai']) / count($murid['nilai']);
    // array sum ini buat menjumlahkan semua nilai siswa 
    // count buat menghitung jumlah elemen dalam array nilai siswa
    echo $angka . ". " . $murid['nama'] . " = " . number_format($rata_rata, 1) . "<br>";
    $angka++;
    // buat menambah 1 pada variabel untuk siswa lainnya
}
?>