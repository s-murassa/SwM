<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phnumber']) && isset($_POST['message'])){
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phnumber']) && !empty($_POST['message'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phnumber = $_POST['phnumber'];
		$message = $_POST['message'];
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<script type='text/javascript'>alert('Kindly provide Valid Email')</script>";
		}   else{
		$body = $name."\n".$email."\n".$phnumber."\n".$message;
		if (mail('smubshah@gmail.com', 'Website Response', $body , 'From:info@swm-electric.com')){
			echo "<script type='text/javascript'>alert('Thankyou for contacting us.')</script>";
		 } else{
			 echo "<script type='text/javascript'>alert('There is a problem in sending mail')</script>";
		 }
		}
		
	}
}  
?>


<!DOCTYPE html>
<html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>SwM-powering-tommorow</title>
      <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> 
   </head>
   <body>
     
	    <!-- Navigation -->
  <div class="bg-head fixed-top">	  
    <div class="navbar fixed-top navbar-expand-lg navbar-light bg-overlay bg-nav py-lg-2">  
	      <div>
	        <div class="adjust">
			  <div id="logo">
		        <img class="arc" id="arc1" src="images/SwM-ARC3.png" />
                <img class="arc" id="arc2" src="images/SwM-ARC2.png" />
                <img class="arc" id="arc3" src="images/SwM-ARC1.png" />				
		      </div>
		        <div class="swm1"><h2>SwM</h2>
			  </div>
			</div>
			<div class="swm2"><h6><strong>Powering Tomorrow</strong></h6></div>
	      </div>  
	         
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active px-lg-2">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-2">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item px-lg-2">
              <a class="nav-link" href="services.html">Services</a>
            </li>
			 <li class="nav-item px-lg-2">
              <a class="nav-link" href="segments.html">Segments</a>
            </li>
            <li class="nav-item px-lg-2">
              <a class="nav-link text-danger" href="contact.php"><strong>Contact</strong></a>
            </li>
          </ul>
        </div>
      </div>
	  <div class="d-none d-lg-block" id="button_ins"><a href="contact.php#freeins">Free Inspection</a></div>
    </div>
 </div>
 
	<div class="tagline">
	<span><i class="fa fa-phone"></i> +971 56 5345311</span>
	<a href="#" class="px-lg-3"><i class="fa fa-twitter fa-lg"></i></a>
	<a href="#" class="px-lg-3"><i class="fa fa-skype fa-lg"></i></a>
	<a href="#" class="px-lg-3"><i class="fa fa-linkedin fa-lg"></i></a>
	<a href="#" class="px-lg-3"><i class="fa fa-facebook-f fa-lg"></i></a>
    </div>
    

      <div class="bg-faded p-4 my-0">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0"><strong>Contact us</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-8 text-center map-mar">
            <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0">
              <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
          </div>
          <div class="col-lg-3 text-center">
            <h5 class="mb-0">Phone:</h5>
            <div class="mb-4">+971 56 5345311</div>
            <h5 class="mb-0">Email:</h5>
            <div class="mb-4">
              <a href="mailto:swm.abdulbari@gmail.com">swm.abdulbari@gmail.com</a>
            </div>
            <h5 class="mb-0">Address:</h5>
            <div class="mb-4">
              104,<br> 
			  Misa Al wartha building, 
              <br>
              Sharjah.
            </div>
          </div>
        </div> 
    </div>

	  
	  <a id="freeins"></a>
	<div class="bg-map">
      <div class="bg-faded p-4 my-2 text-center">
	  <div class="container wrapper">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0"><strong>Free
          Inspection</strong>
        </h2>
        <hr class="divider mb-5">
        <form>
          <div class="row ffrm">
            <div class="form-group col-lg-3">
              <label class="text-heading"><h5><strong>Name</strong></h5></label>
              <input type="text"  name="Name" required="" class="form-control">
            </div>
            <div class="form-group col-lg-3">
              <label class="text-heading"><h5><strong>Email Address</strong></h5></label>
              <input type="email" required="" name="email" class="form-control">
            </div>
            <div class="form-group col-lg-3">
              <label class="text-heading"><h5><strong>Phone Number</strong></h5></label>
              <input type="tel" name="phnumber" required="" class="form-control">
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-9">
              <label class="text-heading"><h5><strong>Message</strong></h5></label>
              <textarea class="form-control" name="message" required="" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-9">  
              <button type="submit" class="btn btn-secondary">Contact Us</button>
            </div>
          </div>
        </form>
	  </div>
    </div>
</div>


            <!--footer-->
     <div class="footers text-white text-center p-4">
        
		<div class="row">
		               
		  <div class="col-md-3 text-center footdivwid">
		       <br/>
               <h5><strong>Company</strong></h5>
               <p ><a href="index.html" class="px-lg-3 m-0">Home</a></p>
               <p><a href="about.html" class="px-lg-3 m-0">About us</a></p>
		  </div>
		  
		  <div class="col-md-3 text-center footdivwid">
		       <br/>
               <h5><strong>Info</strong></h5>
			   <p ><a href="services.html" class="px-lg-3 m-0">Services</a></p>
			   <p ><a href="segments.html" class="px-lg-3 m-0">Segments</a></p>
          </div>
		  
		  
		  <div class="col-md-3 text-center footdivwid">
		       <br/>
               <h5><strong>Support</strong></h5>
               <p><a href="contact.php" class="px-lg-3 m-0"><i class="fa fa-address-card"></i> Address</a></p>
               <p><a href="contact.php#freeins" class="px-lg-3 m-0">Free-inspection</a></p>
		  </div>

		  <div class="col-md-3 text-center footdivwid">
		       <br/>
               <h5><strong>Contact-us</strong></h5>
			   <p ><i class="fa fa-phone"></i>+971 56 5345311</p>
			   <p >info@swm-electric.com</p>
          </div>
		  
        </div>
	 </div>
	 
	  <footer class="text-white py-3">
     
        <span class="m-0">Copyright &copy; swm-electric.com 2017</span>
		<a href="#" class="px-lg-3 m-0"><i class="fa fa-twitter fa-lg"></i></a>
	    <a href="#" class="px-lg-3 m-0"><i class="fa fa-skype fa-lg"></i></a>
	    <a href="#" class="px-lg-3 m-0"><i class="fa fa-linkedin fa-lg"></i></a>
	    <a href="#" class="px-lg-3 m-0"><i class="fa fa-facebook-f fa-lg"></i></a>
      
    </footer>
	
	
	 
	  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Zoom when clicked function for Google Map -->
    <script>
      $('.map-container').click(function () {
        $(this).find('iframe').addClass('clicked')
      }).mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
      });
    </script>
	 <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
	 <script type="text/javascript" src="scripts/my_scripts.js"></script>
   </body>
</html>
	 