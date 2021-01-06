<!DOCTYPE html>
<?php
include "connection.php";
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
      
          .top1{
              
              
                top 30;
                z-index: 1001
          }
      
              
      
      </style>
  </head>
    
    
          <?php
      
      $query1="SELECT * FROM `project` order by id desc;";

      $result=mysqli_query($conn , $query1);


      
      ?>
  <body >
    
    
      

      
      
      
     <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
<a class="navbar-brand" href="index.php">Direction One Elements</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item active"><a href="project.php" class="nav-link">Projects</a></li>
	        	<li class="nav-item "><a href="testimonials.php" class="nav-link" style="display:none">Testimonials</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Blogs</a></li>
                <li class="nav-item"><a href="reqaquote.php" class="nav-link">Request a Quote</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Media Coverage</a></li>
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
 
            <h1 style="color: white; text-align: center"> Our Projects</h1>
         
            
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

      <br>
      <br>
      <br>
       
      
      
		<section class="ftco-section">
    	<div class="container-fluid">
    		<div class="row no-gutters">
    			
                    
                    
                   <?php
    while ($row = mysqli_fetch_assoc($result)) 
      {
//        $msg= '<img src="data:image/jpeg;base64,'.base64_encode($row['image']). ' " /> ';
        $id=$row['id']
//                              
        ?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project" >
<!--	    				<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">-->
                        <a href="project-list.php?id=<?php echo $id ?>"
><?php  echo '<img class="img-fluid" style="height: 350px; width: 100%; " src="data:image/jpeg;base64, '.base64_encode($row['image'] ).'" />';
 ?></a>
<!--
                          <?php
                            
//                            echo '<img class="img-fluid" style="height: 350px; width: 500px; " src="data:image/jpeg;base64, '.base64_encode($row['image'] ).'" />';
//
//                  
                            ?>
-->
                  
	    				<div class="text">
	    					<h3><?php  echo $row['name']; ?></h3>
	    				</div>
	    				
                        <?php
        
                       echo '<a href="data:image/jpeg;base64, '.base64_encode($row['image'] ).'"  class="icon image-popup d-flex justify-content-center align-items-center">';
                        
	    				echo'<span class="icon-expand"></span>';
	    				echo'</a>';
                        
                        ?>
    				</div>
                    </div>
                        <?php  } ?>
                
    		
                
                
                
            
<!--        
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project" style="padding: 20px 20px">
	    				<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<h3>Office Interior Design in Paris</h3>
	    				</div>
	    				<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
-->
<!--
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project" style="padding: 20px 20px">
	    				<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<h3>Office Interior Design in Paris</h3>
	    				</div>
	    				<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
-->
<!--
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project" style="padding: 20px 20px">
	    				<img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<h3>Office Interior Design in Paris</h3>
	    				</div>
	    				<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
-->
<!--
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project" style="padding: 20px 20px">
	    				<img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<h3>Office Interior Design in Paris</h3>
	    				</div>
	    				<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
-->
<!--
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project" style="padding: 20px 20px">
	    				<img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<h3>Office Interior Design in Paris</h3>
	    				</div>
	    				<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
-->
<!--
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project" style="padding: 20px 20px">
	    				<img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<h3>Office Interior Design in Paris</h3>
	    				</div>
	    				<a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
-->
<!--
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project" style="padding: 20px 20px">
	    				<img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<h3>Office Interior Design in Paris</h3>
	    				</div>
	    				<a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
-->
    		</div>
<!--
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
-->
    	</div>
    </section>
     <br>
            <br>
            <br>
      
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
                <li><a href="testimonials.php" style="display:none">Testimonials</a></li>
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