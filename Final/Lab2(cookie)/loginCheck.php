<?php
 session_start();
 //print_r($_POST);
 //var_dump($_GET);
 //echo 
 //print();

  
  if(isset($_POST['submit'])){          //is submit button clicked?
      
      $username = $_POST['username'];
      $password = $_POST['password'];  
      if($username=="" || $password==""){
          echo "Null submission!";
      }
      else
      {
          if($username==$password)
          {
               setcookie('status','true',time()+3000,'/');
               $_SESSION['username'] = $username; 
               header('location: home.php');   // [ Redirect to home page ]
          }
          else{
              echo "Invalid User";
          }
      }
     }

    else{      //if directly want to access home.php 
      
         header('location: login.php');
    }
              
?> 