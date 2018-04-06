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
$result2 = mysqli_query($mysqli, "SELECT * FROM login");
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
        <li class="breadcrumb-item active">Senarai Maklumat Pengguna</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Senarai Maklumat Pengguna</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Emel</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while($res = mysqli_fetch_array($result2)) {
                    ?>
                    <tr>
                      <td width="10%"><?php echo $res['name']; ?></td>
                      <td width="10%"><?php echo $res['email']; ?></td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- footer -->
    <?php include_once('../include/footer.php'); ?>
    <!-- /.footer -->
  </div>
</body>

</html>
