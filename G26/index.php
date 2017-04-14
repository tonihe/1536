<?php include("starter.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/index.css">
	<link rel="stylesheet" href="style/base.css">
	<link rel="shortcut icon" href="style/favicon.ico" type="image/x-icon">
	<!-- Importing Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
	<title>Web RCKT</title>
</head>
<body>
<?php include("header.php"); ?>
<a id="pagetop"></a>

<div id="large-header">
	<canvas id="demo-canvas"></canvas>
	<h1 class="main-title">YOUR WEBSITE<br>IS YOUR ONLINE<br>PRESENCE AND REPUTATION</h1>
</div>
	<iframe id="vimeo_player" src="https://player.vimeo.com/video/213006965?api=1&player_id=vimeo_player&autoplay=1&loop=1&color=ffffff" width="1280" height="680"></iframe>
	<div id="homecontentbg">
		<div id="homepagecontent">
		<div id="pagetext">
			<div id="welcome">
				<h3>Welcome to Web RCKT Design.</h3>
				<p>
				We are a web design and development team that is passionate about bringing your dream to life.
				Web RCKT Design is located on the "sunny" shores of Vancouver, Canada, where we help local businesses and companies build online presences to connect to their users and customers.<br><br>
				Here at Web RCKT, our team prides ourselves with bringing to the table expert skills and local connections to provide the best services possible.<br><br>
				Come check out our work!
				</p>
			</div>
		</div>
		<div id="slideshow">
			<div class="carouselimage">
				<a href="projects/project1.php"><img src="style/project1img1.png" alt="VanTravel link" height=455 width=750></a>
			</div>
			<div class="carouselimage">
				<a href="projects/project2.php"><img src="style/levelshome.gif" alt="Levels Club link" height=455 width=750></a>
			</div>
			<div class="carouselimage">
				<a href="projects/project3.php"><img src="style/fantasysample.gif" alt="Hiberia link" height=455 width=750></a>
			</div>
			<div class="carouselimage">
				<a href="projects/project4.php"><img src="style/matchasocial.gif" alt="Matcha link" height=455 width=750></a>
			</div>
		</div>
		</div>
	</div>
	<div class="parallax2">
		<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="style/buttonup.png" alt="Back to Top"></a>	
	</div>
<?php include("footer.php"); ?>
	<!-- Javscript for animated background -->
		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script>
	<!-- JavaScript for embedding muted video -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
		<script src="js/muteautoplay.js"></script>
	<!-- Javascript for animated scroll-to-top -->
		<script src="js/scroll.js"></script>
		<script src="js/carousel.js"></script>
</body>	
</html>
