<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>
<?php
// including the database connection file
include_once("../include/connection.php");

if(isset($_POST['add']))
{
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // checking empty fields
  if(empty($name) || empty($username) || empty($password) || empty($confirm_password)) {

    if(empty($name)) {
      echo "<font color='red'>Ruang nama kosong.</font><br/>";
    }

    if(empty($username)) {
      echo "<font color='red'>Ruang kata nama kosong.</font><br/>";
    }

    if(empty($password)) {
      echo "<font color='red'>Ruang kata laluan kosong.</font><br/>";
    }

    if(empty($confirm_password)) {
      echo "<font color='red'>Ruang sahkan kata laluan kosong.</font><br/>";
    }
  } else {
    //updating the table
    $result = mysqli_query($mysqli, "INSERT INTO `login`(`name`, `email`, `username`, `password`) VALUES ('$name', '$username', '$username', md5('$password'))")
    or die("Could not execute the select query.");

    //redirectig to the display page. In our case, it is view.php
    header("Location: list_pengguna.php");
  }
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
          <i class="fa fa-table"></i> Tambah Pengguna</div>
          <div class="card-body">
            <form  name="form1" method="post" action="add_pengguna.php">
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Emel</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="username" name="username" placeholder="emel" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Kata Laluan</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="kata laluan" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Sahkan Kata Laluan</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="kata laluan" value="">
                </div>
              </div>
              <input type="submit" class="btn btn-primary" name="add" value="tambah">
              <a href="list_pengguna.php" class="btn btn-danger">Batal</a>
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
