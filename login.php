<!DOCTYPE HTML>

<?php
include "connection.php";

session_start();

$username='user';
$password='pass';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
  header("Location: admin.php");  
}


if (isset($_POST['username']) && 
    isset($_POST['password'])){
    
    if ($_POST['username'] == $username && $_POST['password'] ==$password)
{ $_SESSION['loggedin']= true;
  header("Location: admin.php");  
}

}

?>
<header>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

    input[type=submit]:hover, {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    
    
    input[type=submit]
    {
     background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;   
    }
    
    
    </style>
</header>
<html>

<body style="padding:150px 300px 150px 300px;"> 
    
     
    
<form method="post" action="login.php" style="padding:50px;">
Username: <br>

<input type="text" name="username"><br/>

Password<br>

<input type="password" name="password"><br/>

<input type="submit" value="Login">

    </form>

</body>
    </html>