<?php
    $data = [
        [
            "Nama" => "Silva Aulia Fathihah",
            "Tanggal_lahir" => "06 November 2006",
            "Jenis_kelamin" => "Perempuan",
            "Hobi" =>  [
                            ["nama_hobi" => "mengaji"],
                            ["nama_hobi" => "nyanyi"],
                       ],
            "Cita_cita" =>  [
                                ["nama_cita" => "sukses"],
                                ["nama_cita" => "gatau <br>"],
                            ]
        ],
        [
            "Nama" => "Riska Setia Deswita",
            "Tanggal_lahir" => "21 Desember 2006",
            "Jenis_kelamin" => "Perempuan",
            "Hobi" =>  [
                        ["nama_hobi" => "mengaji"],
                        ["nama_hobi" => "nyanyi"],
                       ],
            "Cita_cita" =>  [
                                ["nama_cita" => "sukses"],
                                ["nama_cita" => "gatau"],
                            ]
        ],
    ];

    foreach ($data as $diri) {
        echo "Nama : ".$diri["Nama"]."<br>";
        echo "Tanggal lahir : ".$diri["Tanggal_lahir"]."<br>";
        echo "Jenis kelamin : ".$diri["Jenis_kelamin"]."<br>";
        echo "Hobi : ";
    
    foreach ($diri["Hobi"] as $diri2) {
        echo "<li>".$diri2["nama_hobi"]."<br>";}

    echo "cita-cita : ";
    foreach ($diri["Cita_cita"] as $diri2) {
        echo "<li>".$diri2["nama_cita"]."<br>";
    }
    }
?>