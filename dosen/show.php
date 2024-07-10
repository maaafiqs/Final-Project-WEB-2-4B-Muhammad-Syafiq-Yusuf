
<h4>Tambah Data Dosen</h4>
<a href="?page=dosenAdd" class="btn btn-primary mb-4">Tambah Data</a>
<a href="dosen/print.php" class="btn btn-warning mb-4" target="_blank">Cetak</a>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>NIDN</th>
            <th>Nama Lengkap</th>
            <th>Fakultas</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>	
        <?php
            include 'connection.php';
            $query = mysqli_query($con, "SELECT * FROM dosen");
            while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['nidn']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td>
                    <?php echo ($data['fakultas']) == 'FTI'? 'Fakultas Teknologi Informasi' : 'Fakultas Hukum'; ?>
                </td>
                <td><?php echo $data['telepon']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td>
                    <a class="btn btn-sm btn-success" href="?page=dosenEdit&id=<?= $data['id']; ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="?page=dosenDelete&id=<?= $data['id']; ?>" onclick="return confirm('Lanjutkan menghapus data ?')">Hapus </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
