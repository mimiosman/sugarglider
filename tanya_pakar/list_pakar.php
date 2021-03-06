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
$result = mysqli_query($mysqli, "SELECT *, pakar.id AS id_pakar, login.id AS id_login FROM pakar JOIN login ON pakar.Asker = login.id");
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('../include/header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include_once("../include/navbar.php"); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/../index.html">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item active">Tanya Pakar</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tanya Pakar</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Tajuk</th>
                  <th>Status</th>
                  <th>Tindakan</th>

                </tr>
              </thead>
              <tbody>
                <?php
                while($res = mysqli_fetch_array($result)) {
                  ?>
                  <tr>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['Title']; ?></td>
                    <td>
                      <?php
                        if ($res['Status'] == 0) {
                          echo "<button type='button' class='btn btn-sm btn-warning'>Belum dijawab</button>";
                        } elseif ($res['Status'] == 1) {
                          echo "<button type='button' class='btn btn-sm btn-success'>Sudah dijawab</button>";
                        }
                       ?>
                    </td>
                    <td>
                      <a href="view_pakar.php?id=<?php echo $res['id_pakar']; ?>" class="btn btn-sm btn-primary">Papar</a>
                      <a href="edit_pakar.php?id=<?php echo $res['id_pakar']; ?>" class="btn btn-sm btn-info">Jawab</a>
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
    <?php include_once('../include/footer.php'); ?>
    <!-- /.footer -->
    <!-- script -->
    <?php include_once('../include/script.php'); ?>
    <!-- /.script -->
  </div>
</body>

</html>
