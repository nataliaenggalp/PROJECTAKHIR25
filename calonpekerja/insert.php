<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$usernamecalonpekerja = $_POST['usernamecalonpekerja'];
$password = $_POST['password'];
$namacalonpekerja = $_POST['namacalonpekerja'];
$kotacalonpekerja = $_POST['kotacalonpekerja'];
$provinsicalonpekerja = $_POST['provinsicalonpekerja'];
$alamatcalonpekerja = $_POST['alamatcalonpekerja'];
$emailcalonpekerja = $_POST['emailcalonpekerja'];
$noteleponcalonpekerja = $_POST['noteleponcalonpekerja'];
$pendidikanterakhir = $_POST['pendidikanterakhir'];
$skilldankeahlian = $_POST['skilldankeahlian'];


//simpan data ke database
$query = mysqli_query($con, "insert into datacalonpekerja values('', '$usernamecalonpekerja', '$password', '$namacalonpekerja', '$kotacalonpekerja', '$provinsicalonpekerja', '$alamatcalonpekerja', '$emailcalonpekerja', '$noteleponcalonpekerja', '$pendidikanterakhir', '$skilldankeahlian')") or die(mysqli_error($con));


if ($query) {
	header('location:index.php?message=success');
}
?>