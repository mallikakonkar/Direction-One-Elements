<!DOCTYPE HTML>
<?php
include "connection.php";  
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
    
    header("Location: login.php");
    
}
   
$sql = "SELECT * from reqaquote1";
$result = $conn->query($sql);
?>
<html>
<header>
    
    
    <style>
        
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
    z-index: 100;
}


table {
  border-collapse: collapse;
  width: 100%;
     z-index: 100;
}

th, td {
  text-align: left;
  padding: 8px;
     z-index: 100;
}

tr:nth-child(even) {background-color: #f2f2f2;
         z-index: 100;
        }
</style>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </header>
<body>
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Direction One Elements</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="#quoterequests">Quote requests</a></li>
      <li><a href="adminblog.php">Add a Blog</a></li>
      <li><a href="adminproject.php">Add a Project</a></li>
      <li><a href="#testimonials">Testimonials</a></li>
        
    </ul>
  </div>
</nav>
    
   <h2>Direction One Admin</h2>

    <h3>You have logged in </h3>
    <a name="quoterequests"></a>
    <br>
    <h2>Quote Requests</h2>
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
                    echo '<td>';
                    echo '<a href="delete-process.php?id='.($row['serial'] ).'" >';
                    echo'Delete';
	    			echo'</a>';
                    echo '</td>';
                    echo '</tr>';
                    
                    
                    
                }
            }
     ?>
</table>
 
<!--
        <button onclick="document.location='adminblog.php'"> <h2>Add a Blog
        </h2> </button>
-->
        


    

<?php
    
$sql10 = "SELECT * from testimonial";
$result10 = $conn->query($sql10);
    
?>
   
    
    <a name="testimonials"></a>
    <h2>Testimonials</h2>
    <table name = "testimonials">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Accept</th>
            
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
                    echo '<td>';
                    echo '<a href="delete-process-testimonial.php?id='.($row['id'] ).'" >';
                    echo'Delete';
	    			echo'</a>';
                    echo '</td>';
                     echo '<td>';
                    echo '<a href="accept-process-testimonial.php?id='.($row['id'] ).'" >';
                    echo'Accept';
	    			echo'</a>';
                    echo '</td>';
                    echo '</tr>';
                    
                    
                    
                    
                }
            }
        ?>
        
</table>
      
    
    
    
    
    </body>
</html>