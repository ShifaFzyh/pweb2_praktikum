<?php
require_once "dbkoneksi.php";
// 4) Tangkap request form
$_kode = $_POST['kode']; // 1
$_nama = $_POST['nama']; // 2
$_kaprodi = $_POST['kaprodi']; // 3
$_proses = $_POST['proses'];

// simpan dalam array data
$ar_data = [$_kode, $_nama, $_kaprodi];

// 5) Definisikan query $sql
if($proses == "Simpan"){
    $sql = "INSERT INTO prodi(kode, nama, kaprodi) VALUES (?,?,?)";
}elseif($proses == "Update"){
    $sql = "UPDATE prodi SET nama=?, kaprodi=?, kode=? WHERE id=?";
    $id_edit = $_POST['id_edit']; 
    $ar_data[] = $id_edit; // 4
}elseif($proses == "Hapus"){
    $sql = "DELETE FROM prodi WHERE id=?";
    unset($ar_data); // hapus array
    $id_delete = $_POST['id_delete'];
    $ar_data[] = $id_delete; // 1
}
// 6) buat prepare Statement query
$stmt = $bdh->prepare($sql);
// 7) Eksekusi query
$stmt->execute($ar_data);
// 8) Redirect ke list_prodi.php
header("location: list_prodi.php");

?>