<?php
session_start();
if (I isset($_SESSION['status']))
{
  ?>
  <script>
  alert('warning!,Anda Harus Login Dulu');
  window.location.href="login.php";
  </script>
  <?php
}
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <h2>weocome</h2>
    <h2>INI HALAMAN REZASAPUTRA</h2>
    <p><a href="logout.php">LOGOUT</a></p>
  </body>
  </html>
