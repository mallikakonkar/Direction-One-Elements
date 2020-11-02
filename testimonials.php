<!DOCTYPE html>
<?php
include "connection.php";
$sql = "SELECT * from reqaquote1";
$result = $conn->query($sql);


?>
<html lang="en">
  <head>
    <title>Klift - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      
      
      
      <style>
      
      .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
      
          .top1{
              
              
                top 30;
                z-index: 1001
          }
      
              
      
      </style>
      
      
<!--
      <script>
function myFunction() {
  location.replace("thankyou.html")
}
</script>
-->
  </head>
    
    
      
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Klift</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="project.html" class="nav-link">Project</a></li>
<!--	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>-->
                <li class="nav-item"><a href="services.html" class="nav-link">Media Coverage</a></li>
	        	<li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
           
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
<!--  js-fullheight mt-5 mb-3 class="slider-item  " -->
      
    <section class="home-slider  owl-carousel" style="height: 200px;" >
      <div  style="background-image:url(images/bikingredbg.png); height: 200px; ">
      	<div class="overlay"></div>
        <div class="container">
            <br>
            <br>
            <br>
 
            <h1 style="color: white; text-align: center"> Testimonials</h1>
         
            
<!--
          <div class="row slider-text top1 align-items-center">

            <div class="col-md-7 col-sm-12 text-center top1 ftco-animate">
            	<h1 class=" mt-5 mb-3 bread " style="z-index: 100;color: black" >Blog</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            </div>
              
              

          </div>
-->
        </div>
      </div>
    </section>
      
      
      
      
      
      
      
      
      <div class="pt-5 mt-5" style="padding: 150px;">
          
          
              <?php
//      header_remove();
//          var_dump(headers_list());

    $query1="SELECT * FROM testimonial where status=1 order by time desc;";

    $result=mysqli_query($conn , $query1);
    
    
    while($row2 = mysqli_fetch_assoc($result))
    {

      
        ?>
              
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
<!--                    <img src="images/person_1.jpg" alt="Image placeholder">-->
                  </div>
                  <div class="comment-body">
                    <h3><?php echo $row2['name']?></h3>
                    <div class="meta"><?php echo $row2['time']?></div>
                    <p><?php echo $row2['message']?></p>
<!--                    <p><a href="#" class="reply">Reply</a></p>-->
                  </div>
                </li>
          </ul>
          
          
          <?php }
?>          
         
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Give us a Testimonial</h3>
                <form  class="p-5 bg-light" method="post" >
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                    
                   
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                    
                     <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" cols="30" rows="10" class="form-control" name="message"></textarea>
                  </div>

                  
                  <div class="form-group">
                    <input type="submit" value="Post Testimonial" class="btn py-3 px-4 btn-primary" name="submit" id="myBtn">
                  </div>
                    
                    
                    


                </form>
                  
                  <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>
                  
                  
                  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
//btn.onclick = function() {
//  modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}





</script>
                  </div>
            </div>
                  
                  
                   <?php
                  
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) ) {
              
    
	
//    echo print_r($_POST,true);
    
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
	$message = trim($_POST['message']);
   
    $query1="INSERT into testimonial1 (name,email,message)  VALUES
('$name','$email','$message')";

$result=mysqli_query($conn , $query1);

       if(mysqli_query($conn, $query1)){
//        echo "Records added successfully.";
//            header("location: thankyou.html");
    } else{
        echo "ERROR: Could not able to execute $query1. " . mysqli_error($conn);
    }
              
              
               $query2="    INSERT INTO testimonial(name,email,message)
               SELECT DISTINCT name,email,message
    FROM testimonial1;";

$result2=mysqli_query($conn , $query2);
    
     $query3="TRUNCATE TABLE testimonial1";

$result3=mysqli_query($conn , $query3);
              
//              echo "<script>
//         $(window).load(function(){
//             $('#myModal').modal('show');
//         });
//    </script>";
              
//             header_remove();
    
    
//      if ($result3){
//                        echo '<p class="success"> Your registration was successful!</p>';
//						header("location: thankyou.html");
//                    } else {
//                        echo '<p class="success"> Your registration was unsuccessful</p>';
//                    }
              
              
//    
    
 mysqli_close($conn);
 
}
          
          
          ?>
              

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Klift</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#">Architectural Design</a></li>
                <li><a href="#">Interior Design</a></li>
                <li><a href="#">Exterior Design</a></li>
                <li><a href="#">Lighting Design</a></li>
                <li><a href="#">AutoCAD Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>