<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("../include/connection.php");

//fetching data in descending order (lastest entry first)
$result2 = mysqli_query($mysqli, "SELECT name FROM penyakit");
$res = mysqli_fetch_array($result2)
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('../include/header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include_once('../include/navbar.php'); ?>
  <!-- Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/index.php">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item">
          <a href="list_laporan.php">Laporan</a>
        </li>
        <li class="breadcrumb-item active">Graf Kekerapan Penyakit</li>
      </ol>

      <div class="col-lg-12">
        <!-- Example Bar Chart Card-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-bar-chart"></i> Graf Kekerapan Penyakit
          </div>
          <div class="card-body">
            <canvas id="graphSick" width="100" height="50"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- footer -->
    <?php include_once('../include/footer.php'); ?>
    <!-- /.footer -->
    <script type="text/javascript" src="app.js"></script>
  </div>
</body>

</html>
