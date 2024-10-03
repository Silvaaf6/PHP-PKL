<?php
// Array input angka
$angka = [1, 2, 5, 4, 5, 3, 2, 6, 7, 5, 8, 9, 5, 5, 4];

// Menghitung frekuensi kemunculan setiap angka
$frekuensi = array_count_values($angka);

$hasil = [];

// Menyimpan angka yang muncul lebih dari sekali ke dalam array hasil
foreach ($frekuensi as $angka => $jumlah) {
    if ($jumlah > 1) {
        $hasil[] = $angka;
    }
}

// Menampilkan angka hasil dalam format array
echo "Angka yang sama : [" . implode(", ", $hasil) . "]\n";
var_dump  ($hasil);