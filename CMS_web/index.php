<?php 
	session_start();
	$home=true;
	include('header.php');
?> 
				<?php
					if(isset($_GET['action'])){
				?>
					<div class="alert alert-danger" role="alert">Error: <?=$_GET['action'];?><a href="#" class="close" data-dismiss="alert">×</a></div>
				<?php
					} 
					else if(isset($_GET['message'])){
				?>
					<div class="alert alert-success" role="alert">Message: <?=$_GET['message'];?><a href="#" class="close" data-dismiss="alert">×</a></div>
				<?php
					}
				?>  
			<!--Start untaill fotter.php -->
			
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top:-20px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/f.jpg" alt="Request for new line">
      <div class="carousel-caption">
	    <h2 style="color:#000000;">Company Profile</h2>
		<span>FutureNet was established in 2012. FutureNet is a pioneer company in internet service in the Dhaka.
		FutureNet presents integrated internet services, it presents integrated solution for these services built
		on <a href="#profile"  type="button" class="scroll btn btn-info">Read More</a>
		</span>
		
      </div>
    </div>
    <div class="item">
      <img src="images/ff.jpg" alt="Request for new line">
      <div class="carousel-caption">
	  <h2 style="color:#000000;">What we believe Our Vision</h2>
		<span>Dedicating all our efforts and possibilities to satisfy the needs and requirements 
		of partners and customers. This is through providing the most 
		modern<a href="#vision" type="button" class="scroll btn btn-info">Read More</a>
		</span>
      </div>
    </div>
	    <div class="item">
      <img src="images/fff.jpg" alt="Request for new line">
      <div class="carousel-caption">
        	  <h2 style="color:#000000;">Our Mission</h2>
		<span>Cruise the world to explore the latest ideas, the latest scientific and practical solutions
		to our partners<a href="#mission" type="button" class="scroll btn btn-info">Read More</a>
		</span>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container-fluid" id="profile">
<div class="container inner_profile">
  <h1>Company Profile</h1>
  <p style="text">FutureNet was established in 2012. FutureNet is a pioneer company in internet service in the Dhaka. 
  FutureNet presents integrated internet services, it presents integrated solution for these services built 
  on internet technology. It also presents solutions of computer networks, solutions of hosting, programming and 
  developing websites and all these services built on the highest and the most modern technology. 

By doing this, FutureNet aims at presenting the best solutions for its clients in information systems 
technology. FutureNet depends on varying its services and presenting integrated solutions in the field of 
information technology and finally presenting these services to the client in away the suits his/her needs and thus
 saving his/her time and money and also showing a high level of services. FutureNet has a wide geographical scope
 because of the nature presenting information technology services; it provides services for biggest number of 
 customers inside all the areas of Dhaka and outside it.</p>
</div>
</div>
<div class="container-fluid" id="vision">
  <div class="container inner_vision">
  <h1>What we believe Our Vision</h1>
  <p>Dedicating all our efforts and possibilities to satisfy the needs and requirements of partners and 
  customers. This is through providing the most modern means of technology and most elegant connection services
  with suitable prices and in a way that achieves the highest levels of performance for our customers.</p>
</div>
</div>
<div class="container-fluid effect14" id="mission">
<div class="container inner_mission">
  <h1>Our Mission</h1>
  <p>Cruise the world to explore the latest ideas, the latest scientific and practical solutions to our partners, 
  Integrate with them through our outstanding team which is based on develop engineering techiques and solutions to 
  even offer to our customers extracted research, global experince to satisfy the needs of their plans and projects 
  for the future</p>
</div>
</div>
<div class="container-fluid" id="packages">
  <h1>Internet Packages</h1>
  <!-- first row-->
<div class="row">
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect14 right_to_left">
	<a href="sign_up.php">
        <div class="img">
		  <img src="images/1st.jpg" alt="img">
		</div>
        <div class="info">
          <h3>Send Request</h3>
        </div>
	</a>
	</div>
    <!-- end normal -->
 
  </div>
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect14 top_to_bottom">
	<a href="sign_up.php">
        <div class="img">
		  <img src="images/2nd.jpg" alt="img">
		</div>
        <div class="info">
          <h3>Send Request</h3>
        </div>
	</a>
	</div>
    <!-- end normal -->
 
  </div>
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect14 left_to_right">
	<a href="sign_up.php">
        <div class="img">
		  <img src="images/3rd.jpg" alt="img">
		</div>
        <div class="info">
          <h3>Send Request</h3>
        </div>
	</a>
	</div>
    <!-- end normal -->
 
  </div>
