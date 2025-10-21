<?php
$jumlahuang = 1575250;

$a = intval($jumlahuang / 100000);
$jumlahuang = $jumlahuang % 100000;
$b = intval($jumlahuang / 50000);
$jumlahuang = $jumlahuang % 50000;
$c = intval($jumlahuang / 20000);
$jumlahuang = $jumlahuang % 20000;
$d = intval($jumlahuang / 5000);
$jumlahuang = $jumlahuang % 5000;
$e = intval($jumlahuang / 100);
$jumlahuang = $jumlahuang % 100;
$f = intval($jumlahuang / 50); 

echo "Jumlah Rp. 100.000 = " . $a . "<br>";
echo "Jumlah Rp. 50.000 = " . $b . "<br>";
echo "Jumlah Rp. 20.000 = " . $c . "<br>";
echo "Jumlah Rp. 5.000 = " . $d . "<br>";
echo "Jumlah Rp. 100 = " . $e . "<br>";
echo "Jumlah Rp. 50 = " . $f . "<br>";
?>