<?php include("starter.php"); ?>
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
<?php include("header.php"); ?>
<div class="parallax">

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
<?php include("footer.php"); ?>
	<!-- JavaScript for Info Check -->
		<script src="js/userlogin.js"></script>
	<!-- Javascript for Contact Us Form Validation -->
		<script src="js/contactus.js"></script>
</body>	
</html>