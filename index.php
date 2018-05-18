<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('include/header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include_once('include/navbar.php'); ?>
  <!-- Navigation-->
  <div class="content-wrapper">
		<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item active">Utama</li>
      </ol>
			<div class="row">
        <div class="col-12 text-center">
          <h1>SELAMAT DATANG KE APLIKASI SISTEM PAKAR DIAGNOSIS PENYAKIT SUGAR GLIDER</h1>
          <p><img src="/static/img/sugar_glider3.png" width="550" height="350" class="center"></p>
        </div>
      </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- footer -->
    <?php include_once('include/footer.php'); ?>
    <!-- /.footer -->
  </div>
</body>

</html>
