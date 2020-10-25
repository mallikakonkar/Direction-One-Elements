<?php
include "connection.php";
//include "session.php";
$error = '';
// && isset($_POST['submit'])
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) ) {
    echo "hi";
	//$serial
    echo print_r($_POST,true);
    
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
	$phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
	$service = trim($_POST['service']);
	$location = trim($_POST['location']);
	$size = trim($_POST['size']);
	$budget = trim($_POST['budget']);
	$look = trim($_POST['look']);
	$special = trim($_POST['special']);
	//$picture =  $_FILES['picture']['tmp_name'];
  //  $picture = file_get_contents($picture);
//	$picture=NULL;
//  	// Get image name
//  	$image = $_FILES['image']['name'];
//  	// Get text
//  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
//
//  	// image file directory
//  	$target = "images/".basename($image);


  


	$query1="INSERT into reqaquote (fname,lname,phone,email,service,location,size,budget,look,special)  VALUES
('$fname','$lname','$phone','$email','$service','$location','$size','$budget','$look','$special')";

$result=mysqli_query($conn , $query1);

       if(mysqli_query($conn, $query1)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $query1. " . mysqli_error($conn);
    }
    
    $query2="    INSERT INTO reqaquote1(fname,lname,phone,email,service,location,size,budget,look,special)
    SELECT DISTINCT fname,lname,phone,email,service,location,size,budget,look,special
    FROM reqaquote;";

$result2=mysqli_query($conn , $query2);
    
     $query3="TRUNCATE TABLE reqaquote";

$result3=mysqli_query($conn , $query3);
    
    
      if ($result){
                        echo '<p class="success"> Your registration was successful!</p>';
						header("location: thankyou.html");
                    } else {
                        echo '<p class="success"> Your registration was unsuccessful</p>';
                    }
    
    
    mysqli_close($conn);
 
}
?>

<!DOCTYPE html>
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
      input[type=submit] {
  background-color: #77212E;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}
      
      
          .top1{
              
              
                top 30;
                z-index: 1001
          }
      
      
      
      </style>
      
      
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
      
      

      
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
	        	<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="project.html" class="nav-link">Projects</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                <li class="nav-item "><a href="blog.html" class="nav-link">Blog</a></li>
	        	<li class="nav-item active"><a href="blog.html" class="nav-link">Request a Quote</a></li>
                <li class="nav-item"><a href="media.html" class="nav-link">Media Coverage</a></li>
                <li class="nav-item"><a href="contactus.html" class="nav-link">Contact Us</a></li>
           
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
            
            <h1 style="color: white; text-align:match-parent;"> Request A Quote</h1>
            
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
      
      


      
      
      
      
      
      

      
      
      <form action="" method="POST" >           
            
  <div class="form-group" style="padding: 0 40px;">
      <br>
      <h3 style="font-size:2.5vw; text-align: center;">Kindly fill the details and we'll get back to you</h3>
<p style="font-size:1vw;text-align: center;">Knowing your requirements helps us understand what it is you are looking for and hence we can give you the perfect design!</p>
      <br>
<!--
       <div class="form-group">
    <label for="exampleFormControlTextarea1">Your name</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
-->
      
  <div class="row">
    <div class="col">
      <input type="text" name="fname" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" name="lname" class="form-control" placeholder="Last name">
    </div>
  </div>
<br>
        <div class="row">
    <div class="col">
      <input type="text" name="phone" class="form-control" placeholder="Phone Number">
    </div>
    <div class="col">
      <input type="text" name="email" class="form-control" placeholder="Email Id">
    </div>
  </div>
      
<!--
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
-->

      <br>
       <div class="form-group">
    <label for="exampleFormControlTextarea1">The Service you're looking for</label>
    <textarea class="form-control" name="service" id="exampleFormControlTextarea1" rows="1.5" placeholder="Residential Interior/Office Interior/Architectural Design"></textarea>
  </div>

      <br>
<!--
  <div class="form-group">
    <label for="exampleFormControlSelect2">The Service you're looking for</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>Residential Interior</option>
      <option>Office Interior</option>
      <option>Architectural Desigh</option>
    </select>
  </div>
-->
<!--
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="option1" name="option">
  <label class="form-check-label" for="inlineCheckbox1">Residential Interior</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox"  value="option2" name="option">
  <label class="form-check-label" for="inlineCheckbox2">Office Interior</label>
</div>
                    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="option3" name="option">
  <label class="form-check-label" for="inlineCheckbox2">Architectural Design</label>
</div>  
-->
<!--
                    <br><br>
                    
-->
 
      
<!--
   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
      </div>
      
      <br> <br> 
      
<div class="btn-group">
  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    Menu
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="#">Choice1</a></li>
    <li><a href="#">Choice2</a></li>
    <li><a href="#">Choice3</a></li>
    <li class="divider"></li>
    <li><a href="#">Choice..</a></li>
  </ul>
</div>

 <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
      
-->
      
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Location of Property</label>
    <textarea class="form-control" name="location" id="exampleFormControlTextarea1" rows="2" cols="5"></textarea>
  </div>
            
    <div class="row">
    <div class="col">
        Size of the property
      <input type="text" name="size"class="form-control" placeholder="sq ft or rooms">
    </div>
    <div class="col">
       Approximate Budget 
      <input type="text" name="budget" class="form-control" placeholder="">
    </div>
  </div>  
      <br>
       <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe Your Ideal Look</label>
    <textarea class="form-control" name="look" id="exampleFormControlTextarea1" rows="1.5"></textarea>
  </div>
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Any Special Requirements</label>
    <textarea class="form-control" name="special" id="exampleFormControlTextarea1" rows="1.5"></textarea>
  </div>
    
<!--
  <div class="form-group">
    <label for="exampleFormControlFile1">Any Sample Photo of what you would like</label>
    <input type="file" name="picture" value='picture' class="form-control-file" id="exampleFormControlFile1">
      <br>
      <input type="file" name="image" />
    <br>
  </div>
-->
      <br>
     <a href="thankyou.html">
      <input type="submit" value='submit' name='submit'>
      </a>
<br>
      <br>
                    
        </div>         
                    
                <br>
            
                
                
      </form>

		

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
	                <li><span class="icon icon-map-marker"></span><span class="text">201,Parimal Heights, Gulmohar Road,Off Juhu Lane,Andheri West, Mumbai</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9819803710</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">rupaliinamdar@gmail.com</span></a></li>
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