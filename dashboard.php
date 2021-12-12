<!doctype php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8git">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    
    <link rel="stylesheet" href="admin.css">
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PORTAL | <b>UNIVERSITAS PEMBANGUNAN PANCABUDI</b></a>

        <a href="index.php" class="btn btn-secondary">Keluar</a>
        
          <form class="d-flex">
            <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
             
            <div class="icon ml - 4">
                <h5>
                    <i class="fas fa-envelope ms-3" data-toggle="tooltip" title="Surat Masuk"></i>
                    <i class="fas fa-bell ms-2" data-toggle="tooltip" title="Notifikasi"></i>
                    <i class="fas fa-sign-out-alt me-2 ms-2" data-toggle="tooltip" title="Sign Out"></i>
                  </h5>
                </h5>
            </div>
          </div>
        </div>
      </nav>

      <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
          <ul class="nav flex-column ml-3 mb-5">
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-columns"></i> Dashboard</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="mahasiswa.php"><i class="fas fa-user-graduate"></i> Daftar Mahasiswa</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit"></i> Daftar Pegawai</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="jadwal.php"><i class="fas fa-calendar-alt"></i> Jadwal Kuliah</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane"></i> Nilai Mahasiswa</a><hr class="bg-secondary">
                </li>
            </ul>
            </div>

        <div class="col-md-10 p-5 pt-5">
          <h3><i class="fas fa-columns"></i>DASHBOARD</h3><hr>

          <div class="row text-white">
              <div class="card bg-info ml-5 me-5" style="width: 18rem;">
                  <div class="card-body mr-5">
                      <div class="card-body-icon">
                           <i class="fas fa-user-graduate"></i>
                      </div>
                    <h5 class="card-title">JUMLAH MAHASISWA</h5>
                    <div class="display-4">5000</div>
                    <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>

                  <div class="card bg-success ml-5 me-5 " style="width: 18rem;">
                      <div class="card-body">
                          <div class="card-body-icon">
                              <i class="fas fa-chalkboard-teacher"></i>
                          </div>
                        <h5 class="card-title">JUMLAH DOSEN</h5>
                        <div class="display-4">130</div>
                        <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                      </div>
                    </div>
              
                      <div class="card bg-danger ml-5" style="width: 18rem;">
                          <div class="card-body">
                              <div class="card-body-icon">
                                  <i class="fas fa-user-edit"></i>
                              </div>
                            <h5 class="card-title">JUMLAH PEGAWAI</h5>
                            <div class="display-4">50</div>
                            <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                          </div>
                        </div>         
          </div>
          <div class="row mt-4">
              <div class="card ml-5 me-5 text-white text-center" style="width: 18rem;">
                  <div class="card-header bg-danger display-4 pt-4 pb-4">
                      <i class="fab fa-instagram"></i>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-danger">INSTAGRAM</h5>
                    <a href="#" class="btn btn-danger">FOLLOW</a>
                  </div>
                </div>

                <div class="card ml-5 me-5 text-white text-center" style="width: 18rem;">
                  <div class="card-header bg-info display-4 pt-4 pb-4">
                      <i class="fab fa-facebook"></i>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-info">FACEBOOK</h5>
                    <a href="#" class="btn btn-info">LIKE</a>
                  </div>
                </div>

                <div class="card ml-5 text-white text-center" style="width: 18rem;">
                  <div class="card-header bg-primary display-4 pt-4 pb-4">
                      <i class="fab fa-twitter"></i>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-primary">TWITTER</h5>
                    <a href="#" class="btn btn-primary">FOLLOW</a>
                  </div>
                </div>
          </div>
        </div>
    </div>

    <div class="container-fluid pt-4 pb-2 bg-warning">
      <div class="text-body text-white text-center">
        <div class="container text-white text-center"><p>Copyright @ 2021 Website by Kelompok 5</p>