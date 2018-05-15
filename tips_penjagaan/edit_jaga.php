<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("../include/connection.php");

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $title = $_POST['title'];
  $penerangan = $_POST['penerangan'];

  // checking empty fields
  if(empty($title)) {

    if(empty($title)) {
      echo "<font color='red'>Ruang jawapan kosong.</font><br/>";
    }
  } else {
    //updating the table
    $query = "UPDATE `penjagaan` SET `title`='$title',`description`='$penerangan' WHERE `id`='$id'";
    $result = mysqli_query($mysqli, $query)
    or die("Could not execute the select query.");

    //redirectig to the display page. In our case, it is view.php
    header("Location: list_jaga.php");
  }
}
?>

<?php
// including the database connection file
include_once("../include/connection.php");

// If upload button is clicked ...
 if (isset($_POST['upload'])) {
   $id2 = $_POST['id2'];
   $image2 = $_POST['image2'];

   unlink("../static/img/jaga/".$image2);

   // Get image name
   $image = $_FILES['image']['name'];

   // image file directory
   $target = "../static/img/jaga/".basename($image);

   $sql = "UPDATE `penjagaan` SET `Image`='$image' WHERE `id`='$id2'";
   // execute query
   $result2 = mysqli_query($mysqli, $sql)
   or die("Could not execute the select query.");

   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
     $msg = "Image uploaded successfully";
   }else{
     $msg = "Failed to upload image";
   }

   //redirectig to the display page. In our case, it is view.php
   header("Location: list_jaga.php");
 }
?>

<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$query = "SELECT * FROM `penjagaan` WHERE id=$id";
$result = mysqli_query($mysqli, $query);

while($res = mysqli_fetch_array($result))
{
  $title = $res['title'];
  $description = $res['description'];
  $image = $res['Image'];
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
            <form  name="form1" method="post" action="edit_jaga.php" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="tajuk" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-6">
                  <img src="<?php echo "../static/img/jaga/".$image ?>" class="img-thumbnail" alt="<?php $image ?>" width="304" height="236">
                </div>
              </div>
              <div class="form-group row">
                <label for="tajuk" class="col-sm-2 col-form-label">Tajuk</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="tajuk" name="title" placeholder="tajuk" value="<?php echo $title ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="soalan" class="col-sm-2 col-form-label">Penerangan</label>
                <div class="col-sm-6">
                  <textarea class="form-control" rows="4" id="penerangan" name="penerangan" placeholder="penerangan"><?php echo $description ?></textarea>
                </div>
              </div>
              <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
              <a href="list_jaga.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
              <input type="submit" class="btn btn-primary" name="update" value="Kemaskini">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">Tukar Imej</button>
            </form>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>
      <!-- modal -->
      <div id="Modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tukar Imej</h4>
            </div>
            <div class="modal-body">
              <form  name="tukarImej" method="post" action="edit_jaga.php" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="file" class="form-control-file" name="image">
                </div>
                <input type="hidden" name="id2" value=<?php echo $_GET['id'];?>>
                <input type="hidden" name="image2" value=<?php echo $image;?>>
                <input type="submit" class="btn btn-primary pull-right" name="upload" value="Tukar">
              </form>
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
