<?php
$saldoAwal = 1000000;       // saldo awal Rp1.000.000
$bunga = 0.0025;             // bunga 0.25% atau 0.0025 dalam desimal
$bulan = 11;                 // lama menabung 11 bulan

// menghitung saldo akhir setelah 11 bulan dengan bunga majemuk tiap bulan
$saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);

echo "Saldo akhir setelah " . $bulan . " bulan adalah: Rp. " . round($saldoAkhir, 2);
?>