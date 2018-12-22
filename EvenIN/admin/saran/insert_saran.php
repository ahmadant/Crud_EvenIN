<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id_saran = $_POST['id_saran'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$saran = $_POST['saran'];
	

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO saran (username,email,saran) VALUES('$username', '$email', '$saran')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:../../index.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Sob selamat Berjuang PANTANG MENYERAH...:V</div>";
	}
?>