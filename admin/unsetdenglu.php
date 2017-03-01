<?php
	session_start();
	unset($_SESSION["is_login"]);
	unset($_SESSION["username"]);
	$message="退出登录";
	$n="登录页";
	$url="login.php";
	include "message.html";
?>