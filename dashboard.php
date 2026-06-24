<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
</head>
<body>
    <h2>Kelola Data Telur</h2>
    <a href="admintelur/tambah.php">+ Tambah Jenis Telur</a>
    <a href="logout.php" style="margin-left:20px;">Keluar</a>

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top:20px; width:100%;">
        <tr>
            <th>No</th>
            <th>Nama Telur</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM telur");
        while($t = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $t['nama_telur'] ?></td>
            <td>Rp <?= number_format($t['harga'],0,',','.') ?></td>
            <td><?= $t['stok'] ?> kg</td>
            <td>
                <a href="admintelur/edit.php?id=<?= $t['id'] ?>">Edit</a> |
                <a href="admintelur/hapus.php?id=<?= $t['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
