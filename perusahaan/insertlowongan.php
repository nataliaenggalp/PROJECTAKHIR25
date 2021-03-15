<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$namapekerjaan = $_POST['namapekerjaan'];
$deskripsipekerjaan = $_POST['deskripsipekerjaan'];
$syaratpekerjaan = $_POST['syaratpekerjaan'];
$jenispekerjaan = $_POST['jenispekerjaan'];
$jumlahorangyangdiperlukan = $_POST['jumlahorangyangdiperlukan'];
$statuslowonganpekerjaan = $_POST['statuslowonganpekerjaan'];
$perusahaan_id = $_POST['perusahaan_id'];



//simpan data ke database
$query = mysqli_query($con, "insert into datalowongan (namapekerjaan,deskripsipekerjaan,syaratpekerjaan,jenispekerjaan,jumlahorangyangdiperlukan,statuslowonganpekerjaan,perusahaan_id) values('$namapekerjaan', '$deskripsipekerjaan', '$syaratpekerjaan', '$jenispekerjaan', '$jumlahorangyangdiperlukan', '$statuslowonganpekerjaan', '$perusahaan_id')") or die(mysqli_error());

if ($query) {
	header('location:index.php?message=success');
}
?>