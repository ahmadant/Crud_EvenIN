<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id_acara = $_POST['id_acara'];
	$nama = $_POST['nama_acara'];
	$gambar = $_POST['gambar'];
	$id_kat = $_POST['id_kat'];
	$deskripsi = $_POST['deskripsi'];
	$price = $_POST['price'];
	$tempat = $_POST['tempat'];
	$tanggal = $_POST['tanggal'];

	$lokasi_file=$_FILES['fupload']['tmp_name'];
 	$nama_file=$_FILES['fupload']['name'];


	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	move_uploaded_file(gambar, $nama_file);
	$query = "INSERT INTO acara (nama_acara, gambar,id_kat, deskripsi, price, tempat, tanggal) VALUES('$nama','$gambar','$id_kat', '$deskripsi', '$price', '$tempat', '$tanggal')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:even.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Sob selamat Berjuang PANTANG MENYERAH...:V</div>";
	}
?>