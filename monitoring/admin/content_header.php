<header class="main-header">
  <!-- Logo -->
  <div class="logo">
<span class="logo-mini"><img src="../aset/foto/logo.png" class="img-circle" alt="Logo" height="50" width="50"></span>
<span class="logo-lg"><b>SI</b>DADOK</span>
</div>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="../aset/foto/logo.png" class="user-image" alt="Foto">
    <span class="hidden-xs" style="text-transform:capitalize;"><?php echo "".$_SESSION["username"]."" ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
    <img src="../aset/foto/logo.png" class="img-circle" alt="Foto">
              <!--<h3><p>Akademik</p></h3>-->
    <p style="text-transform:capitalize;">Hi <?php echo "".$_SESSION["username"]."" ?>, </p>
    <p>Selamat Datang di SIDADOK</p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
    <!-- <div class="pull-left">
                <a href="admin_edit_1.php" class="btn btn-danger">Profil <i class="fa fa-lock"></i></a>
              </div> -->
              <div class="">
                <a href="../logout.php" class="btn btn-danger">Keluar <i class="fa fa-sign-out"></i></a>
              </div>
            </li>
        </li>
      </ul>
    </div>
  </nav>
</header>
