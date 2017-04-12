<?php
	include 'forum/functions.php';
	require_once('forum/config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/base.css">
	<link rel="stylesheet" href="style/contactus.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="style/favicon.ico" type="image/x-icon">
	<!-- Importing Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
	<title>Contact Us</title>
</head>
<body>
<div class="parallax">
<header>
	<div class="headerbox">
		<div id="banner">
			<a href="index.html"><img src="style/rocketLogo.png" alt="Rocket Logo"></a>
			<a href="index.html"><h1>WEB RCKT DESIGN</h1></a>
		</div>
		<nav>
			<div class="dropdown">
				<a href="index.html"><div class="dropbtn">Home</div></a>
			</div>
			<div class="dropdown">
				<a href="aboutus.html"><div class="dropbtn">About Us</div></a>
				<div class="dropdown-content">
					<a href="team.html">Team</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="services.html"><div class="dropbtn">Services</div></a>
				<div class="dropdown-content">
					<a href="projects.html">Projects</a>
					<a href="projects/project1.html">Project1</a>
					<a href="projects/project2.html">Project2</a>
					<a href="projects/project3.html">Project3</a>
					<a href="projects/project4.html">Project4</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="./forum/index.php"><div class="dropbtn">Community</div></a>
				<div class="dropdown-content">
					<a href="./forum/forum.php">Forum</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="contactus.php"><div class="dropbtn">Contact Us</div></a>
			</div>
			<?php
			if (isLoggedIn()){
					echo '<div class="dropdown"><div class="dropbtn">'."hi: ".$_SESSION['SESS_FIRST_NAME']." | ".'<a href="forum/logout.php">Logout</a></div>';
			} else {
			echo '
			<div class="dropdown">
				<div class="dropbtn"><a href="forum/login_form.php">Login</a></div>
			</div>';
			}
			?>
		</nav>
	</div>
</header>
<a id="pagetop"></a>
<main>
	<div class="findsocial">
		<div id="wrapper">
			<h1>CONNECT WITH US ON SOCIAL MEDIA!</h1>
				<a href="https://www.facebook.com/" class="fa fa-facebook" tabindex="7"></a>
				<a href="https://www.twitter.com/" class="fa fa-twitter" tabindex="8"></a>
				<a href="https://www.instagram.com" class="fa fa-instagram" tabindex="9"></a>
				<a href="https://www.youtube.com" class="fa fa-youtube" tabindex="10"></a>
				<a href="https://www.reddit.com" class="fa fa-reddit" tabindex="11"></a>
				<a href="https://linkedin.com/" class="fa fa-linkedin" tabindex="12"></a>
			<div id ="userinfo">
			<img id="contactimage" src="style/socialmedia.jpg" alt="Sample">
				<h2>CONTACT US!</h2>
					<form id="form" method="post" action="contact.php" onsubmit="return formValidate()">
						<div id = "textboxes">
							<label for="firstname">First name:</label>
							<div id="firstNameWrapper">
							<div id="firstNameError"></div>
							<input type="text" id="firstname" name="first_name" placeholder="First Name" tabindex="1" required>
							</div>
							<br>
							<label for="lastname">Last name:</label>
							<div id="lastNameWrapper">
							<div id="lastNameError"></div>
							<input type="text" id="lastname" name="last_name" placeholder="Last Name" tabindex="2"required>	
							</div>	
							<br>
							<label for="email">Email:</label>
							<div id="emailWrapper">
							<div id="emailError"></div>
							<input type="text" id="email" name="email" placeholder="Email Address" tabindex="3"required>
							</div>
							<br>
						</div>
							<label for ="message">Your message here:</label>
							<br>
							<br>
							<textarea id="message" name="message" rows="10" placeholder="Please write to us here!" tabindex="4"></textarea>
						<br>
							<input type="submit" value="Submit" tabindex="5" class="submitter">
							<input type="reset" value="Reset" tabindex="6" class="submitter">
					</form> 
				</div>
			</div>
	</div> 
<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="style/buttonup.png" alt="Back to Top"></a>
</main>
</div>
<footer>
	<div class="footerclmns">
		<ul id="footerclmn1">
			<li class="liheading">Contact Us</li>
			<li>Number</li>
			<li><a href="tel:685-987-8934">685-987-8934</a></li>
			<li>Address</li>
			<li>751 Takin Jerbs St.</li>
			<li>Email</li>
			<li><a href="mailto:rckt@rcktmail.com">rckt@rcktmail.com</a></li>
		</ul>
		<ul id="footerclmn2">
			<li class="liheading">Our Company<li>
			<li><a href="index.html">Home</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="services.html">Services</a></li>
			<li><a href="community.html">Community</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
		</ul>
	</div>
	<div id="copyright">
		<p><a href="sitemap.html">Site Map</a> &copy; 2017 Web RCKT Design <span>| All rights reserved.</span></p>
	</div>
<a id="validator" href="http://validator.w3.org/check?url=referer">W3C HTML 5 Validator</a>
</footer>
	<!-- Javascript for animated scroll-to-top -->
		<script src="js/scroll.js"></script>
	<!-- JavaScript for Info Check -->
		<script src="js/userlogin.js"></script>
	<!-- Javascript for Contact Us Form Validation -->
		<script src="js/contactus.js"></script>
</body>	
</html>