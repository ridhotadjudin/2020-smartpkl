<!--SMARTPKL FRONTEND ABSEN LOGIN.PHP
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login smartPKL</title>

  <!-- file CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Pedagang</div>
      <div class="card-body">
        <form method="POST" action="" name="login">
          <div class="form-group">
            <div class="form-label-group">
              <label for="inputUsername">Username</label>
              <input type="text" id="inputUsername" class="form-control" placeholder="Masukkan nama pengguna" required="required" autofocus="autofocus" name="username">                
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <label for="inputPassword">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan kata kunci" required="required" name="password">                
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <?php
    include '../back-end/connection.php';
    if (isset($_POST['login'])){
      $user = $_POST['username'];
      $psw = $_POST['password'];
      $query=mysqli_query($con, "select * from account where username = '$user' and password = '$psw'");
      $result = mysqli_fetch_assoc($query);
      if($result>0){
        $row = array('user' => $user);
        setcookie('user', $row['user'], time()+3600*24);
        header("Location: index.php");
      }else{
        echo "<script> window.alert('Username dan Password salah. Login Gagal') </script>";
      }
    }
  ?>

  <!-- file Javascript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>