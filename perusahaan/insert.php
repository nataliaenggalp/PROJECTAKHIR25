<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$usernameperusahaan = $_POST['usernameperusahaan'];
$password = $_POST['password'];
$namaperusahaan = $_POST['namaperusahaan'];
$emailperusahaan = $_POST['emailperusahaan'];
$noteleponperusahaan = $_POST['noteleponperusahaan'];
$alamatperusahaan = $_POST['alamatperusahaan'];
$deskripsiperusahaan = $_POST['deskripsiperusahaan'];
$jenispekerjaanyangadadiperusahaan = $_POST['jenispekerjaanyangadadiperusahaan'];



//simpan data ke database
$query = mysqli_query($con, "insert into dataperusahaan values('', '$usernameperusahaan', '$password', '$namaperusahaan', '$emailperusahaan', '$noteleponperusahaan', '$alamatperusahaan', '$deskripsiperusahaan', '$jenispekerjaanyangadadiperusahaan')") or die(mysqli_error());

if ($query) {
	header('location:index.php?message=success');
}
?>