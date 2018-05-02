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

      <div class="card col-sm-7">
        <div class="card-header">
          <i class="fa fa-table"></i> Maklumat System</div>
					<img class="card-img-top" src="/static/img/sugar_glider3.png" alt="Card image cap">
          <div class="card-body">
				      <div class="rows">
				        <h1  class="card-title">Sugar Glider</h1>
				        <!-- <div class="thumbnail">
				          <img src="/static/img/sugar_glider3.png">
				        </div> -->
				        <p class="text-justify card-text"><em>Sugar Glider</em> atau nama saintifiknya <em>Pretaurus Breviceps</em> merupakan haiwan <em>marsupial</em> yangberasal dari Australia, dan sebahagian daripada Indonesia dan New Guinea. Haiwan ini bukan tergolong dalam spesies tupai terbang, dan diklasifikasikan sebagai haiwan eksotik di Amerika. <a data-toggle="collapse" data-target="#demo"><font style="color:red">Lagi..</font></a></p>
				        <p class="text-justify collapse card-text" id="demo">Haiwan ini juga adalah haiwan <em>nocturnal</em> iaitu berjaga dan mencarimakanan pada waktu malam hari dan tidur sepanjang siang hari. Haiwan ini jika melahirkan anak, ia akan di jaga dan disusui di dalam kantung perut ibunya samasebagaimana kanggaru. Nama <em>Sugar Glider</em> datangnya daripada pemakanan mereka yang gemar makan buah-buahan manis (gula atau madu) dan <em>Glider</em> dari tingkahlaku mereka yang suka melompat dan menjunam menggunakan membran yang dinamakan <em>patagium</em>.</p>
				      </div>
          </div>
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
