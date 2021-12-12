<!doctype php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8git">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="fasilitas.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    
    <link rel="stylesheet" href="fasilitas.css">
    <link rel="stylesheet" href="index.php">

  </head>
  <body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Universitas-Pembangunan-Panca-Budi.png" alt="" width="50" height="50" class="me-2"><h9><b>UNIVERSITAS PEMBANGUNAN PANCA BUDI</b></h9></a> 
          </div>
          <button 
              class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="#Notifikasi"><i class="fas fa-bell me-2" data-toggle="tooltip" title="Notifikasi"></i></a>
                          </li>
                      <li class="nav-item ms-3">
                        <a class="nav-link text-white" href="layanan.php">Layanan</a>
                      </li>
                      <li class="nav-item ms-3">
                        <a class="nav-link text-white" href="fasilitas.php">Fasilitas</a>
                      </li>
                      <li class="nav-item ms-3">
                        <a class="nav-link text-white" href="pendidikan.php">Pendidikan</a>
                      </li>
                <li class="nav-item ms-3">
                        <a class="nav-link text-white" href="#tentang">Tentang</a>
                      </li>
                      <li class="nav-item ms-3">
                            <a class="nav-link text-white me-2" href="dashboard.php">Masuk</a></a>
                          </li>
                    <li class="nav-item ms-3 me-4">
                        <a class="nav-link text-white me-2" href="index.php">Keluar</a></a>
                        </li>
                  </div>
                </div>
              </nav>

               <!-- banner -->     
        <div class="container-fluid banner">
            <div class="container pt-2 text-life">
                <h2 class="display-2 mb-2 text-white" style="times new roman"><b>Fasiltas Kampus </b></h2>
              <h5 class="fw-normal display-7 text-mb-3 text-white">Berbagai fasilitas yang ada di Universitas Pembangunan Panca Budi </h5>
                <a href="#layanan">
                  <button type="button" class="btn btn-warning btn-lg mt-2">Cek Layanan</button>
                </a>
              </div>
            </div> 

            <div class="container-fluid pt-4 pb-5 bg-light">
                <div class="container text-center text-secondary"><h5 class="display-5" id="fasilitas"><b>Fasilitas</h5></b>
                <div class="row pt-4 gx-4 gy-4">
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-secondary text-white"><i class="fas fa-book fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">PERPUSTAKAAN</h5>
                      <p class="card-text mt-2 mb-4">Perpustakaan UNPAB telah meraih Akreditas A</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-white text-drak"><i class="fas fa-wifi fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">FREE WIFI</h5>
                      <p class="card-text mt-2 mb-4">Fasilitas akses internet tersedia di seluruh area kampus.</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-secondary text-white"></i><i class="fas fa-book-open fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">SISTEM PEMBELAJARAN BERBASIS ONLINE</h5>
                      <p class="card-text mt-2 mb-4">Sistem Pembelajaran Berbasis Online</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-white text-drak"></i><i class="fas fa-home fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">LABORATORIUM YANG LENGKAP</h5>
                      <p class="card-text mt-2 mb-4">Laboratorium Komputer, Laboratorium Elektro, Laboratorium Studi Arsitektur, dll.</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-secondary text-white"></i><i class="fas fa-calendar fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">KANTIN KAMPUS</h5>
                      <p class="card-text mt-2 mb-4">Beranda Cafe, Laziz Centro merupakan fasilitas kantin yang nyaman dan asri.</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-white text-drak"></i><i class="far fa-copy fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">RUANG KELAS</h5>
                      <p class="card-text mt-2 mb-5">Ruang kelas dilengkapi AC dan Proyektor.</p>
                      </div>
                    </div>
                  </div>              
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-secondary text-white"><i class="fas fa-mosque fa-4x mt-4"></i>
                        <h5 class="card-title mt-4">FASILITAS IBADAH</h5>
                      <p class="display-20 mt-2 mb-4"><h15>Masjid Darul Amin dan Musholah Az-Zuhdi merupakan tempat untuk beribadah yang nyaman dan asri untuk Civitas Akademika UNPAB</h15></p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-white text-drak"><i class="fas fa-chart-area fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">PARKIR YANG LUAS</h5>
                      <p class="card-text mt-2 mb-5">Bagi mahasiswa yang membawa kendaraan, terdapat area parkir yang luas.</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-secondary text-white"></i><i class="fas fa-warehouse fa-4x mt-4"></i>
                        <h5 class="card-title mt-4 mb-2">MINI MARKET</h5>
                      <p class="card-text mt-2 mb-5"><h15>PadiMART, merupakan minimarket yang berada ditengah-tengah kampus sebagai fasilitas layanan belanja untuk mahasiswa.</h15></p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-white text-drak"></i><i class="fas fa-home fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">SMOKONG AREA</h5>
                      <p class="card-text mt-2 mb-5">Tidak semua area kampus bebas untuk merokok, maka terdapat beberapa area khusus untuk tempat merokok. Jangan lupa tempatnya ya!!!</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-secondary text-white"></i><i class="fas fa-calendar fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">FASILITAS OLAHRAGA DAN SENI</h5>
                      <p class="card-text mt-2 mb-4">Lapangan Bola, Lapangan Gate Ball, Lapangan Voli, Lapangan Badminton, Ampi Teater, Saung Seni merupakan fasilitas yang di sediakan bagi seluruh civitas akademika dalam berolahraga dan kesenian.</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body bg-white text-drak"></i><i class="far fa-copy fa-4x mt-4"></i>
                        <h5 class="card-title mt-5">ATM CENTER, KANTOR KAS BANK</h5>
                      <p class="card-text mt-2 mb-5">Adanya pusat ATM dan Kantor Kas Bank (BSI dan BRI), merupakan fasilitas yang disetiakan untuk Mahasiswa menabung maupun membayar biaya kuliah.</p>
                      </div>
                    </div>
                  </div>    
                </div>
                </div>
                </div>
                </body>

                <div class="container">
                  <div class="row"> 
                   <div class="col-md-8 mt-5"> 
                  <h1><b>IKUTI MEDIA SOSIAL</b></h1>
                  </div>
                   <div class="col-md-4 text-center mt-5">
                     <div class="social-icon">
                     <ul><i class="fab fa-facebook ms-3"></i>
                       <i class="fab fa-twitter-square ms-3"></i>
                       <i class="fab fa-instagram-square ms-3"></i>
                       <i class="fab fa-youtube-square ms-3"></i>
                     </ul>
                   </div>
                   </div>
                       </div>
                       </div>
                       </div>


                <footer id="contact">
                  <div class="layar-dalam">
                    <div>
                        <h2>LAYANAN DIGITAL</h2>
                        <p>Penerimaan Mahasiswa Baru</p> 
                        <p>Portal Mahasiswa</p>
                        <p>Portal Dosen</p>
                        <p>Portal Alumni</p>
                        <p>E-Learning</p>
                        <p>Repository</p>
                        <p>E-Jurnal</p>
                      </div> 
                   
                    <div>
                      <h2>PENDIDIKAN</h2>
                      <p>Program Pascasarjana</p>
                      <p>Fakultas Agama & Humaniora</p>
                      <p>Fakultas Sosial Sains</p>
                      <p>Fakultas Sains & Teknologi</p>
                      
                    </div>
                    <div>
                      <h2>KONTAK</h2>
                      <P>Jl.Jend.Gatot Subroto KM 4.5 Sei Sikambing. Medan. Indonesia</P>
                      <p>Medan - Sumatra Utara</p>
                      <p>Indonesia</p>
                      <p>Telp. 061 845 5571 </p>
                      <p>Email. Unpab@Pancabudi.Ac.Id</p>
                    </div>
                  </div>
                </footer>
        
              <div class="container-fluid pt-4 pb-2 bg-warning">
                <div class="text-body text-white text-center">
                  <div class="container text-white text-center"><p>Copyright @ 2021 Website by Kelompok 5</p>
                    </div>
                    </div>
                    </div>
              </body>
