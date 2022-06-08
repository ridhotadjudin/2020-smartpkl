<?php
include ('../../connection.php');
$username=$_GET['username'];

$query=mysqli_query($con, "DELETE FROM akun WHERE username='$username'");
header("location: ../../index.php?m=akun");
?>