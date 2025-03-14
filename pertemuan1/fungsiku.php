<!--Materi pekan ke 3-->

<?php
/**
 * Fungsi untuk menghitung nilai akhir
 * @param $nilai_uts Nilai UTS (0-100)
 * @param $nilai_uas Nilai UAS (0-100)
 * @param $nilai_tugas Nilai Tugas/Praktikum (0-100)
 * @return Nilai akhir Mahasiswa
 */

function hitung_nilai ($nilai_uts, $nilai_uas, $nilai_tugas) {
    define("NILAI_UTS", 0.25);
    define("NILAI_UAS", 0.30);
    define("NILAI_TUGAS", 0.45);
    $nilai_akhir = (NILAI_UTS*$nilai_uts) + (NILAI_UAS*$nilai_uas) + (NILAI_TUGAS*$nilai_tugas);
    return $nilai_akhir;
}

/**
 * Fungsi untuk menentukan kelulusan
 * @param $nilai Nilai Akhir Mahasiswa
 * @return LULUS jika nilai >= 60, TIDAK LULUS jika nilai < 60
 */
function kelulusan ($nilai){
    Define("NILAI_LULUS", 60);
    if ($nilai >= NILAI_LULUS) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function grade ($nilai){
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}

?>