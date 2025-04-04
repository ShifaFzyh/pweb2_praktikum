
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2>Form Prodi</h2>
<form method="post" action="proses_prodi.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book-o"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_prodi" class="col-4 col-form-label">Nama Prodi</label>
    <div class="col-8">
      <input id="nama_prodi" name="nama_prodi" type="text" class="form-control">
    </div> 
  </div>
  <div class="form-group row">
    <label for="kepala_prodi" class="col-4 col-form-label">Kepala Prodi</label> 
    <div class="col-8">
      <input id="kepala_prodi" name="kepala_prodi" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="input" type="submit" value="Simpan" class="btn btn-primary">
    </div>
  </div>
</form>
