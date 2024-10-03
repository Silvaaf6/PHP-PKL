<?php
    // mmbuat fungsi
    function perkenalan($nama, $salam){
        echo $salam.", <br>";
        echo "Perkenalkan, nama saya ".$nama."<br>";
        echo "Senang berkenalan dengan anda<br>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Muhardian", "Hi");

    echo "<hr>";

    $saya = "silva";
    $ucapanSalam = "Selamat pagi";
    
    // memanggilnya lagi
    perkenalan($saya, $ucapanSalam);
?>


