<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id_kat = $_POST['id_kat'];
	$nama = $_POST['nm_kat'];
	$keterangan = $_POST['keterangan'];
	

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO kategori (nm_kat,keterangan) VALUES('$nama', '$keterangan')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:kategori.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Sob selamat Berjuang PANTANG MENYERAH...:V</div>";
	}
?>