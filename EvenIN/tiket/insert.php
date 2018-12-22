<?php
include_once"../admin/config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$tiket = $_POST['id_tiket'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$kelamin = $_POST['kelamin'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO tiket (nama_lengkap, email, kelamin) VALUES('$nama_lengkap', '$email', '$kelamin')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:tiket.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Sob selamat Berjuang PANTANG MENYERAH...:V</div>";
	}
?>