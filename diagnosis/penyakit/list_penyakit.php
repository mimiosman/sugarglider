<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("../../include/connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM penyakit");
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('../../include/header.php'); ?>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include_once('../../include/navbar.php'); ?>
    <!-- Navigation-->
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Halaman Utama</a>
          </li>
          <li class="breadcrumb-item active">Senarai Penyakit</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header"><i class="fa fa-table"></i>  Senarai Penyakit</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama Penyakit</th>
                    <th class="text-right"><a href="add_penyakit.php" class="btn btn-sm btn-secondary">Tambah</a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while($res = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                      <td><?php echo $res['name']; ?></td>
                      <td class="text-right">
                        <a href="view_penyakit.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-primary">Papar</a>
                        <a href="edit_penyakit.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-info">Kemaskini</a>
                        <a href="delete_penyakit.php?id=<?php echo $res['id']; ?>" onClick="return confirm('Anda pasti untuk padam penyakit ini?')" class="btn btn-sm btn-danger">Padam</a>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
        </div>
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->


      <!-- footer -->
      <?php include_once('../../include/footer.php'); ?>
      <!-- /.footer -->
      <!-- script -->
      <?php include_once('../../include/script.php'); ?>
      <!-- /.script -->
    </div>
  </body>

</html>
