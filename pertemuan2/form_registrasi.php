<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container px-5 my-5">
        <form method="POST" action="proses_registrasi.php">
            <h2 class="mb-4">Form Registrasi IT Club Data Science</h2>
            
            <!-- NIM -->
            <div class="mb-3">
                <label class="form-label" for="nim">NIM</label>
                <input class="form-control" id="nim" name="nim" type="text" placeholder="NIM" required />
                <div class="invalid-feedback">NIM is required.</div>
            </div>
            
            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                <input class="form-control" id="namaLengkap" name="namaLengkap" type="text" placeholder="Nama Lengkap" required />
                <div class="invalid-feedback">Nama Lengkap is required.</div>
            </div>
            
            <!-- Jenis Kelamin -->
            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="lakiLaki" type="radio" name="jenisKelamin" value="Laki-laki" required />
                    <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="perempuan" type="radio" name="jenisKelamin" value="Perempuan" required />
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                <div class="invalid-feedback">One option is required.</div>
            </div>
            
            <!-- Program Studi -->
            <?php 
                $ar_prodi = [
                    "TI" => "Teknik Informatika", 
                    "SI" => "Sistem Informasi", 
                    "BD" => "Bisnis Digital"
                ];
            ?>
            <div class="mb-3">
                <label class="form-label" for="programStudi">Program Studi</label>
                <select class="form-select" id="programStudi" name="programStudi" required>
                    <option value="">Pilih Program Studi</option>
                    <?php foreach ($ar_prodi as $k => $v) echo "<option value='$k'>$v</option>"; ?>
                </select>
            </div>
            
            <!-- Skill Web & Programming -->
            <?php 
                $ar_skill = [
                    "HTML" => 10, "CSS" => 10, "JavaScript" => 30, 
                    "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50
                ];
            ?>
            <div class="mb-3">
                <label class="form-label d-block">Skill Web & Programming</label>
                <?php foreach($ar_skill as $k => $v) echo "<div class='form-check'><input class='form-check-input' type='checkbox' name='skill[]' value='$k'> <label class='form-check-label'>$k</label></div>"; ?>
                <div class="invalid-feedback">One option is required.</div>
            </div>
            
            <!-- Domisili -->
            <?php 
                $ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];
            ?>
            <div class="mb-3">
                <label class="form-label" for="domisili">Domisili</label>
                <select class="form-select" id="domisili" name="domisili" required>
                    <option value="">Pilih Domisili</option>
                    <?php foreach ($ar_domisili as $v) echo "<option value='$v'>$v</option>"; ?>
                </select>
            </div>
            
            <!-- Email -->
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" name="email" type="email" placeholder="Email" required />
                <div class="invalid-feedback">Email is required.</div>
            </div>
            
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
