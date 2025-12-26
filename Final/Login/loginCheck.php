<?php 
    session_start();


    if(isset($_POST['submit']))
    {
           $email = $_POST['email'];
           $password = $_POST['password'];

          
             $emailS = $_SESSION['emailS'];
             $passwordS = $_SESSION['passwordS'];
  
             if($email=="" || $password==""){
              echo "Null submission";
             }
             else{
                if($email == $emailS && $password == $passwordS)
                {
                     $_SESSION['status'] = true;
                     $_SESSION['email'] = $email; 
                     header('location: dashboard.php');
                }
             }
 
    }
    else if(isset($_POST['signup'])){
        header('location: Signup.php');
    }
    else{
        header('location: login.php');
    }
?>