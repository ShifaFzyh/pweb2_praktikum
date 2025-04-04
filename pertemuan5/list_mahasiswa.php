<?php
require_once "dbkoneksi.php";
// 4) Buat query SQL Data Mahasiswa
$sql = "SELECT * FROM mahasiswa";
// 5) Eksekusi query
$rs = $bdh->query($sql);
// 6) Ambil data hasil query populer data ke dalam array
foreach ($rs as $row) {
    echo $row ->nim . " - " . $row ->nama . "<br>";
}

?>