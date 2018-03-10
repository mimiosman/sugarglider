<!DOCTYPE html>
<html lang="en">

<?php include_once('include/header.php'); ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Katalaluan</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Terlupa katalaluan anda?</h4>
          <p>Masukkan emel anda dan kami akan bagitahu cara untuk reset katalaluan.</p>
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

            $row_cnt = mysqli_num_rows($result);

            if($row_cnt!=0) {
              header('Location: reset-password.php');
            } else {
              echo "Email tersebut belum berdaftar dengan kami.";
              echo "<br/>";
              echo "<a href='forgot-password.php'>Kembali</a>";
            }
          }
        } else {
          ?>
          <form name="form1" method="post" action="">
            <div class="form-group">
              <input class="form-control" id="exampleInputEmail1" name="username" type="email" aria-describedby="emailHelp" placeholder="Masukkan alamat emel" required>
            </div>
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Reset Katalaluan">
          </form>
          <?php
        }
        ?>
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.php">Daftar Akaun</a> -->
          <a class="d-block small" href="login.php">Halaman Log Masuk</a>
        </div>
      </div>
    </div>
  </div>
  <!-- script -->
  <?php include_once('include/script.php'); ?>
  <!-- /.script -->
</body>

</html>
