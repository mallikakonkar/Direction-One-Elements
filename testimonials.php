<!DOCTYPE html>
<?php
include "connection.php";
$sql = "SELECT * from reqaquote1";
$result = $conn->query($sql);


?>
<html lang="en">
  <head>
    <title>Direction One Elements</title>
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
      
      

  </head>
    
    
      
  <body>
    
	 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Direction One Elements</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="project.php" class="nav-link">Projects</a></li>
	        	<li class="nav-item active"><a href="testimonials.php" class="nav-link">Testimonials</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Blogs</a></li>
                <li class="nav-item"><a href="reqaquote.php" class="nav-link">Request a Quote</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Media Coverage</a></li>
	          <li class="nav-item"><a href="contactus.html" class="nav-link">Contact Us</a></li>
            
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
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

    } else{
        echo "ERROR: Could not able to execute $query1. " . mysqli_error($conn);
    }
              
              
               $query2="    INSERT INTO testimonial(name,email,message)
               SELECT DISTINCT name,email,message
    FROM testimonial1;";

$result2=mysqli_query($conn , $query2);
    
     $query3="TRUNCATE TABLE testimonial1";

$result3=mysqli_query($conn , $query3);

              

    
 mysqli_close($conn);
 
}
          
          
          ?>
              

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Direction One Elements</h2>
              <p>Feel free to contact us<br> <br>Check our social media pages</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://www.linkedin.com/in/rupali-inamdar-aa965499/"><span class="icon-linkedin"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/directiononeelements/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/directiononeelements_/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
<!--                <li><a href="#">About</a></li>-->
                <li><a href="project.php">Projects</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="blog.php">Blogs</a></li>
                  <li><a href="reqaquote.php">Request a Quote</a></li>
                  <li><a href="services.html">Media Coverage</a></li>
                  <li><a href="contactus.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                
                <li><a href="#">Residential Interiors </a></li>
                <li><a href="#">Office Interiors</a></li>
                  <li><a href="#">Architectural Design</a></li>
                
                
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
                      <li><a href="https://www.google.com/maps/place/Parimal+Heights/@19.1156258,72.8343243,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c96926df69fb:0x6e25e8606021faa2!8m2!3d19.1156258!4d72.836513"><span class="icon icon-map-marker"></span><span class="text">201,Parimal Heights, Gulmohar Road,Off Juhu Lane,Andheri West, Mumbai</span></a></li>
	                <li><a href="tel://+919819803710"><span class="icon icon-phone"></span><span class="text">+91 9819803710</span></a></li>
	                <li><a href="mailto:rupaliinamdar@gmail.com"><span class="icon icon-envelope"></span><span class="text">rupaliinamdar@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p style="visibility: hidden"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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