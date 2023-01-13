<?php
   session_start();
   session_destroy();
   echo "<head>";
   echo "<meta http-equiv='refresh' content='1.5; url=login.php'>";
   echo "<link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>";
   echo "</head>";
   echo "<body class='h-100 bg-dark d-flex align-items-center'>";
   echo "<p class='text-warning display-1 m-auto' align='center'>🔐<br><br>Anda telah logout!</p>";
   echo "</body>";
?>