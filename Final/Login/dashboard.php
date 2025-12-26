<?php
   session_start();

   if(isset($_SESSION['status']) != true){
       header('location: login.php');
   }
?>

<html>
<head>
    <title>Dahsboard</title>
</head>
 <body>
    <h1>Welcome! <?php echo $_SESSION['email']?> <h1>
    <a href="logout.php">Logout</a>
</body>
</html>
