<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $nilai = $_POST['nilai'];

    $result = mysqli_query($con, "INSERT INTO mata_kuliah(kode_mk,nama,sks,nilai) VALUES('$kode_mk','$nama','$sks','$nilai')");

    echo "<script>window.location.href ='?page=mataKuliah';</script>";
}
?>

<h4 class="mb-5">Tambah Data Mata Kuliah</h4>

<form method="post">
    <div class="mb-3 row">
        <label for="npm" class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="kode_mk" class="form-control" placeholder="Masukan kode mata kuliah...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" placeholder="Masukan nama mata kuliah...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="sks" class="col-sm-2 col-form-label">Sks</label>
        <div class="col-sm-10">
            <select class="form-select" name="sks">
                <option value="-">- Pilih Sks-</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
        <div class="col-sm-10">
            <input type="text" name="nilai" class="form-control" placeholder="Masukan nilai...">
        </div>
    </div>

    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=mataKuliah" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>