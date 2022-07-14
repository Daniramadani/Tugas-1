<?php
require_once('function/helper.php');
require_once('function/koneksi.php');
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM artikel");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BiodataTa'</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
   
  <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">MyArtikel</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br>
<br>
<br>
    <div
    <div class="body">
      <center>
        <div class="continer">
          <div class="area-artikel">
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $m) : ?>
              <div class="artikel">
                <div class="head-artikel">
                  <div class="left-side">
                    <div class="nama-brand">
                      <h2>Artikel</h2>
                    </div>
                  </div>
                </div>
                <div class="body-artikel">
                  <p><?= $m["judul"]; ?></p>
                </div>
                <div class="body-artikel">
                  <p><?= $m["isi"]; ?></p>
                </div>
              </div>
              <?php $i++; ?>
              <?php endforeach; ?> 
            </div>
          </div>
          <div class="info">
            <div onclick="change_class3(this,'info-me','info-me2')" class="info-me">
            <p>BIODATA</p>
            <table>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>Taqbir Hasan Ramadani</td>
              </tr>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td>60200120074</td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>Mahasiswa</td>
              </tr>
            </table>
          </div>

  </body>
</html>