<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>
<?php
// including the database connection file
include_once("../../include/connection.php");

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM rawatan WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
  $name = $res['name'];
  $detail = $res['detail'];
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
          <li class="breadcrumb-item active">Tambah Rawatan</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header"><i class="fa fa-table"></i>  Tambah Rawatan</div>
            <div class="card-body">
              <form  name="add_rawatan" method="post" action="add_rawatan.php">
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama awatan" value="<?php echo $name;?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="detail" class="col-sm-2 col-form-label">Keterangan Rawatan</label>
                  <div class="col-sm-4">
                    <textarea class="form-control" rows="5" id="detail" name="detail" disabled><?php echo $detail;?></textarea>
                  </div>
                </div>
                <a href="list_rawatan.php" class="btn btn-danger">Kembali</a>
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
