<!DOCTYPE html>

<?php
include "connection.php";
  $id=$_GET['id'] ;
//echo $id;

$query1="SELECT name FROM `blog` where id=$id;";
$result=mysqli_query($conn , $query1);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];


$query2="SELECT * FROM `addblog` where id=$id;";
$result2=mysqli_query($conn , $query2);


     
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
      <script src="/Scripts/jquery-1.5.1.min.js"></script>
      
      <style>
      
      
      
          .top1{
              
              
                top 30;
                z-index: 1001
          }
      .a { font-family: 'Enriqueta', arial, serif; line-height: 1.25; margin: 0 0 10px; font-size: 30px; font-weight: bold; }
              
      
      </style>
  </head>
    
    
       
  <body>
    
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	     <a class="navbar-brand" href="index.php">Direction One Elements</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="project.php" class="nav-link">Projects</a></li>
	        	<li class="nav-item"><a href="testimonials.php" class="nav-link" style="display:none">Testimonials</a></li>
	        	<li class="nav-item "><a href="blog.php" class="nav-link">Blogs</a></li>
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
 
            <h1 style="color: white; text-align: center"> Blog</h1>
         
            
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
      
		<section class="ftco-section">
            
      <div class="container">
        <div class="row">
          <div class="ftco-animate" style="padding: 0 10vw;">
            <h2 class="mb-3 a" style="text-align: center;"><?php  echo $row['name']; ?></h2>
              <br>
              
              
              <?php
              while($row2 = mysqli_fetch_assoc($result2)){
                  $msg= '<img src="data:image/jpeg;base64,'.base64_encode($row2['image']). ' " /> ';
                  ?>
              
              <br>
              <p style="text-align: center;">

                  <?php
                  
                  echo '<img class="img-fluid" src="data:image/jpeg;base64, '.base64_encode($row2['image'] ).'"  width="550" />';

                  
                  ?>
                  

            </p>
              <br>
              
            <p style="text-align: center;"><?php echo $row2['para']?></p>
            
              
              <?php  } ?>
<!--
            <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
            <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
            <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
            <p>
              <img src="images/image_2.jpg" alt="" class="img-fluid">
            </p>
            <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
            <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
            <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
            <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
-->
<!--
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>
-->
            
<!--
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>George Washington</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>
-->

<?php  

  $query6="SELECT COUNT(*) FROM comment where id=$id;";        
$result6=mysqli_query($conn , $query6);
 $row6 = mysqli_fetch_assoc($result6)                            
     
    ?>
            <div class="pt-5 mt-5">
              <h3 class="mb-5"><?php echo $row6['COUNT(*)']?> Comments</h3>
              <ul class="comment-list">
            <?php
            $query5="SELECT * FROM comment where id=$id;";        
            $result5=mysqli_query($conn , $query5);
             while($row2 = mysqli_fetch_assoc($result5)){   
            ?>    <li class="comment">
                  <div class="comment-body">
                    <h3><?php echo $row2['name']?></h3>
                 
                    <p><?php echo $row2['message']?></p>
                 
                  </div>
                </li>
            <?php        
             }
               ?>
                </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="" method="POST" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name1" name='name1' required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email1" name='email1' required>
                  </div>
    
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea  id="message1" cols="30" rows="10" class="form-control" name='message1' required></textarea>
                  </div>
                    
                   <?php echo "<input type='hidden' value='$id' name='id'>"; ?>
                    

                    
                    <div class="form-group">
                    <input type="submit" value="submit" class="btn py-3 px-4 btn-primary" name="submit" id="blogsinglesubmit" >
                  </div>
                </form>
              </div>
            </div>

          </div>  

        </div>
      </div>
    </section> <!-- .section -->
   <?php
                  
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) ) {
              
	
//    echo print_r($_POST,true);
    
    $name1 = trim($_POST['name1']);
    $email1 = trim($_POST['email1']);
	$message1 = trim($_POST['message1']);
    
   
    $query1="INSERT into comment1(id,name,email,message)  VALUES
('$id','$name1','$email1','$message1')";

$result=mysqli_query($conn , $query1);

       
              
              
               $query2="INSERT INTO comment(id,name,email,message)
               SELECT DISTINCT id,name,email,message
    FROM comment1;";

$result2=mysqli_query($conn , $query2);
              
      
    
     $query3="TRUNCATE TABLE comment1";

$result3=mysqli_query($conn , $query3);

    	

    
 mysqli_close($conn);
 
}
          

 ?>     
      
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
                <!-- <li><a href="testimonials.php">Testimonials</a></li> -->
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
                
              <li><a href="project.php">Residential Interiors </a></li>
                <li><a href="project.php">Office Interiors</a></li>
                  <li><a href="project.php">Architectural Design</a></li>
                
                
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