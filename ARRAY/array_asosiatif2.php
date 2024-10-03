<?php
    $buku = [
        [
            "judul" => "siksa kubur",
            "penerbit" => "surya"
        ],
        [
            "judul" => "indahnya surga",
            "penerbit" => "silva"
        ],
    ];

    foreach ($buku as $data) {
        echo "judul : ".$data["judul"]."<br>";
        echo "penerbit : ".$data["penerbit"]."<br>";
        echo "<br>";
    };
?>