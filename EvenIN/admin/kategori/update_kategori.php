<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id = $_POST['id'];
	$nm_kat = $_POST['nm_kat'];
	$keterangan = $_POST['keterangan'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "UPDATE kategori SET nm_kat='$nm_kat', keterangan ='$keterangan' WHERE id_kat='$id'";

	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:kategori.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Merubah data</div>";
	}
?>