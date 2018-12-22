<?php
include_once"../admin/config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saran</title>
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
					<li><a href="kategori.php">Kategori</a></li>
					<li><a href="even.php">Even</a></li>
					<li><a href="tambah_saran.php">Saran</a></li>
					<li><a href="../admin/login/login.php">Login</a></li>
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
			<h2>Tambahkan Saran Anda</h2>
			<marquee> <h4>Demi Kebaikan Website ini kedepannya, kami menghargai apresiasi anda kepada kami dalam membangun Website ini supaya lebih baik</h4> </marquee>

		<!--Kembali ke data admin-->
		<p>
			<a href="../index.php" class="btn btn-warning">Back</a>
		</p>

		<div class="row col-sm-12 col-md-6">	
			<form action="../admin/saran/insert_saran.php" method="post" name="isidatasaran" class="form-group">

				<p>
					<label>username</label>
					<input type="text" name="username" placeholder="username" class="form-control">
				</p>

				<p>
					<label>Email</label>
					<input type="text" name="email" placeholder="Email" class="form-control">
				</p>
				<p>
					<label>Saran Anda</label>
					<textarea name="saran" placeholder="Masukkan Saran Anda" class="form-control"></textarea>
				</p>
	
				<p>
					<input type="submit" name="simpan" value="kirim" class="btn btn-primary">
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