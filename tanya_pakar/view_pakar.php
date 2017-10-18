<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Pakar Diagnosis Penyakit Sugar Glider</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../index.html">Sistem Pakar Diagnosis Penyakit Sugar Glider</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="../index.html">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Halaman Utama</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
          <a class="nav-link" href="list_pengguna.html">
            <i class="fa fa-fw fa-user-circle"></i>
            <span class="nav-link-text">Maklumat Pengguna</span>
          </a>
        </li>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="diagnosis">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsediagnosis" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-heartbeat"></i>
            <span class="nav-link-text">Diagnosis</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsediagnosis">
            <li>
              <a href="">Simptom</a>
            </li>
            <li>
              <a href="">Penyakit</a>
            </li>
            </li>
            <li>
              <a href="">Cara Rawatan</a>
            </li>
          </ul>
        </li>
        <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="User">
          <a class="nav-link" href="tanya_pakar/list_pakar.html">
            <i class="fa fa-fw fa-stethoscope"></i>
            <span class="nav-link-text">Tanya Pakar</span>
          </a>
        </li>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Log Keluar</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Halaman Utama</a>
        </li>
        <li class="breadcrumb-item active">Pengguna</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Kemaskini Pengguna</div>
          <div class="card-body">
            <form>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="nama" placeholder="Nama" value="Mimi Rosnida" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="nric" class="col-sm-2 col-form-label">No Kad Pengenalan</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="nric" placeholder="No Kad Pengenalan" value="940210-11-5747" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Emel</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="nric" placeholder="email" value="mimiiosman@fsktm.uthm.edu.my" readonly>
                </div>
              </div>
            </form>
          </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Log Keluar</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Adakah anda pasti untuk log keluar?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="login.html">Log Keluar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
