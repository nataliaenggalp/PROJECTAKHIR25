<?php
include('config.php');

session_start();

//tangkap data dari form login
$usernamecalonpekerja = $_POST['usernamecalonpekerja'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$usernamecalonpekerja = mysqli_real_escape_string($con, $usernamecalonpekerja);
$password = mysqli_real_escape_string($con, $password);

//cek data yang dikirim, apakah kosong atau tidak
if (empty($usernamecalonpekerja) && empty($password)) {
	//kalau username dan password kosong
	header('location:login.php?error=1');
} else if (empty($usernamecalonpekerja)) {
	//kalau username saja yang kosong
	header('location:login.php?error=2');
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
}

$q = mysqli_query($con, "select * from datacalonpekerja where usernamecalonpekerja='$usernamecalonpekerja' and password='$password'");

if (mysqli_num_rows($q) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['usernamecalonpekerja'] = $usernamecalonpekerja;
	
	//redirect ke halaman index
	header('location:index.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error=4');
}
?>