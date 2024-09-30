<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jam Lembur</title>
</head>
<body>

    <form action="" method="POST">
        <label for="datang" ></label>
        <input type="number" name="datang" id="datang" placeholder="Jam Datang"><br>

        <label for="pulang" ></label>
        <input type="number" name="pulang" id="pulang" placeholder="Jam Pulang"><br>

        <button type="submit" name="kirim"> Cek Kompensasi </button>
    </form>
    <?php
    if (isset ($_POST ['kirim'])) {
        $jamDatang = $_POST ['datang'];
        $jamPulang = $_POST ['pulang'];
        $totalJamKerja = $jamPulang - $jamDatang ;

        $jamNormal = 8;
        $kompensasi = 0;

        $lembur = $totalJamKerja - $jamNormal;

        if ($lembur > 0){
            $kompensasi += 50000;

            if ($lembur > 1){
                $kompensasi += ($lembur - 1) * 25000;
            }
        }
        echo "Lama Kerja : ". ($totalJamKerja) . " Jam";
        echo "<br>";
        echo "Jam Lebih : " .($lembur). " Jam";
        echo "<br>";
        echo "Jumlah Kompensasi : ".number_format($kompensasi, 0, ',', '.');
    }
    ?>
</body>
</html>