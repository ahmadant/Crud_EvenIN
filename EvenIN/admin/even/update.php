<?php
include_once"../config/config.php";
    $id =$_POST['id'];
	$nama_acara = $_POST['nama_acara'];
	$gambar = $_POST['gambar'];
	//$id_kat = $_POST['id_kat'];
	$deskripsi = $_POST['deskripsi'];
	$price = $_POST['price'];
	$tempat = $_POST['tempat'];
	$tanggal = $_POST['tanggal'];

	$lokasi_file=$_FILES['fupload']['tmp_name'];
 	$nama_file=$_FILES['fupload']['name'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	move_uploaded_file(gambar, $nama_file);
	$query = "UPDATE acara SET nama_acara='$nama_acara', gambar='gambar',deskripsi='$deskripsi',price= '$price',tempat='$tempat',tanggal='$tanggal'WHERE id_acara='$id'";

	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:even.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Merubah data</div>";
	}
?>