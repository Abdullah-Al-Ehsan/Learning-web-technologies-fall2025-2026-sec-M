<?php
   session_start();
   //session_destroy();    //destroy entire session
   unset($_SESSION['satus']);
   header('location : login.php');
?>