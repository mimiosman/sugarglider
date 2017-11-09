<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="/index.php">Sistem Pakar Diagnosis Penyakit Sugar Glider</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
        <a class="nav-link" href="/index.php">
          <i class="fa fa-fw fa-home"></i>
          <span class="nav-link-text">Halaman Utama</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
        <a class="nav-link" href="/pengguna/list_pengguna.php">
          <i class="fa fa-fw fa-user-circle"></i>
          <span class="nav-link-text">Maklumat Pengguna</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="diagnosis">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsediagnosis" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-heartbeat"></i>
          <span class="nav-link-text">Diagnosis</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapsediagnosis">
          <li>
            <a href="/diagnosis/simptom/list_simptom.php">Simptom</a>
          </li>
          <li>
            <a href="/diagnosis/penyakit/list_penyakit.php">Penyakit</a>
          </li>
          <li>
            <a href="/diagnosis/rawatan/list_rawatan.php">Cara Rawatan</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
        <a class="nav-link" href="/tanya_pakar/list_pakar.php">
          <i class="fa fa-fw fa-stethoscope"></i>
          <span class="nav-link-text">Tanya Pakar</span>
        </a>
      </li>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
        <a class="nav-link" href="/laporan/list_laporan.php">
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
