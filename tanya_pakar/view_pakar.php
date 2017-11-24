<!DOCTYPE html>
<html lang="en">

<?php include_once('../include/header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include_once("../include/navbar.php"); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/../index.html">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item active">Tanya Pakar</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tanya Pakar</div>
          <div class="card-body">
            <form>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" value="Hasyimah" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="soalan" class="col-sm-2 col-form-label">Soalan</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="soalan" name="soalan" placeholder="soalan" value="Kenapa Sugar glider saya Kurang makan?" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="jawapan" class="col-sm-2 col-form-label">Jawapan</label>
                <div class="col-sm-6">
                  <textarea class="form-control" rows="4" id="jawapan" name="jawapan" placeholder="jawapan" disabled>sebab dia merajuk</textarea>
                </div>
              </div>
              <a href="list_pakar.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
            </form>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->

      <!-- footer -->
      <?php include_once('../include/footer.php'); ?>
      <!-- /.footer -->
      <!-- script -->
      <?php include_once('../include/script.php'); ?>
      <!-- /.script -->
    </div>
  </body>

  </html>
