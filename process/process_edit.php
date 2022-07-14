<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$id = $_POST['id'];

if (empty($judul) || empty($isi)) {
    header("location: " . BASE_URL . 'dashboard.php?page=edit&id=' . $id . '&emptyform=false');
} else {
    mysqli_query($koneksi, "UPDATE artikel SET judul='$judul', isi = '$isi'");
    header("location: " . BASE_URL . 'dashboard.php?page=home&status=success');
}
