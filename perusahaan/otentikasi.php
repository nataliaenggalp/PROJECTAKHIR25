<?php
include('config.php');

session_start();

//tangkap data dari form login
$usernameperusahaan = $_POST['usernameperusahaan'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$usernameperusahaan = mysqli_real_escape_string($con, $usernameperusahaan);
$password = mysqli_real_escape_string($con, $password);

//cek data yang dikirim, apakah kosong atau tidak
if (empty($usernameperusahaan) && empty($password)) {
	//kalau username dan password kosong
	header('location:login.php?error=1');
} else if (empty($usernameperusahaan)) {
	//kalau username saja yang kosong
	header('location:login.php?error=2');
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
}

$q = mysqli_query($con, "select * from dataperusahaan where usernameperusahaan='$usernameperusahaan' and password='$password'");

if (mysqli_num_rows($q) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['usernameperusahaan'] = $usernameperusahaan;
	
	//redirect ke halaman index
	header('location:index.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error=4');
}
?>