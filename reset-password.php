<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('include/header.php'); ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <?php
        include_once("include/connection.php");

        if(isset($_POST['submit']))
        {
          $id = $_SESSION['valid'];

          $pass = $_POST['password'];

          // checking empty fields
          if(empty($pass)) {

            if(empty($pass)) {
              echo "<font color='red'>Ruang KataLaluan kosong.</font><br/>";
              echo "<a href='reset-password.php'>Kembali</a>";
            }
          } else {
            //updating the table
            $result = mysqli_query($mysqli, "UPDATE login SET password=md5('$pass') WHERE username=$id");

            //redirectig to the display page. In our case, it is view.php
            header("Location: login.php");
          }
        } else {
          ?>
          <form name="form1" method="post" action="">
            <div class="form-group">
              <input class="form-control" id="InputPassword1" name="password" type="password" placeholder="KataLaluan" required>
            </div>
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Reset">
          </form>
          <?php
        }
        ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>
  <!-- script -->
  <?php include_once('include/script.php'); ?>
  <!-- /.script -->
</body>

</html>