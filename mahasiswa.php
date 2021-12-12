<!doctype php>
<php lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>UNIVERSITAS PEMBANGUNAN PANCA BUDI</b></a>

        <a href="index.php" class="btn btn-secondary">Keluar</a>

        <form class="d-flex ml-auto">
          <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <div class="icon ml - 4">
          <h5>
            <i class="fas fa-envelope ms-2" data-toggle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell ms-2" data-toggle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt ms-2 me-2" data-toggle="tooltip" title="Sign Out"></i>
          </h5>
        </div>
      </div>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-columns"></i> Dashboard</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="mahasiswa.php"><i class="fas fa-user-graduate"></i> Daftar Mahasiswa</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit"></i> Daftar Pegawai</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="jadwal.php"><i class="fas fa-calendar-alt"></i> Jadwal Kuliah</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane"></i> Nilai Mahasiswa</a>
            <hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-5">
        <h3><i class="fas fa-chalkboard-teacher"></i> DAFTAR MAHASISWA</h3>
        <hr>

        <a href="tambah-mahasiswa.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA MAHASISWA</a>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA MAHASISWA</th>
              <th scope="col">EMAIL</th>
              <th scope="col">ALAMAT</th>
              <th scope="col">JURUSAN</th>
              <th scope="col">NPM</th>
              <th scope="col">JENIS KELAMIN</th>
              <th scope="col">NOMOR HANDPHONE</th>
              <th colspan="3" scope="col">AKSI</th>
            </tr>
          </thead>
          <tbody>
            <?php include_once "./aksi/mahasiswa/ambil_mahasiswa.php" ?>
            <?php if ($result->num_rows > 0) : ?>
              <?php while ($row = $result->fetch_assoc()) : ?>
 
                <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['nama_lengkap']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['jurusan']; ?></td>
                <td><?= $row['npm']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['no_hp']; ?></td>
                  <td><a href="" class="btn btn-primary">Detail</a></td>
                  <td><a href="update-mahasiswa.php?id=<?=$row['id']?>"><i class="fas fa-edit  pt-2 " data-toggle="tooltip" title="Edit"></i></a></td>
                  <td><a href="aksi/mahasiswa/delete_mahasiswa.php?id=<?=$row['id']?>"><i class="fas fa-trash-alt pt-2 " data-toggle="tooltip" title="Delete"></i></a></td>
                </tr>
              <?php endwhile; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
                  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                  -->
    <script type="text/javascript" src="admin.js"></script>
  </body>
</php>