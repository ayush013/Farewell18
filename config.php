<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("443113905951-ld6r9sruldd5742ku6n190ortvlg89kq.apps.googleusercontent.com");
	$gClient->setClientSecret("-SdK2aw4GJHnLHwef_g4i6-5");
	$gClient->setApplicationName("Amantrya 2018");
	$gClient->setRedirectUri("https://www.akgec.in/farewell18/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
