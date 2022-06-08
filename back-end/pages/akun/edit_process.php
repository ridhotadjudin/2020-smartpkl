<?php
include ('../../connection.php');
	if(isset($_POST['akun'])){
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($con, "UPDATE akun SET email='$email', password='$password' WHERE username='$username'");
    header("location: ../../index.php?m=akun");
  } 
  else {
  	echo "Proses Edit Data Gagal!";
  }
?>