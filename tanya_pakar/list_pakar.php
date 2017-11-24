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
          <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Bil</th>
                  <th>Nama</th>
                  <th>Soalan</th>
                  <th>Status</th>
                  <th>Fungsi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Hasyimah</td>
                  <td>Kenapa Sugar glider saya Kurang makan?</td>
                  <td><button type="button" class="btn btn-sm btn-success">Sudah dijawab</button></td>
                  <td>
                    <a href="view_pakar.php" class="btn btn-sm btn-primary">Papar</a>
                    <a href="edit_pakar.php" class="btn btn-sm btn-info">Jawab</a>
                  </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Hazwan</td>
                  <td>Segar glider saya malas bergerak tapi kuat makan. kenapa ye?</td>
                  <td><button type="button" class="btn btn-sm btn-warning">Belum dijawab</button></td>
                  <td>
                    <a href="view_pakar.php" class="btn btn-sm btn-primary">Papar</a>
                    <a href="edit_pakar.php" class="btn btn-sm btn-info">Jawab</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
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
