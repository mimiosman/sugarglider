<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}

// including the database connection file
include_once("../include/connection.php");

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM pakar JOIN login ON pakar.Asker = login.id WHERE pakar.id=$id");

while($res = mysqli_fetch_array($result))
{
  $name = $res['name'];
  $title = $res['Title'];
  $soalan = $res['Soalan'];
  $jawapan = $res['Jawapan'];
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
          <a href="/index.html">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item active">Tanya Pakar</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tanya Pakar</div>
          <div class="card-body">
            <form>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" value="<?php echo $name ?>" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="tajuk" class="col-sm-2 col-form-label">Tajuk</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="tajuk" name="tajuk" placeholder="tajuk" value="<?php echo $title ?>" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="soalan" class="col-sm-2 col-form-label">Soalan</label>
                <div class="col-sm-6">
                  <textarea class="form-control" rows="4" id="soalan" name="soalan" placeholder="soalan" disabled><?php echo $soalan ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="jawapan" class="col-sm-2 col-form-label">Jawapan</label>
                <div class="col-sm-6">
                  <textarea class="form-control" rows="4" id="jawapan" name="jawapan" placeholder="jawapan" disabled><?php echo $jawapan ?></textarea>
                </div>
              </div>
              <a href="list_pakar.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
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
