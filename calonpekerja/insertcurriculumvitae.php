<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
include('cek-login.php');

//tangkap data dari form
$nama = $_POST['nama'];
$tempattanggallahir = $_POST['tempattanggallahir'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$tinggibadan = $_POST['tinggibadan'];
$beratbadan = $_POST['beratbadan'];
$alamat = $_POST['alamat'];
$notelepon = $_POST['notelepon'];
$status = $_POST['status'];
$email = $_POST['email'];
$smp = $_POST['smp'];
$sma = $_POST['sma'];
$perguruantinggi1 = $_POST['perguruantinggi1'];
$perguruantinggi2 = $_POST['perguruantinggi2'];
$perguruantinggi3 = $_POST['perguruantinggi3'];
$kemampuan1 = $_POST['kemampuan1'];
$kemampuan2 = $_POST['kemampuan2'];
$kemampuan3 = $_POST['kemampuan3'];
$pengalaman1 = $_POST['pengalaman1'];
$pengalaman2 = $_POST['pengalaman2'];
$pengalaman3 = $_POST['pengalaman3'];
$lowongan_id = $_POST['lowongan_id'];
$calonpekerja_id = $_POST['calonpekerja_id'];



//simpan data ke database
$query = mysqli_query($con, "insert into datacurriculumvitae values('', '$nama', '$tempattanggallahir', '$jeniskelamin', '$agama', '$tinggibadan', '$beratbadan', '$alamat', '$notelepon', '$status', '$email','$smp', '$sma', '$perguruantinggi1', '$perguruantinggi2', '$perguruantinggi3', '$kemampuan1', '$kemampuan2', '$kemampuan3', '$pengalaman1', '$pengalaman2', '$pengalaman3', '$lowongan_id', '$calonpekerja_id','')") or die(mysqli_error());

if ($query) {


	$usernamecalonpekerja = $_SESSION['usernamecalonpekerja'];
	$id = $_POST['lowongan_id'];
	$query2 = mysqli_query($con, "select * from datacalonpekerja,datacurriculumvitae where datacalonpekerja.calonpekerja_id=datacurriculumvitae.calonpekerja_id and usernamecalonpekerja='$usernamecalonpekerja' and lowongan_id='$id'");
	$data2 = mysqli_fetch_array($query2);
	$a = $data2['curriculum_id'];
	header("location:view-daftar.php?id=$a");
}
?>