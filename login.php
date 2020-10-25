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
<html>

<body> 
<form method="post" action="login.php">
Username: <br>

<input type="text" name="username"><br/>

Password<br>

<input type="password" name="password"><br/>

<input type="submit" value="Login!">

    </form>

</body>
    </html>