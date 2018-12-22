<?php
include_once"admin/config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ini digunakan untuk memanggil file css dari bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<!-- ini untuk brand/logo dan menu -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">EvenIN</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="home/Kategori.php">Kategori</a></li>
					<li><a href="home/even.php">Even</a></li>
					<li><a href="home/tambah_saran.php">Saran</a></li>
					<li><a href="admin/login/login.php">Login</a></li>
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
		<div class="jumbotron">
			<h2><center> Selamat datang di Website EvenIN </center></h2>
			<p>
				<h4><center> Halaman Utama Website EvenIN </center></h4>
				<br>
				<br>
				<div class="row col-sm-12 col-md-6">	
				<table class="table table-bordered table-responsive table-striped">
				<thead>
					<tr>
						<th hidden="Nama Acara">Nama Acara</th>
						<th hidden="Gambar">Gambar</th>
						<th hidden="Deskripsi">Deskripsi</th>
						<th hidden="Prince">Prince</th>
						<th hidden="Tempat">Tempat</th>
						<th hidden="Tanggal">Tanggal</th>
					</tr>
				</thead>
				<tbody>
					<!--Menampilkan data dengan mysqli dan php-->
					<?php
						$query = "SELECT * FROM acara ORDER BY nama_acara DESC LIMIT 5";
						$exec = mysqli_query($konek,$query);
						$no=1;

						while ($data = mysqli_fetch_array($exec)) {
							?>
							<tr>
								<td><?=$data['nama_acara']?></td>
								<td><?=$data['gambar']?></td>
								<td><?=$data['deskripsi']?></td>
								<td><?=$data['price']?></td>
								<td><?=$data['tempat']?></td>
								<td><?=$data['tanggal']?></td>

								<td>
									<a href="tiket/tambah.php?id=<?=$data['id_tiket']?>" class="btn btn-success">Daftar</a>
								</td>
							</tr>
							<?php
						$no++;	
						}
					?>
					<!-- Cuma sampai disini kok-->
				</tbody>
			</table>
		</div>
				
			</p>
		</div>
	</div>
	<!-- penutup isi -->

	<!-- bagian bawah -->
	<footer>
		<p class="text-center">
			Copyright &copy; 2017 EvenIN
		</p>
	</footer>
	<!-- penutup bagian bawah -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>