<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nama1" id="nama1" placeholder="Nama 1">
        <input type="text" name="nama2" id="nama2" placeholder="Nama 2">
        <input type="submit" name="submit" id="submit" >
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama1 = ($_POST['nama1']);
        $nama2 = ($_POST['nama2']);

        $panjangnama1 = strlen($nama1);
        $panjangnama2 = strlen($nama2);
        // buat menghitung panjang si string

        $selisih = abs($panjangnama1 - $panjangnama2);
        // buat mengubah nilai menjadi positif

        if($panjangnama1 > $panjangnama2) {
            echo  $nama1 . " memiliki jumlah karakter lebih banyak dari " . $nama2  . " : selisih " . $selisih;
        } else {
            echo $nama2 . " memiliki jumlah karakter lebih banyak dari " . $nama1 . " : selisih " . $selisih;        
        }       
        }
        
    ?>
</body>
</html>