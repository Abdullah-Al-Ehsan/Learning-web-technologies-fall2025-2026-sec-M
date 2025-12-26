<?php
  
      if(isset($_COOKIE['status']) != true)
      {
           header('location: login.php');
      }
?>

<html>
    <head><title>Home</title></head>
<body>
    <h1>
        Welcome home Mr. <?php echo $_SESSION['username']; ?>
    </h1>

    <a href="logout.php">logout</a>
</body>
</html>

