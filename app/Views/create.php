<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>

<body>
    <h1>Pendaftaran Peserta</h1>
    <form action="/peserta/store" method="post">
        <!-- Tambahkan input sesuai dengan field yang ada di tabel peserta -->
        <input type="text" name="nik" placeholder="NIK" required>
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
        <input type="date" name="tanggal_lahir" required>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <input type="text" name="telepon" placeholder="Telepon" required>
        <input type="text" name="pendidikan" placeholder="Pendidikan" required>
        <textarea name="alamat" placeholder="Alamat" required></textarea>
        <select name="kab_kota" required>
            <option value="Kabupaten A">Kabupaten A</option>
            <option value="Kabupaten B">Kabupaten B</option>
            <option value="Kota A">Kota A</option>
            <option value="Kota B">Kota B</option>
        </select>
        <input type="text" name="nama_bank" placeholder="Nama Bank" required>
        <input type="text" name="nama_rekening" placeholder="Nama Rekening" required>
        <input type="number" name="no_rekening" placeholder="No Rekening" required>
        <input type="number" name="id_cabang" placeholder="ID Cabang" required>
        <input type="number" name="id_golongan" placeholder="ID Golongan" required>
        <input type="file" name="pass_foto" placeholder="Pass Foto">
        <input type="file" name="lampiran_ktp" placeholder="Lampiran KTP">
        <input type="file" name="lampiran_kk" placeholder="Lampiran KK" required>
        <input type="file" name="lampiran_akta" placeholder="Lampiran Akta">
        <input type="file" name="lampiran_ijasah" placeholder="Lampiran Ijasah">
        <input type="file" name="lampiran_buku_tabungan" placeholder="Lampiran Buku Tabungan">
        <input type="file" name="lampiran_piagam_penghargaan" placeholder="Lampiran Piagam Penghargaan">
        <input type="file" name="berkas_lain" placeholder="Berkas Lain">
        <button type="submit">Daftar</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        <?php if(session()->getFlashdata('success')): ?>
            swal("Success", "<?php echo session()->getFlashdata('success'); ?>", "success");
        <?php endif; ?>
    </script>
</body>
</html>