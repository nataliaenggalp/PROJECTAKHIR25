<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['usernamecalonpekerja']) || empty($_SESSION['usernamecalonpekerja'])) {
	//redirect ke halaman login
	header('location:login.php');
}
?>