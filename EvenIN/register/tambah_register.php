<?php
include_once"../admin/config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$admin = $_POST['username'];
	$sandi = $_POST['password']; 
	$level = $_POST['level'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO admin (username,password,level) VALUES('$admin','$sandi','$level')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:admin.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Ggal Menambah data</div>";
	}
?>