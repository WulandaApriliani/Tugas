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
            <?php include_once "aksi/jadwal/cari_jadwal.php" ?>
            <?php if ($result->num_rows == 1) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <form action="aksi/jadwal/update_jadwal.php?id=<?= $row['id']; ?>" method="POST">
                        <div class="mb-3">
                            <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                            <input type="text" class="form-control" id="mata_kuliah" placeholder="Enter Mata_kuliah" name="mata_kuliah" value="<?= $row['mata_kuliah']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="sks" class="form-label">SKS</label>
                            <input type="sks" class="form-control" id="sks" placeholder="Enter Sks" name="sks" value="<?= $row['sks']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="id_dosen" class="form-label">Dosen</label>
                            <textarea class="form-control" id="id_dosen" rows="3" placeholder="Enter Id_dosen" name="id_dosen"><?= $row['id_dosen']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="ruang" class="form-label">Ruang</label>
                            <textarea class="form-control" id="ruang" rows="3" placeholder="Enter Ruang" name="ruang"><?= $row['ruang']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari</label>
                            <textarea class="form-control" id="hari" rows="3" placeholder="Enter Hari" name="hari"><?= $row['hari']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu</label>
                            <textarea class="form-control" id="waktu" rows="3" placeholder="Enter Waktu" name="waktu"><?= $row['waktu']; ?></textarea>
                        </div>
                       
                        <button class="btn btn-primary" type="submit">Update Data</button>
                    </form>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>