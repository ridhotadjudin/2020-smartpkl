<?php
include ('../../connection.php');
  if(isset($_POST['akun'])){
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($con, "INSERT INTO akun (email, username, password) VALUES ('$email','$username','$password')");
    header("location: ../../index.php?m=akun");
  } else {
  	echo "Proses Imput Data Gagal!";
  }
?>