<!--SMARTPKL FRONTEND ABSEN ABSEN-PROCCESS.PHP
-->

<?php
  include '../back-end/connection.php';
  $cookie_name = 'user';
  if(isset($_COOKIE[$cookie_name])){
    $cookie_value = $_COOKIE[$cookie_name];
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("Y-m-d");
    $jam = date("H-i-s");
    $query = mysqli_query($con, "insert into absen (username, tanggal, jam) values ('$cookie_value', '$tanggal', '$jam')");
    if($query) {
    	header ("location: index.php");
    } else{
     	echo "Gagal";
    }
  }else{
    header("location: login_fe.php");
  }
?>