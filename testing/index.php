<?php 
    include '../aset/conection.php';
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  $cookie_name = 'user';
  $cookie_name_level = 'hak_akses';
  if(isset($_COOKIE[$cookie_name])){
    $cookie_value = $_COOKIE[$cookie_name];
    $cookie_value_level = $_COOKIE[$cookie_name_level];
  }else{
    header("location: login.php");
  }

?>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PLN</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" type="text/css" href="assets/datatables/dataTables.bootstrap4.css" />


        
        
   
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PLN PERSERO </a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;">Hi, <?php echo $cookie_value  ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li><a href="index.php"><i class="fa fa-home"></i> Home </a></li>
                    <li><a href="index.php?halaman=acount"><i class="fa fa-user"></i> Acount </a></li>
                    <li><a href="index.php?halaman=berita"><i class="fa fa-newspaper-o"></i> Berita </a></li>
                    <li><a href="index.php?halaman=rapat"><i class="fa fa-calendar"></i> Rapat </a></li>
                    <li><a href="index.php?halaman=document"><i class="fa fa-file-text-o"></i> Document </a></li>
                    <li> <a href="index.php?halaman=info"><i class="fa fa-info-circle"></i> Info </a></li>
                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (! isset($_GET['halaman']))
                {
                    include 'view/home.php';

                } else {   
                    $halaman = $_GET['halaman'];
                    switch ($halaman)
                    {
                        //acount
                        case 'acount':
                            include 'view/account/acount.php';
                        break;
                        case 'tambahacount':
                            include 'view/account/tambahacount.php';
                        break;
                        case 'ubahacount':
                            include 'view/account/ubahacount.php';
                        break;
                        case 'hapusacount':
                            include 'view/account/hapusacount.php';
                        break;
                        case 'simpanacount':
                            include 'view/account/simpanacount.php';
                        break;


                        //berita
                        case 'berita':
                            include 'view/berita/berita.php';
                        break;
                        case 'tambahberita':
                            include 'view/berita/tambahberita.php';
                        break;
                        case 'ubahberita':
                            include 'view/berita/ubahberita.php';
                        break;
                        case 'hapusberita':
                            include 'view/berita/hapusberita.php';
                        break;
                        case 'lihatberita':
                            include 'view/berita/lihatberita.php';
                        break;
                        case 'simpanberita':
                            include 'view/berita/simpanberita.php';
                        break;

                        
                        //rapat
                        case 'rapat':
                            include 'view/rapat/rapat.php';
                        break;
                        case 'tambahrapat':
                            include 'view/rapat/tambahrapat.php';
                        break;
                        case 'ubahrapat':
                            include 'view/rapat/ubahrapat.php';
                        break;
                        case 'hapusrapat':
                            include 'view/rapat/hapusrapat.php';
                        break;
                        case 'simpanrapat':
                            include 'view/rapat/simpanrapat.php';
                        break;

                        //document 
                        case 'document':
                            include 'view/document/document.php';
                        break;
                        case 'tambahdocument':
                            include 'view/document/tambahdocument.php';
                        break;
                         case 'hapusdocument':
                            include 'view/document/hapusdocument.php';
                        break;
                         case 'lihatdocument':
                            include 'view/document/lihatdocument.php';
                        break;
                        case 'simpandocument':
                            include 'view/document/simpandocument.php';
                        break;
                        case 'ubahdocument':
                            include 'view/document/ubahdocument.php';
                        break;


                        //info 
                        case 'info':
                            include 'view/info/info.php';
                        break;
                        case 'tambahinfo':
                            include 'view/info/tambahinfo.php';
                        break;
                        case 'ubahinfo':
                            include 'view/info/ubahinfo.php';
                        break;
                        case 'hapusinfo':
                            include 'view/info/hapusinfo.php';
                        break;
                        case 'lihatinfo':
                            include 'view/info/lihatinfo.php';
                        break;
                        case 'simpaninfo':
                            include 'view/info/simpaninfo.php';
                        break;

                    }
                }
                ?>
                
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->

    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script type="text/javascript" src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script type="text/javascript" src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script type="text/javascript" src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript" href="assets/datatables/dataTables.buttons.min.js"></script>   
    <script type="text/javascript" href="assets/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" href="assets/datatables/dataTables.bootstrap4.js"></script>
    <script type="text/javascript" href="assets/datatables/buttons.print.min.js"></script>
    
        
   
</body>
</html>
