<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT FROM user WHERE username='$username' AND password = md5('$password')";

if(mysqli_num_rows($query) == 1){
    $user = mysqli_query($query);
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['username'] = $username['username'];
    header("location:index.php?login=yes");
}else{
    header("location:login.php?login=no");
}
exit();
?>