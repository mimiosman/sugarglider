<!DOCTYPE html>
<html lang="en">

<?php include_once('include/header.php'); ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Daftar Akaun</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nama Pertama</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Masukkan Nama Pertama">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Nama Terakhir</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Masukkan Nama Terakhir">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Emel</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Masukkan Emel">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Katalaluan</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="KataLaluan">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Pengesahan Katalaluan</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Pengesahan Katalaluan">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.php">Daftar</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Halaman Log Masuk</a>
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
