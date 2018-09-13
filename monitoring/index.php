<?php
  session_start();
  if (isset($_SESSION['username'])  == 'admin') {
    header('Location: admin/index.php');
  } elseif (isset($_SESSION['username']) && $_SESSION['sebagai'] == 'siswa') {
    $Nama_Siswa = $_SESSION['Nama_Siswa'];
    header("Location: 2/index.php?Nama_Siswa=$Nama_Siswa");
  } elseif (isset($_SESSION['username']) && $_SESSION['sebagai'] == 'guru') {
    $nama = $_SESSION['Nama_Guru'];
    header("Location: 4/index.php?Nama_Guru=$Nama_Guru");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIDADOK</title>
  <!-- Icon -->
  <link rel="shortcut icon" type="image/icon" href="favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="aset/fa/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="aset/plugins/iCheck/square/blue.css">
  </head>
   <style type="text/css">
    .div.login-box {
      background: repeat scroll 0 0 rgba(0, 0, 0, 0);
      position: relative;
    }
    body.login-page {
  background: url(aset/dist/css/bg11.jpg) no-repeat;

}
    </style>
  <body class="login-page">
    <div class="login-box">
     <!-- <div class="login-logo">
        <b>SIBILING</b>
        
      </div><!-- /.login-logo -->
      <div class="login-box-body">      
      <div class="text-center">
      <img src="aset/foto/logo.png" class="img-rectangular" alt="Logo" height="120" width="100"/>
      <h5><b>SISTEM INFORMASI DATA DAN DOKUMEN</b></h5>
      <h5><b>DINAS BINA MARGA DAN BINA KONSTRUKSI</b></h5>
      &nbsp;
      
      </div>
        <form action="login_baru.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username" maxlength="30" autofocus required/>
            <span class="form-control-feedback"><i class="fa fa-user"></i></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control " placeholder="Password" maxlength="255" required/>
            <span class="form-control-feedback"><i class="fa fa-lock"></i></span>
          </div>
         <!--  <div class="form-group has-feedback">
            <select name="sebagai" class="form-control" required>
            <option value="">Pilih Level User</option>
            <option value="admin">-Admin-</option>
           
            
            </select>
          </div> -->
          
            
            <div class="form-group has-feedback">
              <button class="btn btn-danger btn-block btn-flat" data-dismiss="modal" type="submit" name="login"><span class="fa fa-key"></span><strong>&nbsp;M a s u k</strong></button>
            </div><!-- /.col -->
         
      
        </form>
    
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
   

    <!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="aset/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>



