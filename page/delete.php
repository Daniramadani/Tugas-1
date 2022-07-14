<?php
require_once('function/koneksi.php');

$id = $_GET['id'];
$artikel = mysqli_query($koneksi, "DELETE FROM artikel WHERE id='$id'");
if ($artikel) { ?>
    <script>
        alert('Hapus Data Sukses');
        window.location.href = "<?= BASE_URL . 'dashboard.php?page=home&status=success'?>";
    </script>
<?php
} else {
    echo "Hapus Data Gagal";
}
?>