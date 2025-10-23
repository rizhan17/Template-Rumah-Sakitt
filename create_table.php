<?php
include "koneksi.php";

$sql = "CREATE TABLE dokter (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    spesialis VARCHAR(100),
    foto VARCHAR(255)
)";

if (mysqli_query($koneksi, $sql)) {
    echo "Tabel 'dokter' berhasil dibuat 🎉";
} else {
    echo "Gagal buat tabel: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>