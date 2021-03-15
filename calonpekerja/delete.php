<?php 
include('config.php');

$id = $_GET['id'];

$query = mysqli_query($con, "delete from datacalonpekerja where calonpekerja_id='$id'") or die(mysqli_error());

if ($query) {
	header('location:view.php?message=delete');
}
?>