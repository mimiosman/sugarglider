<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("../include/connection.php");

if(isset($_POST['insert']))
{
  // Get image name
  $image = $_FILES['image']['name'];

  $title = $_POST['tajuk'];
  $description = $_POST['penerangan'];

  // image file directory
  $target = "../static/img/jaga/".basename($image);

  // checking empty fields
  if(empty($title)) {

    if(empty($title)) {
      echo "<font color='red'>Ruang Tajuk kosong.</font><br/>";
    }
  } else {
    //updating the table
    $query = "INSERT INTO `penjagaan`(`title`, `description`, `Image`) VALUES ('$title', '$description', '$image')";
    $result = mysqli_query($mysqli, $query)
    or die("Could not execute the select query.");

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

    //redirectig to the display page. In our case, it is view.php
    header("Location: list_jaga.php");
  }
}
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
        <li class="breadcrumb-item active">Tips Penjagaan</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tips Penjagaan</div>
          <div class="card-body">
            <form  name="form1" method="post" action="add_jaga.php" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="tajuk" class="col-sm-2 col-form-label">Tajuk</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="tajuk" name="tajuk" placeholder="tajuk">
                </div>
              </div>
              <div class="form-group row">
                <label for="soalan" class="col-sm-2 col-form-label">Penerangan</label>
                <div class="col-sm-6">
                  <textarea class="form-control" rows="4" id="penerangan" name="penerangan" placeholder="penerangan"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="soalan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-6">
                  <input type="hidden" name="size" value="1000000">
                  <input type="file" class="form-control-file" id="Gambar" name="image">
                </div>
              </div>
              <a href="list_jaga.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
              <input type="submit" class="btn btn-primary" name="insert" value="Tambah">
            </form>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
