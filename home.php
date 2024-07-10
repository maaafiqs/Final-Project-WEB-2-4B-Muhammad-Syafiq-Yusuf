<div class="row my-5">
    <h1 class="text-primary">Rekap Data</h1>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Mahasiswa</strong></div>
            <div class="card-body">
                <i class="fa fa-user-graduate fa-3x"></i>
                <h4 class="card-title mt-4"><?php
                include ("connection.php");
                $query = mysqli_query($con, "SELECT * FROM mahasiswa");
                $totalMahasiswa = mysqli_num_rows($query);
                echo $totalMahasiswa;
                ?> Data</h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Dosen</strong></div>
            <div class="card-body">
                <i class="fa fa-users fa-3x"></i>
                <h4 class="card-title mt-4"><?php
                include ("connection.php");
                $query = mysqli_query($con, "SELECT * FROM dosen");
                $totalDosen = mysqli_num_rows($query);
                echo $totalDosen; ?> Data</h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Mata Kuliah</strong></div>
            <div class="card-body">
                <i class="fa fa-book fa-3x"></i>
                <h4 class="card-title mt-4"><?php
                include ("connection.php");
                $query = mysqli_query($con, "SELECT * FROM mata_kuliah");
                $totalMataKuliah = mysqli_num_rows($query);
                echo $totalMataKuliah; ?> Data</h4>
            </div>
        </div>
    </div>
</div>
<div class="row my-5">
    <h1 class="text-primary">Profil</h1>
    <div class="col-lg-2">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Foto</strong></div>
            <div class="card-body text-center">
                <img src="foto_profil.jpg" alt="Muhammad Syafiq Yusuf" width="150px" class="rounded-circle">
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Media Sosial</strong></div>
            <div class="card-body text-center">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="http://" target="_blank" class="btn btn-link">Linkedin</a></li>
                    <li class="list-group-item"><a href="https://github.com/maaafiqs" target="https://github.com/maaafiqs" class="btn btn-link">Github</a></li>
                    <li class="list-group-item"><a href="http://instagram.com/maaafiqs" target="http://instagram.com/maaafiqs" class="btn btn-link">Instagram</a>
                    </li>
                    <li class="list-group-item"><a href="http://" target="_blank" class="btn btn-link">Facebook</a></li>
                </ul>

            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Biodata</strong></div>
            <div class="card-body text-center">
                <table class="table" style="width:100%; margin:0 auto;">
                    <tbody>
                        <tr>
                            <td align="right" width="30%"><strong>NIK / NPM :</strong></td>
                            <td align="left" width="70%">02 1111 2222 / 2210010514</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Nama Lengkap :</strong></td>
                            <td align="left" width="70%">Muhammad Syafiq Yusuf</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Fakultas :</strong></td>
                            <td align="left" width="70%">Teknologi Informasi</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Program Studi :</strong></td>
                            <td align="left" width="70%">Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Tempat Lahir :</strong></td>
                            <td align="left" width="70%">Banjarbaru</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Tanggal Lahir :</strong></td>
                            <td align="left" width="70%">03 Agustus 2002</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Telepon :</strong></td>
                            <td align="left" width="70%">0812 5022 2046</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>email :</strong></td>
                            <td align="left" width="70%">syafiqyusuf0308@gmail.com</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>