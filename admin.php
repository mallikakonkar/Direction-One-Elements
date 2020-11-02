<!DOCTYPE HTML>
<?php
  include "connection.php";  
  session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
    
    header("Location: login.php");
    
}
   
$sql = "SELECT * from reqaquote1";
$result = $conn->query($sql);

#if ($result->num_rows > 0) {
    // output data of each row
   # while($row = $result->fetch_assoc()) {
 #       echo "<br> id: ". $row["lname"]. " - Name: ". $row["fname"]. " " . $row["location"] . "<br>";
#    }
#} else {
#    echo "0 results";
#}



    ?>
<html>
<header>
    
    
    <style>
        
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}


table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
    </header>
<body>
    <h2>Direction One Admin</h2>
    <br>
    <h3>You have logged in </h3>
    <table name = "userDetails">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Service</th>
            <th>Location</th>
            <th>Size</th>
            <th>Budget</th>
            <th>Look</th>
            <th>Special</th>
            <th>Delete</th>
        </tr>
        <?php
        

        
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    
                    echo '<tr>';
                    echo '<td>'. $row['fname'] .'</td>';
                    echo '<td>'. $row['lname'] .'</td>';
                    echo '<td>'. $row['phone'] .'</td>';
                    echo '<td>'. $row['email'] .'</td>';
                    echo '<td>'. $row['service'] .'</td>';
                    echo '<td>'. $row['location'] .'</td>';
                    echo '<td>'. $row['size'] .'</td>';
                    echo '<td>'. $row['budget'] .'</td>';
                    echo '<td>'. $row['look'] .'</td>';
                    echo '<td>'. $row['special'] .'</td>';
                   // echo '<td ><button onclick="myFunction(this)" id="'.$row['serial'].'" > Delete </button></td>';
                //  echo '<td>'.'<input type='checkbox' name='delete[]' value="'.$row['serial'].'" >'.'</td>'; onClick="window.location.reload();"
                    ?>
                    <td><a  href="delete-process.php?serial=<?php echo $row["serial"]; ?>">Delete</a></td>
                    <?php
                    echo '</tr>';
                    
                    
                    
                }
            }
     
                    
        ?>
        
        

        
    </table>
 <br>
        <br>
        <button onclick="document.location='adminblog.php'"> <h2>Add a Blog
        </h2> </button>
        <br>
        <br>

<br /><br />
<!-- this form is user to display all the images-->
<!--



<form action="admin.php" method="post"  enctype="multipart/form-data">
Retrive all the images:
<input type="submit" value="submit" name="retrive" />
</form>
-->



<?php

//if(isset($_POST['retrive']))
//{
//    header("location:admin.php");
//
//}

//to upload
//if(isset($_POST['submit']))
//{
//if(isset($_FILES['image'])) {
//        $name=$_POST['name'];
//        $content=$_POST['content'];
//        $fp=addslashes(file_get_contents($_FILES['image']['tmp_name'])); //will store the image to fp
//        }
//                // our sql query
//                $sql4 = "INSERT INTO blog(name,content,image) VALUES( '{$name}','{$content}','{$fp}');";
//                          
//    $result=mysqli_query($conn , $sql4);

//       if(mysqli_query($conn, $sql4)){
//        echo "Records added successfully.";
//    } else{
//        echo "ERROR: Could not able to execute $sql4. " . mysqli_error($conn);
//    }
//} 
?>



<?php
//SEARCH.PHP PAGE
    //connect to database.db name = images
         

//        $msg="";
//        $sql5="select * from blog";
//        if(mysqli_query($conn , $sql5))
//        {
//            $res=mysqli_query($conn,$sql5);
//            while($row=mysqli_fetch_array($res))
//            {
//                    $id=$row['id'];
//                    $name=$row['name'];
//                    $content=$row['content'];
//                    $image=$row['image'];
//
//                  $msg.= '<a href="search.php?id='.$id.'"><img src="data:image/jpeg;base64,'.base64_encode($row['image']). ' " />   </a>';
//
//            }
//        }
//        else
//            $msg.="Query failed";
?>

<?php
    
$sql10 = "SELECT * from testimonial";
$result10 = $conn->query($sql10);
    
?>
   
    
    <table name = "testimonials">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Status</th>
           
        </tr>
        <?php
        

        
            if(mysqli_num_rows($result10) > 0){

                while ($row = mysqli_fetch_assoc($result10)) {
                    
                    echo '<tr>';
                    echo '<td>'. $row['name'] .'</td>';
                    echo '<td>'. $row['email'] .'</td>';
                    echo '<td>'. $row['message'] .'</td>';
                    echo '<td>'. $row['status'] .'</td>';
                   
                   // echo '<td ><button onclick="myFunction(this)" id="'.$row['serial'].'" > Delete </button></td>';
                //  echo '<td>'.'<input type='checkbox' name='delete[]' value="'.$row['serial'].'" >'.'</td>'; onClick="window.location.reload();"
                    ?>
                   <td><a  href="delete-process-testimonial.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                <td><a  href="accept-process-testimonial.php?id=<?php echo $row["id"]; ?>">Accept</a></td>
                    
                    <?php
                    echo '</tr>';
                    
                    
                    
                }
            }
     
                    
        ?>
        
        

        
    </table>
      
    
    
    
    
    </body>
</html>