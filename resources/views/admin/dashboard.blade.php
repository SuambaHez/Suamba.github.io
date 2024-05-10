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
                  <div class="body-text">Dashboard</div>
                  <div class="pagination-container">
                    <div class="pagination">
                      <a href="#">&laquo;&laquo;</a>
                      <a href="#">&laquo;</a>
                      <a href="#">...</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">...</a>
                      <a href="#">&raquo;</a>
                      <a href="#">&raquo;&raquo;</a>
                    </div>
                    <div class="page-size-selector">
                      <select class="uniq-page">
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                        <option>100</option>
                      </select>
                    </div>
                  </div>
                  <div class="thead-container">
                    <div class="thead">
                      <strong>No</strong>
                    </div>
                  </div>
                  <div class="thead-container1">
                    <div class="thead1">
                      <strong>Nama Kegiatan</strong>
                    </div>
                  </div>
                  <div class="thead-container2">
                    <div class="thead2">
                      <strong>Rumpun Kegiatan</strong>
                    </div>
                  </div>
                  <div class="thead-container3">
                    <div class="thead3">
                      <strong>Status Usulan</strong>
                    </div>
                  </div>
                  <div class="thead-container4">
                    <div class="thead3">
                      <strong>Status Monitoring, 
                        <br>Evaluasi, dan Penilaian
                      </strong>
                    </div>
                  </div>
                  <div class="thead-container5">
                    <div class="thead3">
                      <strong>Nilai</strong>
                    </div>
                  </div>
                  <div class="wadah-pencarian">
                    <input type="text" class="input-pencarian" placeholder="Search...">
                    <div class="input-grup-text">
                      <i class="now-ui-icons ui-1_zoom-bold"></i>
                    </div>
                    <div class="info">
                      <p>Showing 1 of 10 of 150 entries</p>                    
                  </div>
                  <table class="table1"> 
                    <tr>
                      <td>1</td>
                      <td>Pelatihan X Akt XI Tahun 2023
                        <th>Klasikal</th>
                      </td>
                      <td>Pendidikan</td>
                      <td><span class="text-success">Ditindaklanjuti oleh <br>Penjamin Mutu<br></span></td>
                    <td><span class="text-warning">Penilaian telah dilakukan <br>oleh Penjamin Mutu<br></span></td>
                    <td>80</td>
                    </tr>
                  </table> 
                  <table class="table2"> 
                    <tr>
                      <td>1</td>
                      <td>Pelatihan X Akt XI Tahun 2023
                        <th>Klasikal</th>
                        <td>Pendidikan</td>
                        <td><span class="text-success">Ditindaklanjuti oleh <br>Penjamin Mutu<br></span></td>
                    <td><span class="text-warning">Menunggu Penilaian<br>oleh Penjamin Mutu<br></span></td>
                      </td>
                    </tr>
                  </table> 
                  <table class="table3"> 
                    <tr>
                      <td>1</td>
                      <td>Pelatihan X Akt XI Tahun 2023
                        <th>Klasikal</th>
                        <td>Pendidikan</td>
                        <td><span class="text-success">Ditindaklanjuti oleh <br>Penjamin Mutu<br></span></td>
                      </td>
                    </tr>
                  </table> 
                  <table class="table4"> 
                    <tr>
                      <td>1</td>
                      <td>Pelatihan X Akt XI Tahun 2023
                        <th>Klasikal</th>
                        <td>Pendidikan</td>
                        <td><span class="text-warning">Menunggu Tindaklanjut <br>oleh Wl Pedamping<br></span></td>
                      </td>
                    </tr>
                  </table> 
                    <div class="card-header"></div>
                    
                    

  <!--   Core JS Files   -->
  @include('layouts.script')
</body>

</html>