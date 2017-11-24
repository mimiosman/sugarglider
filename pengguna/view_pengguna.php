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
        <li class="breadcrumb-item active">Pengguna</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Papar Pengguna</div>
          <div class="card-body">
            <form  name="form1" method="post" action="edit_pengguna.php">
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" value="<?php echo $name;?>" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Emel</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="nric" name="username" placeholder="email" value="<?php echo $username;?>" disabled>
                </div>
              </div>
              <a href="list_pengguna.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
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
