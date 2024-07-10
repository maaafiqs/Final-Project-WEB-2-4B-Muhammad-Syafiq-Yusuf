<?php 
    include 'connection.php';
    $id = $_GET['id'];

    // echo "<h1>$id </h1>";
    
    // select data
    $query = mysqli_query($con,"SELECT * FROM mata_kuliah WHERE id = $id");
    $data = mysqli_fetch_array($query);

    // // update data
    if (isset($_POST['submit'])) {
        $kode_mk = $_POST['kode_mk'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];
        $nilai = $_POST['nilai'];

        mysqli_query($con, "UPDATE mata_kuliah SET kode_mk='$kode_mk',nama='$nama',sks='$sks', nilai='$nilai' WHERE id=$id");

    //     // header("Location :index.php");
        echo "<script>window.location.href ='?page=mataKuliah';</script>";
    }
?>


<h4 class="mb-5">Edit Data Mata Kuliah</h4>

<form action="" method="post">
    <div class="mb-3 row">
        <label for="kode_mk" class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="kode_mk" class="form-control" placeholder="Masukan kode mata kuliah..." value="<?= $data['kode_mk']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" placeholder="Masukan nama mata kuliah..." value="<?= $data['nama']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="sks" class="col-sm-2 col-form-label">Sks</label>
        <div class="col-sm-10">
            <select class="form-select" name="sks">
                <option value="-">- Pilih Sks-</option>
                <option value="2"<?php echo ($data['sks'] == '2') ? "selected" : "";  ?> >2</option>
                <option value="3" <?php echo ($data['sks'] == '3') ? "selected" : "";  ?> >3</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
        <div class="col-sm-10">
            <input type="text" name="nilai" class="form-control" placeholder="Masukan nilai..." value="<?= $data['nilai'];?>">
        </div>
    </div>

    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=dosen" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>