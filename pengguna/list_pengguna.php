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
$result = mysqli_query($mysqli, "SELECT * FROM login");
?>
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
          <a href="#">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item active">Pengguna</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Senarai Pengguna
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($res = mysqli_fetch_array($result)) {
                  ?>
                  <tr>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['username']; ?></td>
                    <td>
                      <a href="view_pengguna.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-primary">Papar</a>
                      <a href="edit_pengguna.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-info">Kemaskini</a>
                      <a href="delete_pengguna.php?id=<?php echo $res['id']; ?>" onClick="return confirm('Anda pasti untuk padam pengguna ini?')" class="btn btn-sm btn-danger">Padam</a>
                    </td>
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
    <!-- script -->
    <?php include_once('../include/script.php'); ?>
    <!-- /.script -->
  </div>
</body>

</html>
