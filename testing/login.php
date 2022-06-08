<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login SmartPKL</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Login SmartPKL</h2>
               
                <h5>(Silahkan login untuk mengakses aplikasi.)</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post" accept="" name="login">
                                       <br />
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                      </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <button type="submit" class="btn btn-primary" name="login">Login Now</button>
                                    <hr />
                                    Not register ? <a href="registeration.html" >click here </a> 
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>

    <?php
      if (isset($_POST['login'])){
        session_start();
            include '../aset/conection.php';
            $user = $_POST['username'];
            $psw = $_POST['password'];
            $query=mysqli_query($conn, "select * from acount where username = '$user' and password = '$psw'");
            $result = mysqli_fetch_assoc($query);
            if($result>0){

              //bagian hak akses 
              $q=mysqli_query($conn, "select hak_akses from acount where username = '$user' and password = '$psw'");
              while($data=mysqli_fetch_assoc($q)){

                //bagian cookies user
                $row = array(
                  'user' => $user,
                  'hak_akses' => $data['hak_akses']
                );
                setcookie('user', $row['user'], time()+3600*24);
                setcookie('hak_akses', $row['hak_akses'], time()+3600*24);
                
              }
              
              header("Location: index.php");
            
              }else{
                echo "<script> window.alert('Username dan Password salah. Login Gagal') </script>";
            }
      }
  ?>


    
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
