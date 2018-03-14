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
  echo $penyakit = $_POST['id'];
  echo $simptom = $_POST['simptom'];

  // checking empty fields
  if(empty($simptom)) {

    if(empty($simptom)) {
      echo "<font color='red'>Ruang simptom kosong.</font><br/>";
    }
  } else {
    //updating the table
    $result = mysqli_query($mysqli, "INSERT INTO `link`(`id_penyakit`, `id_simptom`) VALUES ('$penyakit','$simptom')")
    or die("Could not execute the select query.");

    //redirectig to the display page. In our case, it is view.php
    header("Location: list_penyakit.php");
  }
}
?>

<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM penyakit WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
  $name = $res['name'];
}

$result2 = mysqli_query($mysqli, "SELECT * FROM simptom");
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
              <form  name="add_penyakit" method="post" action="add_penyakit_simptom.php">
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Penyakit" value="<?php echo $name;?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="simptom" class="col-sm-2 col-form-label"> Simptom</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="simptom">
                      <option value="">pilih</option>
                      <?php
                      while($res2 = mysqli_fetch_array($result2))
                      { ?>
                        <option value="<?php echo $res2['id']; ?>"><?php echo $res2['name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
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
