<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <form method="POST" action="">
        <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div>
        <label>Alamat</label> <br>
        <input type="text-area" name="alamat">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="l"> Laki-Laki <br>
        <input type="radio" name="jenis_kelamin" value="p"> Perempuan
    </div>
    <div>
        <label>Tes Akademik</label> <br>
        <input type="number" name="tes_akademik">
    </div>
    <div>
        <label>Tes Atletik</label> <br>
        <input type="number" name="tes_atletik">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Kepribadian</label> <br>
        <input type="radio" name="kepribadian" value=""> Introvert <br>
        <input type="radio" name="kepribadian" value=""> Ekstrovert
    </div>

    <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if (isset ($_POST['submit'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jenis_kelamin'];
            $ta = $_POST['tes_akademik'];
            $atletik = $_POST['tes_atletik'];
            $kp = $_POST['kepribadian'];
            $value = $ta + $atletik;

            function hitung ($ta, $atletik) {
            $value = $ta + $atletik;
                if ($value < 75) {
                    return ("kamu tidak lulus");
                } else {
                    return ("kamu lulus");
                };
            };


            echo "<center>";
            echo "<table>";
            echo "<tr><td> Nama <td>:<td> $nama <br>";
            echo "<tr><td>Alamat <td>:<td> $alamat <br>";
            echo "<tr><td>Jenis Kelamin <td>:<td> $jk <br>";
            echo "<tr><td>Tes Akademik <td>:<td> $ta<br>";
            echo "<tr><td>Tes Atletik <td>:<td> $atletik <br>";
            echo "<tr><td>Kepribadian <td>:<td> $kp <br>";
            echo "<tr><td>Keterangan <td>:<td> hitung ($ta, $atletik) <br>";
            echo "</table>";
        };
    ?>
</body>
</html>