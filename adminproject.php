<!DOCTYPE HTML>
<?php
  include "connection.php";  
  session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
    
    header("Location: login.php");
    
    
}

$Id;

?>

<html>
<header>
    <style>
        body{
            text-align: center;
            font-family: sans-serif;
            font-size: 20px;
                padding: 15px 60px 15px 60px;
        }
    
    </style>
         <link rel="stylesheet" type="text/css" href="external.css">

</header>
<body>
    <a href="admin.php">     <button class="button4" >Admin Home</button></a>
    <br>
   <br>
    <br>
    
    <form action="" method="post"  enctype="multipart/form-data">
Enter the Project Name:<br><input type="textarea" name="name" id="name"  /><br />
        <br><br>
Enter the Project Information:<br><input type="textarea" name="info" id="name"  /><br />
        <br><br>
Enter the Front Page image:
        <br>
<input name="image" id="image" accept="image/JPEG" type="file" ><br /><br />
        
        <br>
   <script>
       var x = 1;
     
      
       var head1;
      
     </script>
        
        
       <div id="myDIV">
           Add Picture
           <br>
           <br>
        </div>
<br>

<button type="button" class="button1" onclick="myFunction()">Add Picture</button>
<button type="button" class="button2" onclick="mydelFunction()">Delete</button>       

        
<script>
function myFunction() {
  
  
//  var header1 = document.createElement("h4");
//  header1.innerHTML = "Enter Image";
//  document.getElementById("myDIV").appendChild(header1);
//  head1= header1;
    
//      document.getElementById("myDIV").appendChild(document.createElement("br"));


  var btn = document.createElement("input");
  btn.setAttribute('type','file');
  btn.setAttribute('accept','image/JPEG');
  btn.setAttribute('name',x);
  btn.setAttribute('id',x);
  x=x+1;
  document.getElementById("myDIV").appendChild(btn);
//      document.getElementById("myDIV").appendChild(document.createElement("br"));



    
    
//  var del = document.createElement("button");
//  del.setAttribute('type','button');
//  del.setAttribute('name',z);
//  del.setAttribute('id',z);
//  z=z+1;
//  del.onclick = function() { mydelFunction(this, header1,header2,btn,btn1) };
//  del.innerHTML = "Delete";
//  document.getElementById("myDIV").appendChild(del);
   
     
}
    
   
   function mydelFunction(){
       
//       
//       
//       document.getElementById(x).id='a';
//       document.getElementById(x).name='a';
//       document.getElementById(y).id='b';
//       document.getElementById(y).name='b';
       
     
   
       
        mydel(document.getElementById(x-1));

   
        x=x-1;
      
       
       
       
//        head1.parentNode.removeChild(head1);   
      
     
       
   }
    
    
     function mydel(ele){
     var elementId = ele.id;
       var element = document.getElementById(elementId);
       element.parentNode.removeChild(element);   
     }

</script>

<!--
Enter the image:
        <br>
<input name="image1" id="image1" accept="image/JPEG" type="file"><br /><br />
        <br>   
Enter the para:<br><input type="text" name="para" id="" /><br />
        <br><br>   
-->
   
<!--
<input type="submit" value="submit" name="submit" />
        

<p>Click the button to display the time.</p>

<button onclick="getElementById('demo').innerHTML=" type="button">What is the time?</button>

<p id="demo"> </p>

-->
    
  <input type="submit" value="submit" name="submit" />      
       
</form>
    
    

    
                  

    
<?php

  $Id;
if(isset($_POST['submit']))
{
    if(isset($_FILES['image'])) 
    {
            $name=$_POST['name'];
            $name = mysqli_real_escape_string($conn,$name);
            $info=$_POST['info'];
            $fp=addslashes(file_get_contents($_FILES['image']['tmp_name']));
     }
                
                $sql4 = "INSERT INTO project(name,info,image) VALUES ( '{$name}','{$info}','{$fp}');";
                          
                $result=mysqli_query($conn , $sql4);
    
                $sql5= "Select id from project where name= '{$name}'and image ='{$fp}';";
                $result2=mysqli_query($conn , $sql5) or die( mysqli_error($conn));;
                
                $row = mysqli_fetch_assoc($result2);
                $Id= $row['id'];
    $x1=1;
    
     if(isset($_FILES[$x1])){
      
         while(isset($_FILES[$x1])){
        
//               if(isset($_FILES[$x]))
//        {
          
            $fp1=addslashes(file_get_contents($_FILES[$x1]['tmp_name']));
//        }
             $x1++;
            
        $sql6 = "INSERT INTO addproject(id,image) VALUES( $Id,'{$fp1}');";
                          
        $result3=mysqli_query($conn , $sql6);
    
     }
          
}

  
     
}

    
?>    
    
   
    
    
    
</body>


</html>

