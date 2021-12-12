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
            <form action="aksi/jadwal/tambah_jadwal.php" method="POST">
                <div class="mb-3">
                    <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                    <input type="text" class="form-control" id="mata_kuliah" placeholder="Enter Mata_kuliah" name="mata_kuliah">
                </div>
                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <input type="sks" class="form-control" id="sks" placeholder="Enter sks" name="sks">
                </div>
                <select class="form-select mb-3" aria-label="Default select example">
                    <?php include_once "./aksi/dosen/ambil_dosen.php" ?>
                    <?php if ($result->num_rows > 0) : ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <option value="<?= $row['id']; ?>"><?= $row['nama']; ?></option>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </select>
                <div class="mb-3">
                    <label for="ruang" class="form-label">Ruang</label>
                    <textarea class="form-control" id="ruang" rows="3" placeholder="Enter Ruang" name="ruang"></textarea>
                </div>
                <div class="mb-3">
                    <label for="hari" class="form-label">Hari</label>
                    <textarea class="form-control" id="hari" rows="3" placeholder="Enter hari" name="hari"></textarea>
                </div>
                <div class="mb-3">
                    <label for="waktu" class="form-label">Waktu</label>
                    <textarea class="form-control" id="waktu" rows="3" placeholder="Enter Waktu" name="waktu"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Tambah Data</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>