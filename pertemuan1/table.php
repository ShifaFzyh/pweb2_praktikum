<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Tugas</th>
        <th scope="col">UTS</th>
        <th scope="col">UAS</th>
        <th scope="col">Total</th>
        <th scope="col">Predikat</th>
    </tr>
  </thead>
  <?php 
    $nilai1 = ["NIM" => "011012", "Nama" => "Shin", "Tugas" => 80, "UTS" => 85, "UAS" => 75];
    $nilai2 = ["NIM" => "011023", "Nama" => "Chan", "Tugas" => 70, "UTS" => 75, "UAS" => 95];
    $nilai3 = ["NIM" => "011034", "Nama" => "Kudo", "Tugas" => 90, "UTS" => 85, "UAS" => 80];

    $mhs = [$nilai1, $nilai2, $nilai3];

  ?>
  <tbody>
    <?php 
    foreach ($mhs as $item) { ?>
    <tr>
        <td scope="col">No</td>
        <td scope="col"><?= $item ['NIM'] ?></td>
        <td scope="col"><?= $item ['Nama'] ?></td>
        <td scope="col"><?= $item ['Tugas'] ?></td>
        <td scope="col"><?= $item ['UTS'] ?></td>
        <td scope="col"><?= $item ['UAS'] ?></td>
        <td scope="col">Total</td>
        <td scope="col">Predikat</td>
    </tr>
        <?php } ?>
    
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


<!-- Tugas belajar mandiri menyelesaikan total dan predikat di atas, dengan kalkulasi total nilai -->