<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM data_mhs")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br></br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i?></td>
                <td>
                    <a href="ubah.php?id=<?= $mhs['id']; ?>">ubah</a>
                    <a href="hapus.php?id=<?= $mhs['id']; ?>">hapus</a>
                </td>
                <td>
                    <img src="img/<?= $mhs['gambar']?>" alt="" width="50">
                </td>
                <td><?= $mhs['nama']?></td>
                <td><?= $mhs['nim']?></td>
                <td><?= $mhs['jurusan']?></td>
                <td><?= $mhs['email']?></td>
            </tr>
        <?php endforeach?>
    </table>
</body>
</html>