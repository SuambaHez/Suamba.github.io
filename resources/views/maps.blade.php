@include('layouts.header')

<body class="">
  <div class="wrapper ">
    @include('layouts.sidebar')
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <!-- End Navbar -->
      <div class="latar">
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
            <div class="content-body">
                <div class="card">
                  <div class="profile-circle">
                  </div>
                  <div class="text-header">Application</div>
                  <div class="text-head"> > Dashboard</div>
                  <div class="line"></div>
                  <div class="body-text">Hasil Input Formulir</div>
                  <div class="catatan-header">
                    <strong>Catatan</strong>
                  </div>
                  <div class="catatan-corpu">
                    <strong>Disposisi Ketua Harian CorpU</strong>
                  </div>
                  <div class="admin-corpu">
                    <strong>Catatan Admin CorpU</strong>
                  </div>
                  <div class="text-saran">
                    <strong>Saran dan Rekomendasi Penjamin Mutu</strong>
                  </div>
                  <div class="form-catatan">
                    <div class="form-grup">
                      <p>Disposisi Ketua Harian CorpU</p>
                    </div>
                  </div>
                  <div class="form-table">
                    <div class="form-admin">
                      <p>Catatan Admin CorpU</p>
                    </div>
                  </div>
                  <div class="form-saran">
                    <div class="form-tabel">
                      <p>Saran dan Rekomendasi Penjamin Mutu</p>
                    </div>
                  </div>
                  <div class="text-footer">
                    <strong>Lanjutkan</strong>
                    <p>WI Pedamping</p>
                  </div>
                  <div class="checkbox-container">
                   <input type="checkbox" id="checkbox1">
                   <label for="checkbox1" class="checkbox-label">Dengan mencentang kolom checkbox ini; <br>
                    1. Saya menyatakan telah menyetujui Disposisi, Catatan, Saran dan Rekomendasi form pengajuan dengan benar dan sebaik-baiknya</label>
               </div>
               <button class="button">Kembalikan</button>
               <button class="button1">Setujui</button>
                  <div class="form-result">
            <div class="form-groupp1">
                <strong>Rumpun Kegiatan:</strong>
                <p>Pendidikan</p>
            </div>
            <div class="form-groupp2">
                <strong>Bentuk Kegiatan:</strong>
                <p>Klasikal</p>
            </div>
            <div class="form-groupp3">
                <strong>Jenis Kegiatan:</strong>
                <p>Pelatihan Manajerial</p>
            </div>
            <div class="form-groupp4">
                <strong>Nama Kegiatan:</strong>
                <p>Pelatihan A X at Tahun 2023</p>
            </div>
            <div class="form-groupp5">
                <strong>Quota Peserta:</strong>
                <p>100 Orang</p>
            </div>
            <div class="form-groupp6">
                <strong>Tanggal Periode Pendaftaran Kegiatan:</strong>
                <div class="box1"><p>12 Jul, 2023 - 12 Aug, 2023</p></div>
            </div>
            <div class="form-groupp7">
                <strong>Tanggal Periode Pelaksanaan Kegiatan:</strong>
                <div class="box2"><p>12 Jul, 2023 - 12 Aug, 2023</p></div>
            </div>
            <div class="form-groupp8">
                <strong>Nama Instansi:</strong>
                <p>Instansi X</p>
            </div>
            <div class="form-groupp9">
                <strong>Alamat Instansi:</strong>
                <p>Jl. X No X Denpasar</p>
            </div>
            <div class="form-groupp10">
                <strong>Nama PIC:</strong>
                <p>Ida Bagus Agung Indra Putra Didada</p>
            </div>
            <div class="form-groupp11">
                <strong>No. Whatsapp PIC:</strong>
                <p>082247XXXXXX</p>
            </div>
            <div class="form-groupp12">
                <strong>Tata Tertib Kegiatan:</strong>
                <label for="exampleFormControlTextarea1"></label>
                          <textarea class="form-control-maps" id="exampleFormControlTextarea1" rows="3">content of the editor</textarea>
            </div>
            </div>
            
                    <div class="card-header"></div>
                    

  <!--   Core JS Files   -->
  @include('layouts.script')
</body>

</html>