<?php 
include('config.php');

$id = $_GET['id'];

$query = mysqli_query($con, "delete from datacurriculumvitae where curriculum_id='$id'") or die(mysqli_error());

if ($query) {
	header('location:view-calon.php?message=delete-calon');
}
?>