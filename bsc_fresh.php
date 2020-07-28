<?php include('include/database.php');?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>MAAUN | Application for admission into MAAUN</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<link rel="shortcut icon" href="images/logo/logo7.jpg"/>
<style>

.owl-carousel.home-slider {
	position: relative;
	height: 650px;
	z-index: 0; }
	.owl-carousel.home-slider .slider-item {
		background-size: cover;
		background-repeat: no-repeat;
		background-position: top center;
		height: 650px;
		position: relative;
		z-index: 0; }
		@media (max-width: 1199.98px) {
			.owl-carousel.home-slider .slider-item {
				background-position: center center !important; } }
		.owl-carousel.home-slider .slider-item .overlay {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: #000000;
			opacity: .6; }
		.owl-carousel.home-slider .slider-item .slider-text {
			height: 650px; }
			@media (max-width: 767.98px) {
				.owl-carousel.home-slider .slider-item .slider-text {
					text-align: center; } }
			.owl-carousel.home-slider .slider-item .slider-text .text {
				position: relative; }
			.owl-carousel.home-slider .slider-item .slider-text h1 {
				font-size: 60px;
				color: #fff;
				line-height: 1.2;
				font-weight: 900; }
				.owl-carousel.home-slider .slider-item .slider-text h1 span {
					display: block; }
				@media (max-width: 991.98px) {
					.owl-carousel.home-slider .slider-item .slider-text h1 {
						font-size: 40px; } }
			.owl-carousel.home-slider .slider-item .slider-text .subheading {
				font-size: 14px;
				font-weight: 700;
				text-transform: uppercase;
				color: white;
				letter-spacing: 2px; }
			.owl-carousel.home-slider .slider-item .slider-text p {
				color: rgba(255, 255, 255, 0.9); }
			.owl-carousel.home-slider .slider-item .slider-text .breadcrumbs {
				text-transform: uppercase;
				font-size: 13px;
				letter-spacing: 1px; }
				.owl-carousel.home-slider .slider-item .slider-text .breadcrumbs span {
					border-bottom: 2px solid rgba(255, 255, 255, 0.1); }
					.owl-carousel.home-slider .slider-item .slider-text .breadcrumbs span a {
						color: #fff; }
	.owl-carousel.home-slider .owl-nav {
		position: absolute;
		top: 100%;
		width: 100%; }
		.owl-carousel.home-slider .owl-nav .owl-prev,
		.owl-carousel.home-slider .owl-nav .owl-next {
			position: absolute;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			margin-top: -10px;
			outline: none !important;
			-moz-transition: all 0.3s ease;
			-o-transition: all 0.3s ease;
			-webkit-transition: all 0.3s ease;
			-ms-transition: all 0.3s ease;
			transition: all 0.3s ease;
			opacity: 0; }
			.owl-carousel.home-slider .owl-nav .owl-prev span:before,
			.owl-carousel.home-slider .owl-nav .owl-next span:before {
				font-size: 30px;
				color: rgba(255, 255, 255, 0.5);
				-moz-transition: all 0.3s ease;
				-o-transition: all 0.3s ease;
				-webkit-transition: all 0.3s ease;
				-ms-transition: all 0.3s ease;
				transition: all 0.3s ease; }
			.owl-carousel.home-slider .owl-nav .owl-prev:hover span:before, .owl-carousel.home-slider .owl-nav .owl-prev:focus span:before,
			.owl-carousel.home-slider .owl-nav .owl-next:hover span:before,
			.owl-carousel.home-slider .owl-nav .owl-next:focus span:before {
				color: #fff; }
		.owl-carousel.home-slider .owl-nav .owl-prev {
			left: 50%;
			margin-left: -80px; }
		.owl-carousel.home-slider .owl-nav .owl-next {
			right: 50%;
			margin-right: -80px; }
	.owl-carousel.home-slider:hover .owl-nav .owl-prev,
	.owl-carousel.home-slider:hover .owl-nav .owl-next {
		opacity: 1; }
	.owl-carousel.home-slider:hover .owl-nav .owl-prev {
		left: 50%;
		margin-left: -80px; }
	.owl-carousel.home-slider:hover .owl-nav .owl-next {
		right: 50%;
		margin-right: -80px; }
	.owl-carousel.home-slider .owl-dots {
		position: absolute;
		left: 0;
		right: 0;
		bottom: 60px;
		width: 100%;
		text-align: center; }
		@media (min-width: 992px) {
			.owl-carousel.home-slider .owl-dots {
				bottom: 130px; } }
		.owl-carousel.home-slider .owl-dots .owl-dot {
			width: 10px;
			height: 10px;
			margin: 5px;
			border-radius: 50%;
			background: #3e64ff; }
			.owl-carousel.home-slider .owl-dots .owl-dot.active {
				background: #fff;
			 }
			 .newsDiv{
				 margin-left: -34px;
				 margin-top: -40px;
				 padding: 70px;
				 width: 1008px;
				 background-color: #2B3856;
			 }
			 .auto{
				 color: red;
			 }
			 .inputForm{
				 color: black;
			 }
			 .progressbar{
				 color: white;
				 font-size: 40px;
			 }
			 #passport_field{
				 width: 100%;
				 padding: 10px;
				 border:1px solid white;
				 background-color: white;
			 }
</style>
</head>
<body>
<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="bsc_fresh.php"><i class="fa fa-leanpub" aria-hidden="true"></i>   M A A U N</a></h1>

			</div>
			<div class="w3layouts_header_right">
			    <form action="#" method="post">
					<input name="Search here" type="search" placeholder="Search" required="">
					<input type="submit" value="">
				</form>
			</div>
			<ul class="agile_forms">
				<li><a class="active" href="logouts.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout </a> </li>
			<!--	<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up</a> </li> -->
			</ul>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li><a href="bsc_fresh.php" class="effect-3">Home</a></li>
						<li class="active"><a href="bsc.php" class="effect-3 scroll">Bsc Programme</a></li>
						<li><a href="admissions.php" class="effect-3 scroll">Admissions</a></li>
						<li><a href="services.php" class="effect-3 scroll">Services</a></li>
						<li><a href="news.php" class="effect-3 scroll">News</a></li>
						<li><a href="#map" class="effect-3 scroll">Contact</a></li>
					</ul>
				</nav>

			</div>
		</nav>
		<div class="clearfix"> </div>
	</div>
</div>
					 <div class="stats" id="stats">
				 <div class="col-md-3 col-xs-3 stats-grid slideanim">
 			 <div class='numscroller numscroller-big-bottom'></div>
	 	 </div>
	 </div>
 </div>
</div>
<!--//stats-->
<!-- Modal1
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>

				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Sign In</h3>
					<div class="login-form">
						<form  method="post">
							<input type="text" name="st_username" placeholder="Enter Your Username" required="">
							<input type="password" name="st_password" placeholder="Password" >
							<div class="tp">
								<input type="submit" value="Sign In" name="student_signin">
							</div>
						</form>
					</div>
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
				</div>

			</div>
		</div>
	</div>
</div>
//Modal1 -->
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/logo/image1.jpg);">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate mb-md-9"><br><br>
						<div class="newsDiv">
          	<span class="subheading">University of Maradi, Niger Republic</span>
            <h1 class="mb-4">General Guidlines</h1>
						<br>
						<?php
		          $query=mysql_query("SELECT * FROM guids WHERE guid_id='1'")or die(mysql_error());
		          $row=mysql_fetch_array($query);
		        ?>
							<h1 class="mb-4"><b><i><u><p><?php echo $row['heading']; ?><p></u></i></b></h1>
							<p><?php echo $row['guidline']; ?> </p>

							<?php
			          $query=mysql_query("SELECT * FROM guids WHERE guid_id='2'")or die(mysql_error());
			          $row=mysql_fetch_array($query);
			        ?>
								<h1 class="mb-4"><b><i><u><p><?php echo $row['heading']; ?><p></u></i></b></h1>
								<p><?php echo $row['guidline']; ?> </p>
					</div>
				 </div>
        </div>
      </div>
    </div>
  </section>

	<div class="w3l-form">
		<div class="contact-grid1">
			<div class="contact-top1">
				<br>
				<form action="bsc_fresh_server.php" class="apply" method="post">
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
						<h1 class="progressbar"> Bsc Fresh applicant bio data </h1><br>
						  <div class="progress progress-striped progress-success active">
						    <div class="progress-bar" style="width: 1%;">
								</div>
						  </div>
						</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
					<label>Applicant Name *</label>
						<input type="text" name="applicant_name" class="inputForm" placeholder="Enter candidate name . . . . . ." required="">
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
					<label>Reference Number *</label>
            <input type="text" name="reg_no" class="inputForm" readonly="readonly" id="reg_no" type="text" value="<?php function generatePIN($digits = 4){ $i = 0; //counter
            $pin = ""; //our default pin is blank.
            while($i < $digits){
            //generate a random number between 0 and 9.
            $pin .= mt_rand(0, 9);
            $i++;
           }
            return $pin;
          }
            //If I want a 4-digit PIN code.
            $appid = "01";
            //$appid_end = "AKS".
            $pin = generatePIN();
            echo $appid.$pin;?>"/>
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
					<label>Upload Passport *</label>
						<input type="file" name="passport" class="inputForm" id="passport_field" required>
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Gender *</label>
						<select class="inputForm" id="selector1" name="gender">
							<option value=""> Select </option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
				  <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Date of birth *</label>
						<input type="text" name="dob" class="inputForm" placeholder="Date of birth . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Phone Number *</label>
						<input type="text" name="phone" class="inputForm" placeholder="Phone Number . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Email address *</label>
						<input type="email" name="email" class="inputForm" placeholder="Email address . . . . . ." required="">
					</div>

				  <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Nationality *</label>
						<input type="text" name="nationality" class="inputForm" placeholder="Country . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>State *</label>
						<input type="text" name="state" class="inputForm" placeholder="State . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Local government *</label>
						<input type="text" name="local_g" class="inputForm" placeholder="Local government . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Home town *</label>
						<input type="text" name="home_town" class="inputForm" placeholder="Home town . . . . . ." required="">
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
					<h1 class="progressbar"> Required credentials for SSCE </h1><br>
				  </div>
				  <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Subject *</label>
						<input type="text" name="subject_1" class="inputForm" placeholder="Subject . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Credit *</label>
						<input type="text" name="credit_1" class="inputForm" placeholder="Credit . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Subject *</label>
						<input type="text" name="subject_2" class="inputForm" placeholder="Subject . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Credit *</label>
						<input type="text" name="credit_2" class="inputForm" placeholder="Credit . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Subject *</label>
						<input type="text" name="subject_3" class="inputForm" placeholder="Subject . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Credit *</label>
						<input type="text" name="credit_3" class="inputForm" placeholder="Credit . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Subject *</label>
						<input type="text" name="subject_4" class="inputForm" placeholder="Subject . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Credit *</label>
						<input type="text" name="credit_4" class="inputForm" placeholder="Credit . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Subject *</label>
						<input type="text" name="subject_5" class="inputForm" placeholder="Subject . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Credit *</label>
						<input type="text" name="credit_5" class="inputForm" placeholder="Credit . . . . . ." required="">
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
					<h1 class="progressbar"> Please fill the parents information. </h1><br>
				  </div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Parent's name *</label>
						<input type="text" name="parent_name" class="inputForm" placeholder="Parent name . . . . . ." required="">
					</div>
					<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
						<label>Parent's phone number *</label>
						<input type="text" name="parent_phone" class="inputForm" placeholder="Parent phone . . . . . ." required="">
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
						<label>Parent's home address *</label>
						<input type="text" name="parent_address" class="inputForm" placeholder="Parent residencial address . . . . . ." required="">
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
					<h1 class="progressbar"> Faculty, Department and Course you are applying for </h1><br>
				  </div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
						<label>Faculty *</label>
						<input type="text" name="faculty" class="inputForm" placeholder="Faculty . . . . . ." required="">
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
						<label>Department *</label>
						<input type="text" name="department" class="inputForm" placeholder="Department . . . . . ." required="">
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
						<label>Course of study *</label>
						<input type="text" name="course" class="inputForm" placeholder="Course of study . . . . . ." required="">
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
					</div>
					<div class="col-md-12 col-xs-12 wthree_contact_left_grid">
					<label>Enter your home address below *</label>
					</div>
					<div class="form-group">
						<textarea type="text"  name="address" class="inputForm" placeholder="Applicant's home address . . . . . ." required=""></textarea>
					</div>
					<div class="center col-md-12">
            <button type="submit" name="submit" class="btn btn-primary"> SUBMIT THE FORM </button>
          </div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- contact -->
	<?php
	 include "setting/config.php";
	$general = $ravi->general_setting_check();

	$general_fetch = $general->fetch_assoc();
	$general_numss = $general->num_rows;
	if($general_numss>0)
	{
	?>
<div id="map"></div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="wthree_footer_grid_left">
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>About Us</h4>
				<p><?php echo $general_fetch['web_about']; ?></p>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>Navigation</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#academics" class="scroll">Academics</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#admission" class="scroll">Admissions</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services" class="scroll">Services</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#news" class="scroll">News</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail" class="scroll">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
				<h4>Others</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Desktop Apps</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
				<h4>Contact Us</h4>
				<ul>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@maaun2013@gmail.com"><?php echo $general_fetch['website_email1']; ?></a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $general_fetch['website_phone1']; ?></li>
					<li><i class="fa fa-fax" aria-hidden="true"></i><?php echo $general_fetch['website_address']; ?></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="w3layouts_copy_right">
	<div class="container">
		<p>© <?php echo $general_fetch['website_start']; ?> All rights reserved | Designed by <a href="http://sadaukitech.com">Sadauki_Tech</a> Developed By Mainasara</p>
	</div>
</div>
	<?php } else{ ?>

	<div id="mail" class="contact">
	<div class="container">
		<h3 class="w3l-title">Contact Us</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="agile_banner_bottom_grids">
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agilew3_contact">
					<h4>Address</h4>
					<p><?php echo "Enter Your Business Address"; ?></p>
					<p></p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right">
					<h4>Phone</h4>
					<p><?php echo "Enter Your Business Email"; ?> <span><?php echo "Phone"; ?></span></p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left1">
					 <i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right1">
					<h4>Email</h4>
					<p><a href="mailto:info@maaun2013@gmail.com"><?php echo "Business Email"; ?></a>
						<span><a href="mailto:info@maaun2013@gmail.com"><?php echo "Email 2"; ?></a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>

<div id="map"></div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="wthree_footer_grid_left">
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>About Us</h4>
				<p><?php echo "Write About ur Business"; ?></p>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>Navigation</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#academics" class="scroll">Academics</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#admission" class="scroll">Admissions</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services" class="scroll">Services</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#news" class="scroll">News</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail" class="scroll">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
				<h4>Others</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Desktop Apps</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
				<h4>Contact Us</h4>
				<ul>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="sadaukitech.com"><?php echo $general_fetch['website_email1']; ?></a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><?php echo "Business Phone No"; ?></li>
					<li><i class="fa fa-fax" aria-hidden="true"></i><?php echo "Business Address"; ?></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="w3layouts_copy_right">
	<div class="container">
		<p>© <?php echo $general_fetch['website_start']; ?> All rights reserved | Designed by <a href="http://sadaukitech.com">Sadauki_Tech</a> Developed By Mainasara </p>
	</div>
</div>
	<?php }?>
	<!-- //footer -->

<!-- js-scripts -->
<!-- js-files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js-files -->
<!-- Baneer-js -->

<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->

<!-- //js-scripts -->
</body>
</html>
