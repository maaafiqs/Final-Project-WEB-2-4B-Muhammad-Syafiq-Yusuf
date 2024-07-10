<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Data</title>
	<style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            font-size: 12px;
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>
<body>
	<div class="container">
		<h1 align="center">Laporan Data Mata Kuliah</h1>
		
		<table border="1" cellpadding="5">
			<thead>
				<tr>
					<th>Kode Mata Kuliah</th>
					<th>Nama Mata Kuliah</th>
					<th>Sks</th>
					<th>Nilai</th>
				</tr>
			</thead>
			<tbody>	
				<?php
					include '../connection.php';
					$query = mysqli_query($con, "SELECT * FROM mata_kuliah");
					while ($data = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $data['kode_mk']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td>
                            <?php echo ($data['sks'] == '2') ? '2' : "3" ?>
                        </td>
						<td><?php echo $data['nilai']; ?></td>
					</tr>
				<?php
				}
				?>
			</tbody>
        </table>	
	</div>
</body>

<script>
    window.print();
</script>
</html>