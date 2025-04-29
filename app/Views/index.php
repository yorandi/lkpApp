<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>

<body>
    <h1>Data Peserta</h1>
    <a href="/peserta/create">Tambah Peserta</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Pendidikan</th>
                <th>Alamat</th>
                <th>Status Peserta</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peserta as $p): ?>
                <tr>
                    <td><?= $p['id']; ?></td>
                    <td><?= $p['nik']; ?></td>
                    <td><?= $p['nama']; ?></td>
                    <td><?= $p['tempat_lahir']; ?></td>
                    <td><?= $p['tanggal_lahir']; ?></td>
                    <td><?= $p['jenis_kelamin']; ?></td>
                    <td><?= $p['telepon']; ?></td>
                    <td><?= $p['pendidikan']; ?></td>
                    <td><?= $p['alamat']; ?></td>
                    <td><?= $p['status_peserta']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        <?php if (session()->getFlashdata('success')): ?>
            swal("Success", "<?php echo session()->getFlashdata('success'); ?>", "success");
        <?php endif; ?>
    </script>
</body>

</html>