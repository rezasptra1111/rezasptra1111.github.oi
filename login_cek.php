<?php
session_start();
include 'koneksi.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$data = mysqli_query($koneksi,"select*from tb_user where username='$username' and password='$password'");
$cek=mysqli_num_rows($data);

if($cek>0)
{
  $_SESSION['status']="ok";
  ?>
  <script>
    alert('Data sesuai');
    document.location.href='home.php';
  </script>
  <?php
}
else 
{
  ?>
  <script>
    alert('Data TIDAK sesuai ! , silahkan login lagi');
    document.location.href='login.php';
  </script>
  <?php
}
?>