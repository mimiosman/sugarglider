<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("../../include/connection.php");

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $name = $_POST['name'];
  $detail = $_POST['detail'];

  // checking empty fields
  if(empty($name) || empty($detail)) {

    if(empty($name)) {
      echo "<font color='red'>Ruang Nama kosong.</font><br/>";
    }

    if(empty($detail)) {
      echo "<font color='red'>Ruang Keterangan kosong.</font><br/>";
    }
  } else {
    //updating the table
    $result = mysqli_query($mysqli, "UPDATE `rawatan` SET `name`='$name',`detail`='$detail' WHERE id=$id")
    or die("Could not execute the select query.");

    //redirectig to the display page. In our case, it is view.php
    header("Location: list_rawatan.php");
  }
}
?>

<?php
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
          <li class="breadcrumb-item active">Kemaskini Rawatan</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header"><i class="fa fa-table"></i>  Kemaskini Rawatan</div>
          <div class="card-body">
            <form  name="add_rawatan" method="post" action="edit_rawatan.php">
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama Rawatan" value="<?php echo $name;?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="detail" class="col-sm-2 col-form-label">Keterangan Rawatan</label>
                <div class="col-sm-4">
                  <textarea class="form-control" rows="5" id="detail" name="detail"><?php echo $detail;?></textarea>
                </div>
              </div>
              <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
              <input type="submit" class="btn btn-primary" name="update" value="Kemaskini">
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
