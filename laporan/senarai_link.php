<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("../include/connection.php");

//fetching data in descending order (lastest entry first)
$result1 = mysqli_query($mysqli, "SELECT link.id_penyakit, penyakit.name FROM link JOIN penyakit ON link.id_penyakit = penyakit.id GROUP BY link.id_penyakit");
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('../include/header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include_once('../include/navbar.php'); ?>
  <!-- Navigation-->
  <div class="content-wrapper">
		<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/index.php">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item">
          <a href="list_laporan.php">Laporan</a>
        </li>
        <li class="breadcrumb-item active">Senarai Hubungan Penyakit, Simptom dan Cara Rawatan</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Senarai Hubungan Penyakit, Simptom dan Cara Rawatan</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Penyakit</th>
                    <th>Simptom</th>
                    <th>Cara Rawatan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while($res = mysqli_fetch_array($result1)) {
                    $penyakit = $res['id_penyakit'];

                    $result2 = mysqli_query($mysqli, "SELECT name FROM link JOIN simptom ON link.id_simptom = simptom.id WHERE link.id_penyakit = '$penyakit'");

                    $result3 = mysqli_query($mysqli, "SELECT name FROM link JOIN rawatan ON link.id_simptom = rawatan.id WHERE link.id_penyakit = '$penyakit'");

                    ?>
                    <tr>
                      <td><?php echo $res['name']; ?></td>
                      <td>
                        <ol>
                          <?php while ($res2 = mysqli_fetch_array($result2)) { ?>
                            <li><?php echo $res2['name']; ?></li>
                          <?php } ?>
                        </ol>
                      </td>
                      <td>
                        <ol>
                          <?php while ($res3 = mysqli_fetch_array($result3)) { ?>
                            <li><?php echo $res3['name']; ?></li>
                          <?php } ?>
                        </ol>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- footer -->
    <?php include_once('../include/footer.php'); ?>
    <!-- /.footer -->
  </div>
</body>

</html>
