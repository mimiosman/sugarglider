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

  $name = $_POST['name'];
  $username = $_POST['username'];

  // checking empty fields
  if(empty($name) || empty($username)) {

    if(empty($name)) {
      echo "<font color='red'>Ruang nama kosong.</font><br/>";
    }

    if(empty($username)) {
      echo "<font color='red'>Ruang email kosong.</font><br/>";
    }
  } else {
    //updating the table
    $result = mysqli_query($mysqli, "UPDATE login SET name='$name', username='$username' WHERE id=$id")
    or die("Could not execute the select query.");

    //redirectig to the display page. In our case, it is view.php
    header("Location: list_pengguna.php");
  }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
  $name = $res['name'];
  $username = $res['username'];
}
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
          <li class="breadcrumb-item active">Pentadbir</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> Kemaskini Pengguna</div>
            <div class="card-body">
              <form name="form1" method="post" action="">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-4">
                      <label for="InputName">Nama Penuh</label>
                      <input class="form-control" id="InputName" name="name" type="text" aria-describedby="nameHelp" placeholder="Masukkan Nama" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-4">
                      <label for="InputEmail1">Emel</label>
                      <input class="form-control" id="InputEmail1" name="username" type="email" aria-describedby="emailHelp" placeholder="Masukkan Emel" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-4">
                      <label for="InputPassword1">Katalaluan</label>
                      <input class="form-control" id="InputPassword1" name="password" type="password" placeholder="KataLaluan" required>
                    </div>
                  </div>
                </div>
                <input class="btn btn-success" type="submit" name="submit" value="Tambah">
                <!-- <a class="btn btn-primary btn-block" href="login.php">Daftar</a> -->
              </form>
            </div>
          </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <?php include_once('../include/footer.php'); ?>
        <?php include_once('../include/script.php'); ?>
      </div>
    </body>

  </html>
