<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('include/header.php'); ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Log Masuk</div>
      <div class="card-body">
        <?php
        include("include/connection.php");

        if(isset($_POST['submit'])) {
          $user = mysqli_real_escape_string($mysqli, $_POST['username']);
          $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

          if($user == "" || $pass == "") {
            echo "Sila isi katanama dan katalaluan.";
            echo "<br/>";
            echo "<a href='login.php'>Kembali</a>";
          } else {
            $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
            or die("Could not execute the select query.");

            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)) {
              $validuser = $row['username'];
              $_SESSION['valid'] = $validuser;
              $_SESSION['name'] = $row['name'];
              $_SESSION['id'] = $row['id'];
            } else {
              echo "Katanama dan katalaluan tidak sah.";
              echo "<br/>";
              echo "<a href='login.php'>Kembali</a>";
            }

            if(isset($_SESSION['valid'])) {
              header('Location: index.php');
            }
          }
        } else {
          ?>
          <form name="form1" method="post" action="">
            <div class="form-group">
              <label for="InputEmail1">Alamat Emel</label>
              <input class="form-control" id="InputEmail1" name="username" type="email" aria-describedby="emailHelp" placeholder="Masukkan Emel" required>
            </div>
            <div class="form-group">
              <label for="InputPassword1">Katalaluan</label>
              <input class="form-control" id="InputPassword1" name="password" type="password" placeholder="Masukkan Katalaluan" required>
            </div>
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Log Masuk">
            <!-- <a class="btn btn-primary btn-block" href="index.php">Log Masuk</a> -->
          </form>
          <?php
        }
        ?>
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.php">Daftar Akaun</a> -->
          <!-- <a class="d-block small" href="forgot-password.php">Terlupa Katalaluan?</a>  -->
        </div>
      </div>
    </div>
  </div>
  <!-- script -->
  <?php include_once('include/script.php'); ?>
  <!-- /.script -->
</body>

</html>
