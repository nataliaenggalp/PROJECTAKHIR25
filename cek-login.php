<?php 
session_start();


if ((!isset($_SESSION['usernamecalonpekerja']) || empty($_SESSION['usernamecalonpekerja'])) or (!isset($_SESSION['usernameperusahaan']) || empty($_SESSION['usernameperusahaan'])) ) {
	//redirect ke halaman login
	
}
?>