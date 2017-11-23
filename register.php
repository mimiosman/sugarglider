<!DOCTYPE html>
<html lang="en">

<?php include_once('include/header.php'); ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Daftar Akaun</div>
      <div class="card-body">
        <?php
        include("include/connection.php");

        if(isset($_POST['submit'])) {
          $name = $_POST['name'];
          $user = $_POST['username'];
          $pass = $_POST['password'];

          if($user == "" || $pass == "" || $name == "") {
            echo "Sila isi semua maklumat diatas.";
            echo "<br/>";
            echo "<a href='register.php'>Kembali</a>";
          } else {
            mysqli_query($mysqli, "INSERT INTO login(name, username, password) VALUES('$name', '$user', md5('$pass'))")
            or die("Could not execute the insert query.");

            echo "Pendaftaran Berjaya";
            echo "<br/>";
            echo "<a href='login.php'>Log Masuk</a>";
          }
        } else {
          ?>
          <form name="form1" method="post" action="">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="InputName">Nama Penuh</label>
                  <input class="form-control" id="InputName" name="name" type="text" aria-describedby="nameHelp" placeholder="Masukkan Nama" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="InputEmail1">Emel</label>
              <input class="form-control" id="InputEmail1" name="username" type="email" aria-describedby="emailHelp" placeholder="Masukkan Emel" required>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="InputPassword1">Katalaluan</label>
                  <input class="form-control" id="InputPassword1" name="password" type="password" placeholder="KataLaluan" required>
                </div>
              </div>
            </div>
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Daftar">
            <!-- <a class="btn btn-primary btn-block" href="login.php">Daftar</a> -->
          </form>
          <?php
        }
        ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Halaman Log Masuk</a>
          <a class="d-block small" href="forgot-password.php">Terlupa Katalaluan?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- script -->
  <?php include_once('include/script.php'); ?>
  <!-- /.script -->
</body>

</html>
