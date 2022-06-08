<!--SMARTPKL FRONTEND ABSEN INDEX.PHP
-->

<?php
include '../back-end/connection.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  $cookie_name = 'user';
  if(isset($_COOKIE[$cookie_name])){
    $cookie_value = $_COOKIE[$cookie_name];
  }else{
    header("location: login_fe.php");
  }

?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Absen smartPKL</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">SMARTPKL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#absen">Absen
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#data">Data Diri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </li>            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="mt-5">Absensi Harian Pedagang</h1>
        </div>
        <div class="col-md-8">
          
<?php
  //$user = $_GET[$cookie_name];
  $query = mysqli_query($con, "select * from account where username ='$cookie_value'");
    while($data = mysqli_fetch_assoc($query)){
?>

  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo $data['username']; ?>" disabled>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $data['email']; ?>" disabled>
  </div>  
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password"  placeholder="Masukkan Password" value="<?php echo $data['password']; ?>" disabled>
  </div>

<?php
  }
?>
        </div>
        <?php
          $query = mysqli_query($con, "select count(*) as abs from absen where username = '$cookie_value' && tanggal = curdate()");
          $result = mysqli_fetch_assoc($query);
            if($result['abs']<1){
        ?>
        <div class="col-md-4">
          <a href="absen_proccess.php" class="btn btn-primary btn-lg p-4 m-4">Hadir Hari Ini</a>
        </div>
        <?php
          }
        ?>
      </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Siap untuk pergi?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Pilih tombol "Keluar" dibawah jika anda siap untuk mengakhiri sesi anda.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                <a class="btn btn-primary" href="logout_fe.php">Keluar</a>
              </div>
          </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

  </body>

</html>

