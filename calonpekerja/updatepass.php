<?php
include('config.php');

//tangkap data dari form
$calonpekerja_id = $_POST['calonpekerja_id'];
$password = $_POST['password'];


//update data di database sesuai perusahaan_id
$query = mysqli_query($con, "update datacalonpekerja set password='$password' where calonpekerja_id='$calonpekerja_id'") or die(mysqli_error());

if ($query) {
	header('location:index.php');
}
?>