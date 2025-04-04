<?php
require_once "dbkoneksi.php";
// 4) Buat query SQL Data Prodi
$sql = "SELECT * FROM prodi";
// 5) Eksekusi query
$rs = $bdh->query($sql);
// 6) Ambil semua data hasil query
//foreach ($rs as $row) {
//    echo $row ->kode . " - " . $row ->nama . "<br>";
//}
?>
<a href="form_prodi.php">Tambah Data</a>
<table border="1" width="100%">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Prodi</th>
        <th>Kepala Prodi</th>
        <th>Aksi</th>
    </tr>
    <?php
    $nomor = 1;
    foreach ($rs as $row) { ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $row->kode; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->kaprodi; ?></td>
            <td>
                <a href="form_prodi.php?id_edit=<?php echo $row->id_edit; ?>">Edit</a>
                <a href="proses_prodi.php?id_delete=<?php echo $row->id_hapus; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
</table>        