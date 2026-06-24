CREATE DATABASE IF NOT EXISTS toko_telur;
USE toko_telur;

CREATE TABLE IF NOT EXISTS telur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_telur VARCHAR(100) NOT NULL,
    harga INT NOT NULL,
    stok INT NOT NULL
);

INSERT INTO telur (nama_telur, harga, stok) VALUES
('Telur Ayam Negeri', 28000, 50),
('Telur Ayam Kampung', 45000, 30),
('Telur Bebek', 38000, 20);
