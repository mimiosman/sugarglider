<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('include/header.php'); ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <?php
        include("include/connection.php");

        if(isset($_POST['submit'])) {
          $user = mysqli_real_escape_string($mysqli, $_POST['username']);

          if($user == "") {
            echo "Sila isi katanama dan katalaluan.";
            echo "<br/>";
            echo "<a href='forgot-password.php'>Kembali</a>";
          } else {
            $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user'")
            or die("Could not execute the select query.");

            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)) {
              $validuser = $row['username'];
              $_SESSION['valid'] = $validuser;
            } else {
              echo "Email tersebut belum berdaftar dengan kami.";
              echo "<br/>";
              echo "<a href='forgot-password.php'>Kembali</a>";
            }

            if(isset($_SESSION['valid'])) {
              header('Location: reset-password.php');
            }
          }
        } else {
          ?>
          <form name="form1" method="post" action="">
            <div class="form-group">
              <input class="form-control" id="exampleInputEmail1" name="username" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required>
            </div>
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Reset Password">
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