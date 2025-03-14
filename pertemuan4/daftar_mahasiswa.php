<?php
    include 'class_mahasiswa.php';

    $daftar_mahasiswa = [
        new Mahasiswa("19001", "Shaany Archy", 2024, "Teknik Informatika", 3.75),
        new Mahasiswa("19002", "Kim Dokja", 2021, "Bisnis Digital", 3.50),
        new Mahasiswa("19003", "Sung Jinwoo", 2022, "Teknik Informatika", 2.25),
        new Mahasiswa("19004", "Yoo Joonghyuk", 2021, "Sistem Informasi", 2.50),
        new Mahasiswa("19005", "Han Sooyoung", 2023, "Teknik Informatika", 1.75),
    ];

    if (isset($_POST ['nim'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $thn_angkatan = $_POST['thn_angkatan'];
        $prodi = $_POST['prodi'];
        $ipk = $_POST['ipk'];

        array_push ($daftar_mahasiswa, new Mahasiswa($nim, $nama, $thn_angkatan, $prodi, $ipk));
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h2>Daftar Mahasiswa</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tahun Angkatan</th>
                        <th>Program Studi</th>
                        <th>IPK</th>
                        <th>Predikat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($daftar_mahasiswa as $mhs) {

                    ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mhs->nim; ?></td>
                        <td><?= $mhs->nama; ?></td>
                        <td><?= $mhs->thn_angkatan; ?></td>
                        <td><?= $mhs->prodi; ?></td>
                        <td><?= $mhs->ipk; ?></td>
                        <td><?= $mhs->predikat_ipk(); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>    