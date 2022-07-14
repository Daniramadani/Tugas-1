<?php
require_once('function/helper.php');
require_once('function/koneksi.php');

error_reporting(0);
session_start();
  

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $tambah = $_POST['tambah'];

    if ($tambah){
        $sql = mysqli_query($koneksi, "INSERT INTO users
        VALUES('', '$username', '$password')");
        if($sql){?>
            <script>
                alert('Register Sukses');
                window.location.href = "login.php";
            </script>
    <?php
        }else{
            echo "Register Gagal";
        }
    }

 
?>
 
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinalPrakWeb</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style01.css' ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="topbar">
        <h3 class="text-topbar">BiodaTa'</h3>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,192L60,192C120,192,240,192,360,208C480,224,600,256,720,261.3C840,267,960,245,1080,218.7C1200,192,1320,160,1380,144L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>

    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Form Registrasi</div>
                    <div class="card-body">
                        <form action="" method="POST" class="form-login">
                            <label class="form-label">Username</label>
                            <input class="form-input" type="text"  name="username" value="<?php echo $username; ?>" required>
                            
                            <label class="form-label">Password</label>
                            <input class="form-input" type="password"  name="password" value="<?php echo $_POST['password']; ?>" required>
                            
                            <input type="submit" name="tambah" class="btn btn-login">
                        </form>
                        <p style="text-align: center;">Anda sudah punya akun? <a href="login.php">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>