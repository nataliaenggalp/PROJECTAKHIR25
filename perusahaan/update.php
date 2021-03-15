<?php
include('config.php');

//tangkap data dari form
$id = $_POST['perusahaan_id'];
$emailperusahaan = $_POST['emailperusahaan'];
$namaperusahaan = $_POST['namaperusahaan'];
$noteleponperusahaan = $_POST['noteleponperusahaan'];
$alamatperusahaan = $_POST['alamatperusahaan'];
$deskripsiperusahaan = $_POST['deskripsiperusahaan'];
$jenispekerjaanyangadadiperusahaan = $_POST['jenispekerjaanyangadadiperusahaan'];

//update data di database sesuai perusahaan_id
$query = mysqli_query($con, "update dataperusahaan set emailperusahaan='$emailperusahaan', namaperusahaan='$namaperusahaan', noteleponperusahaan='$noteleponperusahaan', alamatperusahaan='$alamatperusahaan', deskripsiperusahaan='$deskripsiperusahaan', jenispekerjaanyangadadiperusahaan='$jenispekerjaanyangadadiperusahaan' where perusahaan_id='$id'") or die(mysqli_error());

if ($query) {
	header('location:view.php?message=success');
}
?>