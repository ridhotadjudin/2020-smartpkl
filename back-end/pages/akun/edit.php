<!--SMARTPKL BACKEND PAGES AKUN EDIT.PHP
-->

<?php
  $user = $_GET['username'];
  $query = mysqli_query($con, "select * from account where username ='$user'");
    while($data = mysqli_fetch_assoc($query)){
?>

<form method="post" action="pages/akun/edit_process.php">
  <div class="form-group">
    <label>Username</label>
    <input type="hidden" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo $data['username']; ?>">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $data['email']; ?>">
  </div>  
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password"  placeholder="Masukkan Password" value="<?php echo $data['password']; ?>">
    <small id="emailHelp" class="form-text text-muted">Pastikan anda hafal kata kunci yang anda ketik.</small>
  </div>
  <button name="akun" type="submit" class="btn btn-primary">Masukkan</button>
</form>

<?php
  }
?>