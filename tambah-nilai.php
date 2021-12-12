<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
    <div class="container">
        <div class="d-flex flex-column justify-content-center mt-3">
            <form action="aksi/nilai/tambah_nilai.php" method="POST">
                <div class="mb-3">
                    <label for="id_mahasiswa" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="id_mahasiswa" placeholder="Enter id_mahasiswa" name="id_mahasiswa">
                </div>
                <div class="mb-3">
                    <label for="nilai_akhir" class="form-label">Nilai Akhir</label>
                    <input type="nilai_akhir" class="form-control" id="nilai_akhir" placeholder="Enter Nilai_akhir" name="nilai_akhir">
                </div>
                
                <button class="btn btn-primary" type="submit">Tambah Data</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>