<?php
include 'config.php';
if (isset($_POST['login'])) {
  $username   = trim($_POST['username']);
  $pass       = trim($_POST['password']);

  include 'config.php';

  $user = mysqli_query($connect,"select * from users where username='$username' and password='$pass'");
  $cek = mysqli_num_rows($user);
  if($cek>0){
      $_SESSION['username'] = $username;
      $_SESSION['status'] = "login";
      header("location:dataPegawai.php");
  }else{
      header("location:index.php?pesan=gagal");
  }
}
?>
