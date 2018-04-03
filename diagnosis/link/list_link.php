<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("../../include/connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM penyakit");
?>
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
          <a href="/index.php">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item active">Senarai Hubungan</li>
      </ol>

      <?php
      while($res = mysqli_fetch_array($result)) {
        $id = $res['id'];
        ?>
        <div class="mb-0 mt-4">
          <i class="fa fa-newspaper-o"></i> <?php echo $res['name']; ?>
        </div>
        <hr class="mt-2">
        <div class="row">
          <div class="col-sm-6">
            <div class="card mb-3">
              <div class="card-header"><i class="fa fa-table"></i>  Simptom</div>
              <div class="card-body">
                <form id="delete" action="delete_penyakit_simptom.php" method="post" >
                  <?php
                  $result2 = mysqli_query($mysqli, "SELECT *, link.id AS linkID
                    FROM link
                    JOIN simptom ON link.id_simptom = simptom.id
                    WHERE link.id_penyakit = $id");
                    while($res2 = mysqli_fetch_array($result2))
                    { ?>
                      <div class="form-check">
                        <input class="" type="checkbox" value="<?php echo $res2['linkID']; ?>" name="checked_id[]" id="a" disabled>
                        <label class="form-check-label" for="a">
                          <?php echo $res2['name']; ?>
                        </label>
                      </div>
                    <?php } ?>
                    <div class="pull-right d-none">
                      <a href="add_penyakit_simptom.php?id=<?php echo $id ?>" class="btn btn-primary btn-sm">Tambah</a>
                      <input type="submit" class="btn btn-danger btn-sm" name="bulk_delete_submit" value="Padam">
                    </div>
                    <input type="hidden" name="idSick" value=<?php echo $id;?>>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="card mb-3">
                <div class="card-header"><i class="fa fa-table"></i>  Rawatan</div>
                <div class="card-body">
                  <form id="delete" action="delete_penyakit_simptom.php" method="post" >
                    <?php
                    $result3 = mysqli_query($mysqli, "SELECT *, link.id AS linkID
                      FROM link
                      JOIN rawatan ON link.id_rawatan = rawatan.id
                      WHERE link.id_penyakit = $id");
                      while($res3 = mysqli_fetch_array($result3))
                      { ?>
                        <div class="form-check">
                          <input class="" type="checkbox" value="<?php echo $res3['linkID']; ?>" name="checked_id[]" id="a" disabled>
                          <label class="form-check-label" for="a">
                            <?php echo $res3['name']; ?>
                          </label>
                        </div>
                      <?php } ?>
                      <div class="pull-right d-none">
                        <a href="add_penyakit_rawatan.php?id=<?php echo $id ?>" class="btn btn-primary btn-sm">Tambah</a>
                        <input type="submit" class="btn btn-danger btn-sm" name="bulk_delete_submit" value="Padam">
                      </div>
                      <input type="hidden" name="idSick" value=<?php echo $id;?>>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
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
