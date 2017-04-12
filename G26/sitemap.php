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
<a name="pagetop"></a>
<main>
	<h2>Site Map</h2>
	<ul>
		<li><a href="index.html">Home Page</a></li>
		<li><a href="aboutus.html">About Us</a></li>
		<li><a href="services.html">Services</a></li>
		<li><a href="forum/community.php">Community</a></li>
		<li><a href="team.html">Team Page</a></li>
		<li><a href="contactus.html">Contract Us</a></li>
		<li><a href="forum/forum.php">Forum Page</a></li>
	</ul>	
	<h2>Our Projects</h2>
	<ul>
		<li><a href="projects/project1.html">VanTravels Website</a></li>
		<li><a href="projects/project2.html">GnS Events</a></li>
		<li><a href="projects/project3.html">Plains of Hiberia Website</a></li>
		<li><a href="projects/project4.html">Matcha Movement Website</a></li>
	</ul>	
	<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="style/buttonup.png" alt="Back to Top"></a>
</main>
<?php include("footer.php"); ?>
</body>	
</html>