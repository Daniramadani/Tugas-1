<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$judul = $_POST['judul'];
$isi = $_POST['isi'];

// Pengecekan kelengkapan data
if (empty($judul) || empty($isi)) {
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO artikel(judul, isi) VALUES ('$judul', '$isi')");
    header("location: " . BASE_URL . 'dashboard.php?page=home&process=success');
}
