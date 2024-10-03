<?php
    function persegi(){
            $sisi = 5;
            $rumus = $sisi * $sisi;

            echo "<b>Luas Persegi</b> <br>";
            echo "Sisi : $sisi <br>";
            echo "Rumus : Sisi x Sisi <br>";
            echo "Ini Hasilnya : $rumus <br> <hr>";
        }

        function persegiPanjang(){
            $panjang = 10;
            $lebar = 5;
            $rumus = $panjang * $lebar;

            echo "<b>Luas Persegi Panjang</b> <br>";
            echo "Panjang : $panjang <br>";
            echo "Lebar : $lebar <br>";
            echo "Rumus : Panjang x Lebar <br>";
            echo "Ini Hasilnya : $rumus <br><hr>";
        }

        function segitiga(){
            $alas = 3;
            $tinggi = 6;
            $rumus = $alas * $tinggi / 2;

            echo "<b>Luas Segitiga</b> <br>";
            echo "Alas : $alas <br>";
            echo "Tinggi : $tinggi <br>";
            echo "Rumus : Alas x Tinggi / 2 <br>";
            echo "Ini Hasilnya : $rumus <br><hr>";
        }

        function lingkaran(){
            $phi = 3.14;
            $ruas = 4;
            $rumus = $phi * $ruas * $ruas;

            echo "<b>Luas Lingkaran</b> <br>";
            echo "π : $phi <br>";
            echo "Jari Jari : $ruas <br>";
            echo "Rumus : π x Jari x Jari <br>";
            echo "Ini Hasilnya : $rumus <br> <hr>";
        }

persegi(); 
persegiPanjang();
segitiga();
lingkaran();

?>