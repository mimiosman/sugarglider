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
$result = mysqli_query($mysqli, "SELECT DISTINCT Asker, name FROM pakar JOIN login ON Asker = login.id WHERE Asker = Asker AND Status = Status");

//fetching data in descending order (lastest entry first)
$result2 = mysqli_query($mysqli, "SELECT * FROM pakar JOIN login ON Asker = login.id WHERE Asker = Asker AND Status = Status");
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
        <li class="breadcrumb-item active">Senarai Soalan & Jawapan Tanya Pakar</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Senarai Soalan & Jawapan Tanya Pakar</div>
          <div class="card-body">
            <!-- <div class="form-row">
              <div class="col">
                <form class="" action="senarai_soalan.php" method="post" name="penyoal">
                  <div class="form-group input-group">
                    <span class="input-group-addon">Penyoal</span>
                    <select class="form-control" name="status">
                      <option value="Asker">Semua</option>
                      <?php
                      while($res = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $res['Asker']; ?>"><?php echo $res['name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </form>
              </div>
              <div class="col">
								<form class="" action="senarai_soalan.php" method="post">
									<div class="form-group input-group">
										<span class="input-group-addon">Status</span>
										<select class="form-control" name="status" onchange="this.form.submit()">
											<option value="Status">Semua</option>
											<option value="1">Sudah Dijawab</option>
											<option value="0">Belum Dijawab</option>
										</select>
									</div>
								</form>
              </div>
            </div>
            <hr> -->
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Penyoal</th>
                    <th>Tajuk</th>
                    <th>Soalan</th>
                    <th>Jawapan</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while($res = mysqli_fetch_array($result2)) {
                    ?>
                    <tr>
                      <td width="10%"><?php echo $res['name']; ?></td>
                      <td width="10%"><?php echo $res['Title']; ?></td>
                      <td width="35%"><?php echo $res['Soalan']; ?></td>
                      <td width="35%"><?php echo $res['Jawapan']; ?></td>
                      <td width="10%">
                        <?php
                          if ($res['Status'] == 0) {
                            echo "<button type='button' class='btn btn-sm btn-warning'>Belum dijawab</button>";
                          } elseif ($res['Status'] == 1) {
                            echo "<button type='button' class='btn btn-sm btn-success'>Sudah dijawab</button>";
                          }
                         ?>
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
