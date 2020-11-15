<?php
  include "connection.php";  
  session_start();
$_SESSION['loggedin'] = false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
    
    header("Location: login.php");
    
    
}


    