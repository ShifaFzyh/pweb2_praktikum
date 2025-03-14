<?php 
require_once 'ooplingkaran.php';

$lingkaran1 = new Lingkaran(8.4);
$lingkaran2 = new Lingkaran(10);

echo "Jari-jari lingkaran1 adalah " . $lingkaran1->jari;
echo "<br>Nilai PHI adalah " . Lingkaran::PHI;
echo "<br>Luas lingkaran1 adalah ". $lingkaran1->getLuas();
echo "<br>Keliling lingkaran1 adalah ". $lingkaran1->getKeliling();
echo "<hr>";
$lingkaran1->cetak();
echo "<hr>";
$lingkaran2->cetak();


?>

