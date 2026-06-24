<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Penjualan Telur</title>
    <style>
        body { font-family: Arial; max-width: 800px; margin: auto; padding: 20px; }
        .menu { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 20px; }
        .card { border: 1px solid #ddd; padding: 15px; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>Selamat Datang di Toko Telur Segar</h1>
    <p>Kami menyediakan berbagai jenis telur berkualitas</p>
    <a href="login.php">Login Admin</a> | <a href="pesan.php">Pesan Sekarang</a>

    <h3>Daftar Jenis Telur</h3>
    <div class="menu">
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM telur");
        while($data = mysqli_fetch_assoc($query)){
        ?>
        <div class="card">
            <h4><?= $data['nama_telur'] ?></h4>
            <p>Harga: Rp <?= number_format($data['harga'],0,',','.') ?> / kg</p>
            <p>Stok: <?= $data['stok'] ?> kg</p>
        </div>
        <?php } ?>
    </div>
</body>
</html>
