<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>
<?php
// including the database connection file
include_once("../../include/connection.php");

if(isset($_POST['add']))
{
  echo $name = $_POST['name'];
  echo $detail = $_POST['detail'];

  // checking empty fields
  if(empty($name) || empty($detail)) {

    if(empty($name)) {
      echo "<font color='red'>Ruang nama kosong.</font><br/>";
    }

    if(empty($detail)) {
      echo "<font color='red'>Ruang Keterangan Penyakit kosong.</font><br/>";
    }
  } else {
    //updating the table
    $result = mysqli_query($mysqli, "INSERT INTO `penyakit`(`name`, `detail`) VALUES ('$name','$detail')")
    or die("Could not execute the select query.");

    $id = mysqli_insert_id($mysqli);

    //redirectig to the display page. In our case, it is view.php
    header("Location: list_penyakit.php");
  }
}
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
          <li class="breadcrumb-item active">Tambah Penyakit</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header"><i class="fa fa-table"></i>  Tambah Penyakit</div>
            <div class="card-body">
              <form  name="add_penyakit" method="post" action="add_penyakit.php">
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Penyakit" value="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="detail" class="col-sm-2 col-form-label">Keterangan Penyakit</label>
                  <div class="col-sm-4">
                    <textarea class="form-control" rows="5" id="detail" name="detail"></textarea>
                  </div>
                </div>
                <input type="submit" class="btn btn-primary" name="add" value="tambah">
                <a href="list_penyakit.php" class="btn btn-danger">Batal</a>
              </form>
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
