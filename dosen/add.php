<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $nidn      = $_POST['nidn'];
  $nama     = $_POST['nama'];
  $fakultas  = $_POST['fakultas'];
  $alamat   = $_POST['alamat'];
  $email    = $_POST['email'];
  $telepon  = $_POST['telepon'];

  $result = mysqli_query($con, "INSERT INTO dosen(nidn,nama,fakultas,alamat,email,telepon) VALUES('$nidn','$nama','$fakultas','$alamat','$email','$telepon')");

  echo "<script>window.location.href ='?page=dosen';</script>";
}
?>

<h4 class="mb-5">Tambah Data Dosen</h4>

<form method="post">
    <div class="mb-3 row">
        <label for="npm" class="col-sm-2 col-form-label">NIDN</label>
        <div class="col-sm-10">
            <input type="text" name="nidn" class="form-control" placeholder="Masukan nidn...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" placeholder="Masukan nama lengkap...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
        <div class="col-sm-10">
            <select class="form-select" name="fakultas">
                <option value="-">- Pilih Fakultas-</option>
                <option value="FTI">Fakultas Teknologi Informasi</option>
                <option value="FH">Fakultas Hukum</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telepon"  class="col-sm-2 col-form-label">Telepon</label>
        <div class="col-sm-10">
            <input type="text" name="telepon" class="form-control" placeholder="Masukan telepon...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat ...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" placeholder="Masukan email...">
        </div>
    </div>

    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=dosen" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>
    
