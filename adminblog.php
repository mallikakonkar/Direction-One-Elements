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
            padding: 15px 50px 150px 50px;
                ;
        }
    
    </style> <meta charset="utf-8">

     <link rel="stylesheet" type="text/css" href="external.css">
</header>
<body>
    
    <a href="admin.php">     <button class="button4" >Admin Home</button></a>

    
    <form action="" method="post"  enctype="multipart/form-data">
        <h4>Enter the Blog Name:</h4>
        <br><input type="text" name="name" id="name"  /><br />
        <br><br>

        <h4>Enter the Front Page image:</h4>
        <br>
<input name="image" class="button3"id="image" accept="image/JPEG" type="file" ><br /><br />
        
        <br>
   <script>
       var x = 1;
       var y = 90;
      
       var head1;
       var head2;
     </script>
        
        
       <div id="myDIV">
           <h4> Add Content</h4>
        <br>
        </div>

<br>
<button type="button" class="button1" onclick="myFunction()">Add</button>
<button type="button" class="button2" onclick="mydelFunction()">Delete</button>   
        <br>

        
<script>
function myFunction() {
  
  
  var header1 = document.createElement("h4");
  header1.innerHTML = "Enter Image";
  document.getElementById("myDIV").appendChild(header1);
  head1= header1;
    
  document.getElementById("myDIV").appendChild(document.createElement("br"));
  


  var btn = document.createElement("input");
  btn.setAttribute('type','file');
  btn.setAttribute('accept','image/JPEG');
  btn.setAttribute('name',x);
  btn.setAttribute('id',x);

  x=x+1;
  document.getElementById("myDIV").appendChild(btn);

     document.getElementById("myDIV").appendChild(document.createElement("br"));
    
  var header2 = document.createElement("h4");
  header2.innerHTML = "Enter para";
    
    
  document.getElementById("myDIV").appendChild(header2);
  head2=header2;
 document.getElementById("myDIV").appendChild(document.createElement("br"));
  var btn1 = document.createElement("input");
  btn1.setAttribute('type','text');
  btn1.setAttribute('name',y);
  btn1.setAttribute('id',y);
  y=y+1;
  document.getElementById("myDIV").appendChild(btn1);
    document.getElementById("myDIV").appendChild(document.createElement("br"));
    
    
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
        mydel(document.getElementById(y-1));
   
        x=x-1;
        y=y-1;
       
       
       
        head1.parentNode.removeChild(head1);   
        head2.parentNode.removeChild(head2);   
       


     
       
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
    <br>
  <input type="submit" value="submit" name="submit" />      
       
</form>
    
    

    
<?php    
//$(document).ready(function()) {
//    var max_fields = 10;
//    var wrapper = $(".container1");
//    var add_button = $(".add_form_field");
//
//    var x = 1;
//    $(add_button).click(function(e) {
//        e.preventDefault();
//        if (x < max_fields) {
//            x++;
//            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
//        } else {
//            alert('You Reached the limits')
//        }
//    });
//
//    $(wrapper).on("click", ".delete", function(e) {
//        e.preventDefault();
//        $(this).parent('div').remove();
//        x--;
//    })
//});
    ?>                       
                           
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="container1">
    <button class="add_form_field">Add New Field &nbsp; 
      <span style="font-size:16px; font-weight:bold;">+ </span>
    </button>
    <div><input type="text" name="mytext[]"></div>
</div>

-->
    
<?php

  $Id;
if(isset($_POST['submit']))
{
    if(isset($_FILES['image'])) 
    {
            $name=$_POST['name'];
//        $content=$_POST['content'];
            $fp=addslashes(file_get_contents($_FILES['image']['tmp_name']));
     }
                
                $sql4 = "INSERT INTO blog(name,image) VALUES( '{$name}','{$fp}');";
                          
                $result=mysqli_query($conn , $sql4);
    
                $sql5= "Select id from blog where name= '{$name}' and image ='{$fp}';";
                $result2=mysqli_query($conn , $sql5);
                $row = mysqli_fetch_assoc($result2);
                $Id= $row['id'];
    $x1=1;
    $y1=90;
    
     if(isset($_FILES[$x1])){
      
         while(isset($_FILES[$x1])){
        
//               if(isset($_FILES[$x]))
//        {
            $para=$_POST[$y1];
            $fp1=addslashes(file_get_contents($_FILES[$x1]['tmp_name']));
//        }
             $x1++;
             $y1++;
        $sql6 = "INSERT INTO addblog(id,para,image) VALUES( $Id,'{$para}','{$fp1}');";
                          
        $result3=mysqli_query($conn , $sql6);
    
     }
          
}
//     if(isset($_FILES[1])){
//     $para=$_POST[90];
//     $fp1=addslashes(file_get_contents($_FILES[1]['tmp_name']));
//     $sql6 = "INSERT INTO addblog(id,para,image) VALUES( $Id,'1','{$fp1}');";
//     $result3=mysqli_query($conn , $sql6);
//      $para=$_POST[91];
//     $fp1=addslashes(file_get_contents($_FILES[2]['tmp_name']));
//     $sql6 = "INSERT INTO addblog(id,para,image) VALUES( $Id,'2','{$fp1}');";
//     $result3=mysqli_query($conn , $sql6);
//      $para=$_POST[92];
//     $fp1=addslashes(file_get_contents($_FILES[3]['tmp_name']));
//     $sql6 = "INSERT INTO addblog(id,para,image) VALUES( $Id,'3','{$fp1}');";
//     $result3=mysqli_query($conn , $sql6);
//     }
//     
  
     
}

    
?>    
    
   
    
    
    
</body>


</html>