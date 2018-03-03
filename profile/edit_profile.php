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
        <li class="breadcrumb-item active">Profil</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Kemaskini Pengguna</div>
          <div class="card-body">
            <form  name="form1" method="post" action="edit_profile.php">
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" value="<?php echo $name;?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Emel</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="nric" name="username" placeholder="email" value="<?php echo $username;?>" readonly>
                </div>
              </div>
              <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
              <input type="submit" class="btn btn-primary" name="update" value="Kemaskini">
              <a href="/profile/view_profile.php?id=<?php echo $_SESSION['id']; ?>" class="btn btn-danger">Batal</a>
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
