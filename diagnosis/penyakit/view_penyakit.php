<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>
<?php
// including the database connection file
include_once("../../include/connection.php");

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM penyakit WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
  $name = $res['name'];
  $detail = $res['detail'];
}

$result2 = mysqli_query($mysqli, "SELECT *, link.id AS linkID
FROM link
JOIN simptom ON link.id_simptom = simptom.id
WHERE link.id_penyakit = $id");

$result3 = mysqli_query($mysqli, "SELECT *, link.id AS linkID
FROM link
JOIN rawatan ON link.id_rawatan = rawatan.id
WHERE link.id_penyakit = $id");
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
            <a href="#">Halaman Utama</a>
          </li>
          <li class="breadcrumb-item active">Papar Penyakit</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header"><i class="fa fa-table"></i>  Papar Penyakit</div>
            <div class="card-body">
              <form  name="add_penyakit" method="post" action="add_penyakit.php">
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Penyakit" value="<?php echo $name;?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="detail" class="col-sm-2 col-form-label">Keterangan Penyakit</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" id="detail" name="detail" disabled><?php echo $detail;?></textarea>
                  </div>
                </div>
                <a href="list_penyakit.php" class="btn btn-danger btn-sm">Kembali</a>
              </form>
            </div>
            <!--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="card mb-3">
                <div class="card-header"><i class="fa fa-table"></i>  Simptom</div>
                <div class="card-body">
                  <form id="delete" action="delete_penyakit_simptom.php" method="post" >
                    <?php
                    while($res2 = mysqli_fetch_array($result2))
                    { ?>
                      <div class="form-check">
                        <input class="" type="checkbox" value="<?php echo $res2['linkID']; ?>" name="checked_id[]" id="a">
                        <label class="form-check-label" for="a">
                          <?php echo $res2['name']; ?>
                        </label>
                      </div>
                    <?php } ?>
                    <div class="pull-right">
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
                    while($res3 = mysqli_fetch_array($result3))
                    { ?>
                      <div class="form-check">
                        <input class="" type="checkbox" value="<?php echo $res3['linkID']; ?>" name="checked_id[]" id="a">
                        <label class="form-check-label" for="a">
                          <?php echo $res3['name']; ?>
                        </label>
                      </div>
                    <?php } ?>
                    <div class="pull-right">
                      <a href="add_penyakit_rawatan.php?id=<?php echo $id ?>" class="btn btn-primary btn-sm">Tambah</a>
                      <input type="submit" class="btn btn-danger btn-sm" name="bulk_delete_submit" value="Padam">
                    </div>
                    <input type="hidden" name="idSick" value=<?php echo $id;?>>
                  </form>
                </div>
              </div>
            </div>
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
