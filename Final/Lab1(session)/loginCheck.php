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
               $_SESSION['status'] = true;      //session var(status) is set as true for this user. 
               $_SESSION['username'] = $username;  //The username is saved in the session variable.
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