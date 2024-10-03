<?php
function tampilkanPilihan() {
    echo "Pilih Mau Pilihan Apa?:\n";
    echo "1. Kertas\n";
    echo "2. Gunting\n";
    echo "3. Batu\n";
}

function tentukanPemenang($pilihanPemain1, $pilihanPemain2) {
    // Aturan permainan suit
    // 1 = Kertas, 2 = Gunting, 3 = Batu
    if ($pilihanPemain1 == $pilihanPemain2) {
        return "Seri!";
    } elseif (
        ($pilihanPemain1 == 1 && $pilihanPemain2 == 2) ||
        ($pilihanPemain1 == 2 && $pilihanPemain2 == 3) ||
        ($pilihanPemain1 == 3 && $pilihanPemain2 == 1)
    ) {
        return "Pemain 1 Menang!";
    } else {
        return "Pemain 2 Menang!";
    }
}

// Main program
tampilkanPilihan();

$pilihanPemain1 = intval(trim(fgets(STDIN)));

if ($pilihanPemain1 < 1 || $pilihanPemain1 > 3) {
    echo "Pilihan tidak valid!\n";
    exit;
}

$pilihanPemain2 = rand(1, 3);

// Menampilkan pilihan Pemain1$pilihanPemain1 dan Pemain2
$pilihan = ["", "Kertas", "Gunting", "Batu"];
echo "Pemain1 memilih: " . $pilihan[$pilihanPemain1] . "\n";
echo "Pemain2 memilih: " . $pilihan[$pilihanPemain2] . "\n";

// Menentukan pemenang
$hasil = tentukanPemenang($pilihanPemain1, $pilihanPemain2);
echo $hasil . "\n";
?>
