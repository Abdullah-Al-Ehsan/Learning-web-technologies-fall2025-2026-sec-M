<?php 
    session_start();

    if(isset($_POST['submit'])){
          
         $email = $_POST['email'];
         $password = $_POST['password'];

         $_SESSION['emailS'] = $email;
         $_SESSION['passwordS'] = $password;

         if($email=="" || $password==""){
           echo "Null submission";
         }
         else{
            header('location: login.php');
         }
    }
    
?>