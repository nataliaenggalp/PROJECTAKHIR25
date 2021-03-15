<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['usernameperusahaan']) || empty($_SESSION['usernameperusahaan'])) {
	//redirect ke halaman login
	header('location:login.php');
}
?>