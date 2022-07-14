<?php 

// unset($_COOKIE['user']);
// echo $_COOKIE['user'];
setcookie("user",'',-1, '/');
header("Location: index.php");

?>