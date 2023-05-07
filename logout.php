<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
    <script>
      alert('Terimaksih telah berkunjung');
      document.location.href='login.php';
    </script>
  </body>
</html>