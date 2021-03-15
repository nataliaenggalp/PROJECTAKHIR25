<?php
include('config.php');

//tangkap data dari form
$id = $_POST['calonpekerja_id'];
$namacalonpekerja = $_POST['namacalonpekerja'];
$kotacalonpekerja = $_POST['kotacalonpekerja'];
$provinsicalonpekerja = $_POST['provinsicalonpekerja'];
$alamatcalonpekerja = $_POST['alamatcalonpekerja'];
$emailcalonpekerja = $_POST['emailcalonpekerja'];
$noteleponcalonpekerja = $_POST['noteleponcalonpekerja'];
$pendidikanterakhir = $_POST['pendidikanterakhir'];
$skilldankeahlian = $_POST['skilldankeahlian'];

//update data di database sesuai calonpekerja_id
$query = mysqli_query($con, "update datacalonpekerja set namacalonpekerja='$namacalonpekerja', kotacalonpekerja='$kotacalonpekerja', provinsicalonpekerja='$provinsicalonpekerja', alamatcalonpekerja='$alamatcalonpekerja', emailcalonpekerja='$emailcalonpekerja', noteleponcalonpekerja='$noteleponcalonpekerja', pendidikanterakhir='$pendidikanterakhir', skilldankeahlian='$skilldankeahlian' where calonpekerja_id='$id'") or die(mysqli_error());

if ($query) {
	header('location:view.php?message=success');
}
?>