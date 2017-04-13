<?php include("starter.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/base.css">
	<link rel="stylesheet" href="style/sitemap.css">
	<link rel="shortcut icon" href="style/favicon.ico" type="image/x-icon">
	<!-- Importing Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
	<title>Sitemap</title>
</head>
<body>
<?php include("header.php"); ?>
<div class="parallax">
<a id="pagetop"></a>
<main>
<div id="map">
	<h2>Site Map</h2>
	<ul>
		<li><a href="index.php">Home Page</a></li>
		<li><a href="aboutus.php">About Us</a></li>
		<li><a href="services.php">Services</a></li>
		<li><a href="forum/community.php">Community</a></li>
		<li><a href="team.php">Team Page</a></li>
		<li><a href="contactus.php">Contract Us</a></li>
		<li><a href="forum/forum.php">Forum Page</a></li>
	</ul>	
	<h2>Our Projects</h2>
	<ul>
		<li><a href="projects/project1.php">VanTravels Website</a></li>
		<li><a href="projects/project2.php">Levels Night Club Website</a></li>
		<li><a href="projects/project3.php">Plains of Hiberia Website</a></li>
		<li><a href="projects/project4.php">Matcha Movement Website</a></li>
	</ul>
</div>
</main>
<div id="break">	
	<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="style/buttonup.png" alt="Back to Top"></a>
</div>
<?php include("footer.php"); ?>
</div>
</body>	
</html>