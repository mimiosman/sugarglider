<!DOCTYPE html>
<html lang="en">

<?php include_once('/include/header.php'); ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Log Masuk</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat Emel</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Masukkan Emel">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Katalaluan</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Masukkan Katalaluan">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Ingat Katalaluan</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="index.php">Log Masuk</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Daftar Akaun</a>
          <a class="d-block small" href="forgot-password.php">Terlupa Katalaluan?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- script -->
  <?php include_once('/include/script.php'); ?>
  <!-- /.script -->
</body>

</html>
