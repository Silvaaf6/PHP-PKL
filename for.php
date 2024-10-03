<?php
    //perulangan genap
    //$kelas = 2;
    // $makskelas = 12;

    //for($kelas ; $kelas <= $makskelas; $kelas = ++$kelas){
    //    echo "kelas anda = $kelas <br>";
    //}

 
    //perulangan ganjil
    //$kelas = 0;
    // $makskelas = 12;

    //for($kelas ; $kelas <= $makskelas; $kelas = ++$kelas){
    //    echo "kelas anda = $kelas <br>";
    //}

    //perulangan 0 1 1 2 3 5 8 13
    $kelas = 1;
    $maxkelas = 0;
    
    for ($kelas=0; $kelas <= 13; $kelas++){
        echo "kelas anda $kelas <br>";

        $tambah = $maxkelas + $kelas;
        $kelas = $maxkelas;
        $maxkelas = $tambah;
    } 
?>