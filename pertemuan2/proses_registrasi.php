<?php

$_nim = $_POST['nim'];
$_namaLengkap = $_POST['namaLengkap'];
$_jenisKelamin = $_POST['jenisKelamin'];
$_programStudi = $_POST['programStudi'];
$_skill = $_POST['skill'];
$_skill_pilihan = $_POST['skill'];
$_domisili = $_POST['domisili'];
$_email = $_POST['email'];

?>
<h2>Data Peserta IT Club Science</h2>
    <br> NIM: <?=$_nim; ?>
    <br> Nama Lengkap: <?=$_namaLengkap; ?>
    <br> Jenis Kelamin: <?=$_jenisKelamin; ?>
    <br> Program Studi: <?=$ar_prodi[$_programStudi]; ?>
    <br> Skill Web & Programming: <?=$_skill_pilihan; ?>
    <br> Skor Skill: <?php $total = 0; foreach ($_skill as $v) $total += $ar_skill[$v]; echo $total; ?>
    <br> Kategori Skill:
    <br> Domisili: <?=$_domisili; ?>
    <br> Email: <?=$_email; ?>


    <br> Nilai Akhir: <?=$_nilai_uts + $_nilai_uas + $_nilai_tugas; ?>
    
          <?php
          $total = $_nilai_uts + $_nilai_uas + $_nilai_tugas;
          if ($total >= 80) {
            echo "A";
          } elseif ($total >= 70) {
            echo "B";
          } elseif ($total >= 60) {
            echo "C";
          } elseif ($total >= 50) {
            echo "D";
          } else {
            echo "E";
          }
          ?>