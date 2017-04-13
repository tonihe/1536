<?php include("starter.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/base.css">
	<link rel="stylesheet" href="style/aboutus.css">
	<link rel="shortcut icon" href="style/favicon.ico" type="image/x-icon">
	<!-- Importing Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
	<title>About Us</title>
</head>
<body>
<?php include("header.php"); ?>
<a id="pagetop"></a>

<div id="aboutustitle">
	<h1>ABOUT US</h1>
		<div id="tagline">
			<p>Hi, we're WEB <span>RCKT</span></P>
		</div>
</div>
<div class="blackbg">
	<div class="parallax"></div>
</div>
	<div id="textbox">
		<div id="textboxtext">
			<h2>Who Are We?</h2>
			<p>We are a dedicated team of software and web developers who put pride and passion into our work. All of us are CST students from the British Columbia Institute of Technology, where we have learned the skills necessary to succeed in today's tech-driven society.</p>
			<h2>Our Mission</h2>
			<p>Located in Vancouver, Canada, our dream is use the skills we learned in this city to help local businesses develop fantastic online communties. We want to help companies set up their first websites and social media networks.</p>
		</div>
		<img id="teampicture" src="style/designteam.jpg" alt="Picture of the team">
	</div>
<div class="parallax2"></div>
<div id="content2">
	<img id="teampicture2" src="style/designteam.jpg" alt="Picture of the team">
	<div id="text2">
		<h2>Come Check Out Our Team</h2>
		<p>
		Our family consists of experienced project managers, web designers, developers, and background specialists.<br><br>
		We work collaboratively with a wide range of clients to maximize the effectiveness of their online platforms in addition to providing their users with an awesome brand experience.<br>
		<br><br>Get to know us a little bit better!
		</p>
		<div id="teamlink">
			<a href="team.php" id="teambutton">
			<p>Come meet the family<img src="style/rocketpic.png" alt="Meet Our Team" width="45" height="45"></p>
			</a>
		</div>
	</div>
</div>
<div class="blackbg">
<div class="parallax3"><a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="style/buttonup.png" alt="Back to Top"></a></div>
</div>
<?php include("footer.php"); ?>
<!-- Javascript for animated scroll-to-top -->
	<script src="js/scroll.js"></script>
</body>	
</html>
