<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 


$curriculum_id = $_POST['curriculum_id'];

move_uploaded_file( $_FILES['dokumenlamaran']['tmp_name'], "dokumenlamaran/".basename( $_FILES['dokumenlamaran']['name']));
move_uploaded_file( $_FILES['dokumenijazah']['tmp_name'], "dokumenijazah/".basename( $_FILES['dokumenijazah']['name']));
move_uploaded_file($_FILES['dokumenskillpendukung']['tmp_name'], "dokumenskillpendukung/".basename( $_FILES['dokumenskillpendukung']['name']));
move_uploaded_file($_FILES['dokumenfoto']['tmp_name'], "dokumenfoto/".basename( $_FILES['dokumenfoto']['name']));

$query = mysqli_query($con,  "insert into datadokumen values( '','".$_FILES['dokumenlamaran']['name']."','dokumenlamaran/".$_FILES['dokumenlamaran']['name']."','".$_FILES['dokumenijazah']['name']."','dokumenijazah/".$_FILES['dokumenijazah']['name']."','".$_FILES['dokumenskillpendukung']['name']."','dokumenskillpendukung/".$_FILES['dokumenskillpendukung']['name']."','".$_FILES['dokumenfoto']['name']."','dokumenfoto/".$_FILES['dokumenfoto']['name']."','$curriculum_id')");




if ($query) {
	
	header('location:view-daftar.php');
}
?>


