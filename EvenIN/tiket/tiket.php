<?php
include_once"../admin/config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tiket</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ini digunakan untuk memanggil file css dari bootstrap -->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
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
			  <a class="navbar-brand" href="../index.php">EvenIN</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../home/kategori.php">Kategori</a></li>
					<li><a href="../home/even.php">Even</a></li>
					<li><a href="../home/tambah_saran.php">Saran</a></li>
					<li><a href="../admin/login/login.php">Keluar</a></li>
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
		<div class="jumbotron alert-info">
			<h2>Tiket Anda</h2>
		</div>

		<div class="row col-sm-12 col-md-6">	
			<table class="table table-bordered table-responsive table-striped">
				<thead>
					<tr>
						<th>No Tiket</th>
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>Jenis Kelamin</th>
					</tr>
				</thead>
				<tbody>
					<!--Menampilkan data dengan mysqli dan php-->
					<?php
						$query = "SELECT * FROM tiket ORDER BY id_tiket DESC limit 1";
						$exec = mysqli_query($konek,$query);
						

						while ($data = mysqli_fetch_array($exec)) {
							?>
							<tr>
								
								<td><?=$data['id_tiket']?></td>
								<td><?=$data['nama_lengkap']?></td>
								<td><?=$data['email']?></td>
								<td><?=$data['kelamin']?></td>
							</tr>
							<?php
						
						}
					?>
					<script>
					window.print();
					</script> 
					<!-- Cuma sampai disini kok-->
				</tbody>
			</table>
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