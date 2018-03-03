<!DOCTYPE html>
<html lang="en">

<?php include_once('../../include/header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include_once('../../include/navbar.php'); ?>
  <!-- Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item active">Senarai Penyakit</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i>  Senarai Penyakit</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
            <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Bil</th>
                    <th>Nama Penyakit</th>
                    <th><a href="" class="btn btn-sm btn-secondary">Tambah</a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Tekanan</td>
                    <td><a href="view_simptom.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-primary">Papar</a>
                    <a href="edit_simptom.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-info">Kemaskini</a>
                    <a href="delete_simptom.php?id=<?php echo $res['id']; ?>" onClick="return confirm('Anda pasti untuk padam penyakit ini?')" class="btn btn-sm btn-danger">Padam</a></td>

                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Obesiti</td>
                    <td><a href="view_simptom.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-primary">Papar</a>
                    <a href="edit_simptom.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-info">Kemaskini</a>
                    <a href="delete_simptom.php?id=<?php echo $res['id']; ?>" onClick="return confirm('Anda pasti untuk padam penyakit ini?')" class="btn btn-sm btn-danger">Padam</a></td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
        </div>
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->


    <!-- footer -->
    <?php include_once('../../include/footer.php'); ?>
    <!-- /.footer -->
    <!-- script -->
    <?php include_once('../../include/script.php'); ?>
    <!-- /.script -->
  </div>
</body>

</html>
