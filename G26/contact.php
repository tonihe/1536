<?php	
	
	$name = $_POST['first_name'] . " " . $_POST['last_name'];
	$to = "carlomendoza89@gmail.com";
	$subject = "Web RCKT Message";
	$txt = "Sender: " . $name . "\r\n" . $_POST['message'];
	$headers = "From: " . $_POST['email'];
	
	 mail($to,$subject,$txt,$headers);	
	 
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
<header>
	<div class="headerbox">
		<div id="banner">
			<a href="index.html"><img src="style/rocketLogo.png" alt="Rocket Logo"></a>
			<a href="index.html"><h1>WEB RCKT DESIGN</h1></a>
		</div>
		<nav>
			<div class="dropdown">
				<div class="dropbtn"><a href="index.html">Home</a></div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="aboutus.html">About Us  </a></div>
				<div class="dropdown-content">
					<a href="team.html">Team</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="services.html">Services</a></div>
				<div class="dropdown-content">
					<a href="projects.html">Projects</a>
					<a href="projects/project1.html">Project1</a>
					<a href="projects/project2.html">Project2</a>
					<a href="projects/project3.html">Project3</a>
					<a href="projects/project4.html">Project4</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="./forum/index.php">Community</a></div>
				<div class="dropdown-content">
					<a href="./forum/forum.php">Forum</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="contactus.html">Contact Us</a></div>
			</div>
		</nav>
	</div>
</header>
<a id="pagetop"></a>
<main>
	<div id ="sentmessage">
		<?php echo'Your message has been sent. We will get back to you as soon as possible.'; ?>
	</div>
	<div class="findsocial">
		<div id="wrapper">
			<h2>CONNECT WITH US ON SOCIAL MEDIA!</h2>
				<a href="https://www.facebook.com/" class="fa fa-facebook" tabindex="7"></a>
				<a href="https://www.twitter.com/" class="fa fa-twitter" tabindex="8"></a>
				<a href="https://www.instagram.com" class="fa fa-instagram" tabindex="9"></a>
				<a href="https://www.youtube.com" class="fa fa-youtube" tabindex="10"></a>
				<a href="https://www.reddit.com" class="fa fa-reddit" tabindex="11"></a>
				<a href="https://linkedin.com/" class="fa fa-linkedin" tabindex="12"></a>
			<div id ="userinfo">
			<img id="contactimage" src="style/sample.jpg" alt="Sample">
				<h2>CONTACT US!</h2>
					<form id="form" method="post" action="contact.php" onsubmit="return formValidate()">
						<div id = "textboxes">
							<div id="fullNameWrapper">
							<label for="firstname">First name:</label>
							<br>
							<div id="fullNameError"></div>
							<input type="text" id="firstname" name="first_name" placeholder="First Name" tabindex="1" required>
							<br>
							<br>
							<label for="lastname">Last name:</label>
							<br>
							<input type="text" id="lastname" name="last_name" placeholder="Last Name" tabindex="2"required>	
							</div>							
							<br>
							<div id="emailWrapper">
							<label for="email">Email:</label>
							<br>
							<div id="emailError"></div>
							<input type="text" id="email" name="email" placeholder="Email Address" tabindex="3"required>
							</div>
							<br>
						</div>
						<br>
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
		<p><a href="sitemap.html">Site Map</a> &copy; 2017 Web RCKT Design | All rights reserved.</p>
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