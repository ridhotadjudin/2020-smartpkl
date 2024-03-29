<!--SMARTPKL BACKEND INDEX.PHP
-->

<?php 
  include 'connection.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  $cookie_name = 'admin';
  if(isset($_COOKIE[$cookie_name])){
    $cookie_value = $_COOKIE[$cookie_name];
  }else{
    header("location: login.php");
  }
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>smartPKL - Admin</title>
	
	<!-- file CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<link href="css/sb-admin.css" rel="stylesheet">
	
</head>

<body id="page-top">
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<a class="navbar-brand mr-1" href="index.php?m=beranda">smartPKL</a>	
			<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
	    	<i class="fas fa-bars"></i>
	    </button>
	    <!-- Navbar Search -->
    	<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
	    <!-- Navbar -->
	    <ul class="navbar-nav ml-auto ml-md-0">
	      <li class="nav-item dropdown no-arrow mx-1">
	        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <i class="fas fa-bell fa-fw"></i>
	          <span class="badge badge-danger">9+</span>
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
		        <a class="dropdown-item" href="#">Action</a>
		        <a class="dropdown-item" href="#">Another action</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown no-arrow mx-1">
	       	<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        <i class="fas fa-envelope fa-fw"></i>
		        <span class="badge badge-danger">7</span>
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
		        <a class="dropdown-item" href="#">Action</a>
		        <a class="dropdown-item" href="#">Another action</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown no-arrow">
	       	<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         	<i class="fas fa-user-circle fa-fw"></i>
	       	</a>
	       	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		        <a class="dropdown-item" href="#">Settings</a>
		        <a class="dropdown-item" href="#">Activity Log</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
	      	</div>
	      </li>
	    </ul>
    </nav>
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
       	<li class="nav-item active">
       		<a class="nav-link" href="index.php?m=beranda">
		        <i class="fas fa-fw fa-tachometer-alt"></i>
		        <span>Beranda</span>
       		</a>
       	</li>
       	<li class="nav-item dropdown">
	       	<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        <i class="fas fa-fw fa-user-circle"></i>
		        <span>Kelola Pedagang</span>
	       	</a>
		      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
		        <a class="dropdown-item" href="index.php?m=akun">Akun</a>
		        <a class="dropdown-item" href="index.php?m=identitas">Identitas</a>
		        <a class="dropdown-item" href="index.php?m=dagangan">Dagangan</a>
	       	</div>
       	</li>
      	<li class="nav-item active">
       		<a class="nav-link" href="index.php?m=kehadiran">
		        <i class="fas fa-fw fa-address-book"></i>
		        <span>Absen Harian</span>
       		</a>
       	</li>
      </ul>
     	<div id="content-wrapper">
   		<div class="container-fluid">
			
			<?php
				include ('connection.php');
				//error_reporting(0);
	    	switch ($_GET['m']) {
	    		//akun
	    		case "akun":
	    			include ('pages/akun/index.php');
	    			break;
	        case "tambahakun":
	        	include ('pages/akun/insert.php');
	        	break;
	        case "editakun":
	        	include ('pages/akun/edit.php');
	        	break;
	        			       			
	        default:
	        	include ('pages/beranda.php');
	        	break;
	      }
	    ?>

      </div>
      <!-- Sticky Footer -->
	    <footer class="sticky-footer">
	     	<div class="container my-auto">
	     		<div class="copyright text-center my-auto">
	       		<span>©2018 smartPKL</span>
	       	</div>
	     	</div>
	    </footer>
	  </div>
  </div>
  <!-- Scroll top-->
  <a class="scroll-to-top rounded" href="#page-top">
   	<i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout-->
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
        		<a class="btn btn-primary" href="logout.php">Keluar</a>
       	</div>
      </div>
    </div>
  </div> 
  
  <!-- file Javascript-->
	<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>
</html>