<?php
    $data = [
        [
            "NIS" => 1001,
            "Nama" => "Radin",
            "Kelas" => "XI RPL 1",
            "eskul" =>  [
                            ["nama_eskul" => "seni tari"],
                            ["nama_eskul" => "karawitan"],
                            ["nama_eskul" => "futsal <br>"],
                        ]
        ],
        [
            "NIS" => 1002,
            "Nama" => "Silva",
            "Kelas" => "XI RPL 1",
            "eskul" =>  [
                            ["nama_eskul" => "mengaji"],
                            ["nama_eskul" => "membaca"],
                            ["nama_eskul" => "bersedekah"],
                        ]
        ],
    ];
    foreach ($data as $biodata) {
        echo "NIS : ".$biodata["NIS"]."<br>";
        echo "Nama : ".$biodata["Nama"]."<br>";
        echo "Kelas : ".$biodata["Kelas"]."<br>";
        echo "eskul : ";
    
    foreach ($biodata["eskul"] as $biodata2) {
        echo "<li>".$biodata2["nama_eskul"]."<br>";
    };
};
?>