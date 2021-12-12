<!doctype html>
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
    <div class="container mt-3">
        <a class="btn btn-primary" href="tambah-dosen.php">Tambah Dosen</a>
        <div class="d-flex justify-content-center">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once "./aksi/dosen/ambil_dosen.php" ?>
                    <?php if ($result->num_rows > 0) : ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="detail-dosen.php?id=<?= $row['id']; ?>">Detail</a>
                                    <a class="btn btn-danger" href="aksi/dosen/delete_dosen.php?id=<?= $row['id']; ?>">Delete</a>
                                    <a class="btn btn-warning" href="update-dosen.php?id=<?= $row['id']; ?>">Update</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>