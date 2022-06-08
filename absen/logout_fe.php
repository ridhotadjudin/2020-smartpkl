<?php
	setcookie('user', '', time()-3600);
	setcookie('hak_akses', '', time()-3600);
	header("location: login_fe.php");
?>