<?php 
include_once ('../config/config.php');

$username=$_POST['username'];
$password=$_POST['password'];
$query="select username, password from admin where username='$username' and password='$password'";

$sql=mysqli_query ($konek,$query);
$row=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql);
if ($row=1) {
	session_start();
	$_SESSION['nama']=$data['username'];

	$_SESSION['sandi']=$data['password'];
	header('location:../index.php');

}
else{
	header('location:login/login.php');

}
?>