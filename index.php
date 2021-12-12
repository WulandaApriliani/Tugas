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
                      <li class="nav-item me-3">
                        <a class="nav-link" href="#Notifikasi"><i class="fas fa-bell me-2" data-toggle="tooltip" title="Notifikasi"></i></a>
                          </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="layanan.php">Layanan</a>
                      </li>
                      <li class="nav-item ms-3">
                        <a class="nav-link text-white" href="fasilitas.php">Fasilitas</a>
                      </li>
                      <li class="nav-item ms-3">
                        <a class="nav-link text-white" href="pendidikan.php">Pendidikan</a>
                      </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link text-white" href="tentang.php">Tentang</a>
                      </li> 

                      <li class="nav-item ms-3 me-4">
                            <a class="nav-link text-white me-2" href="log_in.php">Masuk</a>
                          </li>
                  </div>
                </div>
              </nav>
        <!-- banner -->      
        <div class="container-fluid banner">
        <div class="container pt-2 text-life">
          <h1 class="display-3 mb-2 text-white" style="times new roman"><b>Membangun Generasi Unggul</b></h1>
        <h6 class="fw-normal text-mb-3 text-white">Kita tidak selalu bisa membangun masa depan untuk generasi muda, tapi kita dapat membangun generasi muda untuk masa depan</h6>
          <a href="#layanan">
            <button type="button" class="btn btn-warning btn-lg mt-2"><h6>CEK LAYANAN</h6></button>
          </a>
        </div>
      </div> 

      <div class="container pt-4 pb-2 mb-4"><h3 class="text-center">Informasi Kampus</h3>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col text-center">
          <div class="card text-center h-100 bg-secondary"><i class="fas fa-university fa-4x mt-4 mb-3 text-white"></i>
            <div class="card-body bg-secondary">
              <h5 class="card-title text-white">Tahun didirikan:<b>1964</b></h5>
            <ul class="list-group list-group-flush bg-secondary">
             <h5><li class="list-group-item bg-secondary text-white">Status: <b>Swasta</b></li></h5>
              <h5><li class="list-group-item bg-secondary text-white">Akreditasi: <b>B</b></li></h5>
              <h5><li class="list-group-item bg-secondary text-white"><b>Selektif</b></li></h5>
            </ul>
            </div>
          </div>
        </div>
        <div class="col text-center text-white">
          <div class="card h-100 bg-success"><i class="fas fa-university fa-4x mt-4 mb-3 text-white bg-success"></i>
            <div class="card-body bg-success">
              <h5 class="card-title text-white"><b>10</b></h5><h6>Fakultas</h6>
            <ul class="list-group list-group-flush bg-success">
              <h5><li class="list-group-item bg-success text-white"><b>15</b><h6>Program Studi</6></li><h5>
                <button type="button" class="btn btn-warning btn-lg mt-2"><h6>Lihat Selengkapnya</h6></button>
            </ul>
            </div>
          </div>
        </div>
        <div class="col text-center text-white bg-warning">
          <div class="card h-100 bg-warning"><i class="fas fa-user-graduate fa-4x mt-4 mb-3 text-white bg-warning"></i>
            <div class="card-body bg-warning">
              <h5 class="card-title text-white"><b>297</b></h5><h6>Dosen</h6>
            <ul class="list-group list-group-flush bg-warning">
              <h5><li class="list-group-item bg-warning text-white"><b>17.661</b></h5><h6>Mahasiswa</h6>
              <h5><li class="list-group-item bg-warning text-white"><b>1:59</b></h5><h6>Rasio Dosen / Mahasiswa</h6>
            </ul>
            </div>
          </div>
        </div>
      </div>
      <!--berita-->
      <div class="container text-center mt-4 mb-4"><h3>Berita Unpab</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col mt-5">
            <div class="card h-80">
              <img src="http://www.pancabudi.ac.id/unpab/image/news/mahasiswa-unpab-kembali-ukir-prestasi-_8.jpg">
              <div class="card-body">
                <h4 class="card-title">MAHASISWA UNPAB KEMBALI UKIR PRESTASI</h4>
                <p class="fw-lighter">Kepada Mahasiswa UNPAB Atas Prestasi nya Mewakili Sumatera Utara (Universitas Pembangunan Panca Budi) Dalam Rangka Mengikuti Program Pertukaran Pemuda dan Mahasiswa Internasional  di Uni Emirat Arab 



                Atas nama Muhammad Wahyu Hidayah (Program Studi Ilmu Hukum). Tentunya ini capaian yang sangat luar biasa!!!</p>
              </div>
              <a href="#layanan">
                <button type="button" class="btn btn-secondary btn-lg mt-3">Baca Selengkapnya</button>
              </a>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card h-80">
              <img src="http://www.pancabudi.ac.id/unpab/image/info/2-mahasiswi-unpab-raih-prestasi-tingkat-nasional_668814.jpeg">
              <div class="card-body">
                <h4 class="card-title">2 MAHASISWI UNPAB RAIH PRESTASI TINGKAT NASIONAL</h4>
                <p class="fw-lighter">Kembali MAHASISWI UNPAB Ukir Prestasi di Tingkat Nasional. Kali ini dari Cabang Perlombaan "Alat Permainan Edukatif" atas Nama Sri Pradiningrum dan Laila Sabrina dari Prodi Pendidikan Islam Anak Usia Dini (PIAUD).. Pencapaian yang sangat luar biasa, Tentunya ini menjadi kebanggaan untuk Kedua orang tua dan UNPAB sendiri pastinya..

                  Terus raih prestasi dimasa muda mu yaa Sobat UNPAB!!!</p>
              </div>
              <a href="#layanan">
                <button type="button" class="btn btn-secondary btn-lg mt-3">Baca Selengkapnya</button>
              </a>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card h-80">
              <img src="http://www.pancabudi.ac.id/unpab/image/info/mahasiswa-unpab-berprestasi-pada-pon-papua-xx-2021_349448.jpeg">
              <div class="card-body">
                <h4 class="card-title">Mahasiswa UNPAB BERPRESTASI Pada PON PAPUA XX 2021</h4>
                <p class="fw-lighter">Selamat kepada Mahasiswa UNPAB Atas Nama Dimas Setiya Darma Prodi Manajemen atas prestasinya Meraih Medali Perunggu pada PON Papua XX 2021 Cabang Olahraga Angkat Besi.

 

                Sekali lagi Selamat Untuk Dimas dan Kontingen SUMUT lainnya atas prestasi yang sangat membanggakan!!</p>
              </div>
              <a href="#layanan">
                <button type="button" class="btn btn-secondary btn-lg mt-3">Baca Selengkapnya</button>
              </a>
            </div>
          </div>
        </div>
        </div>

        <!--berita slide dua-->

        <div class="container text-center mt-4 mb-4">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col mt-5">
              <div class="card h-80">
                <img src="http://www.pancabudi.ac.id/unpab/image/info/raih-prestasi-di-masa-muda-_236716.jpeg">
                <div class="card-body">
                  <h4 class="card-title">Raih Prestasi di Masa Muda</h4>
                  <p class="fw-lighter">Selamat Kepada Mahasiswa/i UNPAB yang telah berhasil maraih Medali Perunggu dalam event Lomba Karya Tulis Nasional di Diponegoro Science Competition 2021.

                    Sekali lagi selamat yaaa untuk Mei Rayani Rumapea (Manajemen), Tiara Febrina (Manajemen) dan Thoriq Arya Yudha (Argoteknologi), jangan pernah puas atas pencapaian saat ini yaa,, kita tunggu prestasi selanjutnya.</p>
                </div>
                <a href="#layanan">
                  <button type="button" class="btn btn-secondary btn-lg mt-3">Baca Selengkapnya</button>
                </a>
              </div>
            </div>
            <div class="col mt-5">
              <div class="card h-80">
                <img src="http://www.pancabudi.ac.id/unpab/image/info/penerimaan-mahasiswa-baru-diperpanjang_650123.jpeg">
                <div class="card-body">
                  <h4 class="card-title">Penerimaan Mahasiswa Baru Diperpanjang</h4>
                  <p class="fw-lighter">Halo #SobatUnpab Penerimaan Mahasiswa Baru Universitas Pembangunan Panca Budi Tahun Ajaran 2021/2022 di Perpanjang sampai 2 Oktober 2021.

                    Ayo tunggu apalagi? masih ada kesempatan..
                    
                    Daftar sekarang juga di : http://pmb.pancabudi.ac.id</p>
                </div>
                <a href="#layanan">
                  <button type="button" class="btn btn-secondary btn-lg mt-3">Baca Selengkapnya</button>
                </a>
              </div>
            </div>
            <div class="col mt-5">
              <div class="card h-80">
                <img src="https://cdn-asset.jawapos.com/wp-content/uploads/2021/09/Erick-dan-Arsjad.jpg">
                <div class="card-body">
                  <h4 class="card-title">Erick dan Arsjad Tinjau Vaksinasi di Kampus Unpab Medan</h4>
                  <p class="fw-lighter">Menteri BUMN Erick Thohir bersama Ketua Umum Kamar Dagang Industri (Ketum Kadin) Indonesia Arsjad Rasjid dan Wali Kota Medan Bobby Nasution meninjau pelaksanaan vaksinasi massal di Kampus Univeristas Panca Budi (Unpab) Medan
  
   
                    “Kegiatan vaksinasi ini adalah wujud nyata gotong-royong Kadin Indonesia membantu pemerintah dalam perang menghadapi pandemi Covid-19. Karena itu, salah satu ‘senjata’ melawan pandemi adalah vaksin” ungkapnya.</p>
                </div>
                <a href="#layanan">
                  <button type="button" class="btn btn-secondary btn-lg mt-3">Baca Selengkapnya</button>
                </a>
              </div>
            </div>
          </div>
          </div>

       <section>
         <div class="alert-secondary pt-3 pb-5 text-center"><h2>Galeri Foto</h2>
       <section id="gallery">
         <div><img src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/unpab.jpg"></div> 
         <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPNt5SmpWCOo4sxHQwJWXtaQ__-DX7JHRsAQ&usqp=CAU"></div> 
         <div><img src="https://www.jurnalasia.com/wp-content/uploads/2016/11/KAKIDIABADIKAN-1-1024x638.jpg"></div> 
         <div><img src="https://pkkunpab.com/thumbnails/79416921.jpg"></div> 
         <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXDTfrPhDX4pUlxDbDMEWbT8TSmCMKeASDkA&usqp=CAU"></div> 
         <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAOtwYMFq7WeTh6_x5ynbnvg2HyeWCREQl3Q&usqp=CAU"></div> 
         <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWooqWUkBSwxSwmVZkgN53kynWqDteNjun7Q&usqp=CAU"></div> 
         <div><img src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/unpab.jpg"></div>
        </div> 
        </section>

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
      </body>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="admin.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</php>