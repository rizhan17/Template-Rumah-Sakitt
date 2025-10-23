<?php
$koneksi = mysqli_connect("localhost", "root", "", "template_rs");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>