</div>
<!-- end first row-->

<!-- Right to left-->
<div class="row">
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect14 right_to_left">
	<a href="sign_up.php">
        <div class="img">
		  <img src="images/4th.jpg" alt="img">
		</div>
        <div class="info">
          <h3>Send Request</h3>
        </div>
	</a>
	</div>
    <!-- end normal -->
 
  </div>
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect14 top_to_bottom">
	<a href="sign_up.php">
        <div class="img">
		  <img src="images/5th.jpg" alt="img">
		</div>
        <div class="info">
          <h3>Send Request</h3>
        </div>
	</a>
	</div>
    <!-- end normal -->
 
  </div>
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect14 left_to_right">
	<a href="sign_up.php">
        <div class="img">
		  <img src="images/6th.jpg" alt="img">
		</div>
        <div class="info">
          <h3>Send Request</h3>
        </div>
	</a>
	</div>
    <!-- end normal -->
 
  </div>
</div>
<!-- end second row-->
    <!-- Right to left-->
<div class="row">
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect14 bottom_to_top">
	<a href="sign_up.php">
        <div class="img">
		  <img src="images/7th.jpg" alt="img">
		</div>
        <div class="info">
          <h3>Send Request</h3>
        </div>
	</a>
	</div>
    <!-- end normal -->
 
  </div>
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect14 bottom_to_top">
	<a href="sign_up.php">
        <div class="img">
		  <img src="images/8th.jpg" alt="img">
		</div>
        <div class="info">
          <h3>Send Request</h3>
        </div>
	</a>
	</div>
    <!-- end normal -->
 
  </div>
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect14 bottom_to_top">
	<a href="sign_up.php">
        <div class="img">
		  <img src="images/pl.png" alt="img">
		</div>
        <div class="info">
          <h3>Send Request</h3>
        </div>
	</a>
	</div>
    <!-- end normal -->
 
  </div>
</div>
<!-- end third row-->
</div>
<div class="container-fluid" id="contact">
<h2 class="text-center">Contact Info</h2>
<div class="row">
			<div class="col-md-4">
				<div style="border-radius:5px 5px 0 0">
					<h5><span class="glyphicon glyphicon-road"></span>House#98, Road#10, Sector#10, Uttara Model Town, Dhaka-1230, Bangladesh</h5>
					<h5><span class="glyphicon glyphicon-phone-alt"></span>  +880 1793 485005</h5>
					<a href="mailto:info@futurenet-bd.com"><h5><span class="glyphicon glyphicon-envelope"></span>  info@futurenet-bd.com</h5></a>
				</div> 
			</div>
			<div class="col-md-8">
			<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sbd!4v1425102193225!6m8!1m7!1sTBWrO_BVmJD5pnMfnNf6fA!2m2!1d23.887328!2d90.388933!3f111.39149013140658!4f-7.897775488854961!5f0.7820865974627469"  frameborder="2" style="border:2px solid black;height:100%;width:100%;">
			</iframe>
			</div>
</div>
</div>
<script>
$(document).ready(function(){
    $('#prtofile').height($(window).height()/2);
});
    var hashTagActive = "";
    $(".scroll").click(function (event) {
        if(hashTagActive != this.hash) { //this will prevent if the user click several times the same link to freeze the scroll.
            event.preventDefault();
            //calculate destination place
            var dest = 0;
            if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
                dest = $(document).height() - $(window).height();
            } else {
                dest = $(this.hash).offset().top;
				
            }
            //go to destination
            $('html,body').animate({
                scrollTop: dest
            }, 1000, 'swing');
            hashTagActive = this.hash;
        }
    });
</script>
</div>
		<?php
		include("footer.php");
		?>
	</div>
	 <!-- fluid  end-->
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="javascript/function.com.js" type="text/javascript"></script>
	<script src="javascript/process.func.js" type="text/javascript"></script>
</body>
</html>