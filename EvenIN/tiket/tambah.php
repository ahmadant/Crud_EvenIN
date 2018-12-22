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
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
			<h2>Buat Tiket Anda</h2>

		<!--Kembali ke data admin-->
		<p>
			<a href="../home/even.php" class="btn btn-warning">Back</a>
		</p>

		<div class="row col-sm-12 col-md-6">	
			<form action="insert.php" method="post" name="isidatatiket" class="form-group">
			<input type="hidden" name="tiket" value="<?=$baris['id_tiket']?>">

				<p>
					<label>Nama Lengkap</label>
					<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control">
				</p>
				<p>
					<label>Email</label>
					<input type="text" name="email" placeholder="Email" class="form-control">
				</p>
				<p>
					<label>Jenis Kelamin</label>
					<input type="text" name="kelamin" placeholder="Jenis Kelamin" class="form-control">
				</p>
				<p>
					<input type="submit" name="simpan" value="Buat Tiket" class="btn btn-primary">
				</p>

			</form>
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