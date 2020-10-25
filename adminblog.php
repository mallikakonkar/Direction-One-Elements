<!DOCTYPE HTML>
<?php
  include "connection.php";  
  session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
    
    header("Location: login.php");
    
}
   ?>

<html>
<header>
</header>
<body>
    <form action="" method="post"  enctype="multipart/form-data">
Enter the Blog Name:<input type="text" name="name" id="" /><br />
Enter the Blog:<input type="text" name="content" id="" /><br />
<input name="image" id="image" accept="image/JPEG" type="file"><br /><br />
<input type="submit" value="submit" name="submit" />
</form>
    
<?php



if(isset($_POST['submit']))
{
if(isset($_FILES['image'])) {
        $name=$_POST['name'];
        $content=$_POST['content'];
        $fp=addslashes(file_get_contents($_FILES['image']['tmp_name']));
        }
                
                $sql4 = "INSERT INTO blog(name,content,image) VALUES( '{$name}','{$content}','{$fp}');";
                          
    $result=mysqli_query($conn , $sql4);


} 
?>    
    
    
</body>


</html>

