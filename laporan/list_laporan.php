<!DOCTYPE html>
<html lang="en">

<?php include_once('../include/header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include_once('../include/navbar.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/../index.html">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item active">Laporan</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Laporan</div>
        <div class="card-body">
          <ol class="list-group">
            <li class="list-group-item"><a href="senarai_soalan.php">Senarai Soalan & Jawapan Tanya Pakar</a></li>
            <li class="list-group-item"><a href="senarai_pengguna.php">Senarai Maklumat Pengguna</a></li>
            <li class="list-group-item"><a href="senarai_link.php">Senarai Hubungan Penyakit, Simptom dan Cara Rawatan</a></li>
            <li class="list-group-item"><a href="graph_penyakit.php">Graf Kekerapan Panyakit</a></li>
          </ol>
        </div>
        <!--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!-- footer -->
    <?php include_once('../include/footer.php'); ?>
    <!-- /.footer -->
    <!-- script -->
    <?php include_once('../include/script.php'); ?>
    <!-- /.script -->
  </div>
</body>

</html>
