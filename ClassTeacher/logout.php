<?php
session_start(); 
session_destroy(); // destroy session
  echo "<script type = \"text/javascript\">
  window.location = (\"http://localhost/sfhs-sas/login.php\");
  </script>";
  
  ?>

