<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pesan Telur</title>
</head>
<body>
    <h2>Form Pemesanan Telur</h2>
    <form action="proses_pesan.php" method="post">
        <p>Nama Pemesan: <input type="text" name="nama" required></p>
        <p>Pilih Jenis Telur:
            <select name="id_telur" required>
                <?php
                $list = mysqli_query($koneksi, "SELECT * FROM telur");
                while($l = mysqli_fetch_assoc($list)){
                    echo "<option value='$l[id]'>$l[nama_telur] - Rp ".number_format($l['harga'],0,',','.')."/kg</option>";
                }
                ?>
            </select>
        </p>
        <p>Jumlah (kg): <input type="number" name="jumlah" min="1" required></p>
        <button type="submit">Pesan Sekarang</button>
    </form>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>
