<?php
function deretAngkaHuruf($panjang)
{
    $deret = [];

    // Loop untuk menambahkan angka dan huruf sesuai pola
    for ($i = 1; $i <= $panjang; $i++) {
        if ($i % 2 != 0) { // Jika ganjil angka
            $deret[] = $i;
        } else { // Jika genap huruf
            $huruf = chr(96 + ($i / 2) * 2); // Menggunakan ASCII untuk mengonversi angka ke huruf
            $deret[] = $huruf;
        }
    }

    // Gabungkan deret menjadi string dengan spasi
    echo implode(' ', $deret);
}

deretAngkaHuruf(8); // Panjang deret diatur ke 8 untuk menghasilkan: 1 b 3 d 5 f 7 h
