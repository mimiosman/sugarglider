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
  // $id = $_POST['id'];
  $id = $_SESSION['id'];

  $cur_password = md5($_POST['cur_password']);
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];

  //selecting data associated with this particular id
  $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=$id");

  while($res = mysqli_fetch_array($result))
  {
    $old_password = $res['password'];
  }

  // echo "<script type='text/javascript'>alert('$cur_password');</script>";
  // echo "<script type='text/javascript'>alert('$old_password');</script>";
  // echo "<script type='text/javascript'>alert('$password');</script>";
  // echo "<script type='text/javascript'>alert('$password_confirm');</script>";

  // checking empty fields
  if(empty($cur_password) || empty($password) || empty($password_confirm)) {

    if(empty($cur_password)) {
      echo "<script type='text/javascript'>alert('Ruang Kata Laluan Terkini kosong.');</script>";
    }

    if(empty($password)) {
      echo "<script type='text/javascript'>alert('Ruang Kata Laluan Baru kosong.');</script>";
    }

    if(empty($password_confirm)) {
      echo "<script type='text/javascript'>alert('Ruang sahkan Kata Laluan kosong.');</script>";
    }

  } elseif ($old_password != $cur_password) {

    echo "<script type='text/javascript'>alert('Kata laluan lama tidak sama.');</script>";

  } elseif ($password != $password_confirm) {
    echo "<script type='text/javascript'>alert('kata nama tidak sama.');</script>";
  }else {
    //updating the table
    $result = mysqli_query($mysqli, "UPDATE login SET password=md5('$password') WHERE id=$id")
    or die("Could not execute the select query.");

    //redirectig to the display page. In our case, it is view.php
    header("Location: view_profile.php?id=".$id);
  }
}

?>
<?php
//getting id from url
// $id = $_GET['id'];

// //selecting data associated with this particular id
// $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=$id");
//
// while($res = mysqli_fetch_array($result))
// {
//   $password = $res['password'];
// }
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
        <div class="card-header"><i class="fa fa-table"></i> Kemaskini Kata Laluan</div>
        <div class="card-body">
          <form  name="form1" method="post" action="edit_password.php">
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Kata Laluan Terkini</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="cur_password" name="cur_password" placeholder="kata laluan sedia ada">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Kata Laluan Baru</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="password" name="password" placeholder="Kata laluan baru">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Sahkan Kata Laluan</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="ulang kata laluan baru">
              </div>
            </div>
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
