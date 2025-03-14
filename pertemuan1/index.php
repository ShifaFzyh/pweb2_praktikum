<?php 
//cara mencetak suatu nilai
    echo "Bangchan! <br>"; // echo digunakan untuk menampilkan output
    $namaDepan = "Christopper"; //variabel
    $namaBelakang = "Banhg";
    echo $namaDepan . " " . $namaBelakang . "<br>";
    echo "$namaDepan $namaBelakang";
    echo "<br>";

    define("PHI", 3.14); //konstanta hanya bisa satu kali didefinisikan
    //echo PHI;
    $jari = 12;
    $luas = PHI * $jari ** 2;
    echo "luas lingkaran adalah $luas";

    //variabel sistem adalah variabel yang sudah didefinisikan oleh PHP
    
?>