<?php
	include 'functions.php';
	require_once('config.php');
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
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<script type="text/javascript" src="js/textsizer.js"></script>
	<script type="text/javascript" src="js/rel.js"></script>
<link rel="stylesheet" href="../style/base.css">
<link rel="stylesheet" href="../style/community.css">
<link rel="shortcut icon" href="../style/favicon.ico" type="image/x-icon">
<title>Community</title>
<!-- Importing Google Font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
</head>

<body>
<header>
	<div class="headerbox">
		<div id="banner">
			<a href="../index.html"><img src="../style/rocketLogo.png" alt="Rocket Logo"></a>
			<a href="../index.html"><h1>WEB RCKT DESIGN</h1></a>
		</div>
		<nav>
			<div class="dropdown">
				<div class="dropbtn"><a href="../index.html">Home</a></div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="../aboutus.html">About Us  </a></div>
				<div class="dropdown-content">
					<a href="team.html">Team</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="../services.html">Services</a></div>
				<div class="dropdown-content">
					<a href="projects.html">Projects</a>
					<a href="projects/project1.html">Project1</a>
					<a href="projects/project2.html">Project2</a>
					<a href="projects/project3.html">Project3</a>
					<a href="projects/project4.html">Project4</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="index.php">Community</a></div>
				<div class="dropdown-content">
					<a href="forum.php">Forum</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="../contactus.html">Contact Us</a></div>
			</div>
		</nav>
	</div>
</header>
<a id="pagetop"></a>
<main>
	<div id="content">
	<div style="float: right;"><a href="javascript:ts('body',1)">[+]</a> | <a
	href="javascript:ts('body',-1)">[-]</a></div>
	<div id="left">
	<h2>Welcome to the Web RCKT Community!</h2>
	<p>Have a question about web design?</p>
	<p>Want to know about the progress of a website that we're working on for you?</p>
	<p>Feel free to ask here at our Community Forum!</p>
	<p>We are constantly checking our forum and answering questions.</p>
	<p>Come join us and talk with us, as well as other members of our community!</p>
	
	</p>
	</div>
	<div id="right">
		<div class="box">
			<h2 style="margin-top:17px">Recent Entries</h2>
			<ul>
			<?php
				$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
				$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
				$count = min(5, mysqli_num_rows($result));
				if($count==0)
					echo "<li>No topics</li>";
				else
					for($i=0; $i < $count; $i++){
						$row=mysqli_fetch_array($result);
						echo '<li><a href="view_topic.php?id='.$row['id'].'">'.$row['topic'].'</a></li>';
					}
			?>
			</ul>
			<?php
				if (isLoggedIn()){
					echo "Welcome: ".$_SESSION['SESS_FIRST_NAME']."<br/>";
					echo '<a href="logout.php">Logout</a><br/>';
					echo '<a href="forum.php">Go to forum</a><br/>';
					echo '>><a href="add_topic_form.php">Create new topic</a>';
				} else {
					echo '<a href="login_form.php">Login</a><br/>';
					echo '<a href="register_form.php">New user?</a>';
				}
			?>
		</div>
	</div>
	<div id="clear"></div></div>
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
		<p><a href="../sitemap.html">Site Map</a> &copy; 2017 Web RCKT Design | All rights reserved.</p>
	</div>
<a id="validator" href="http://validator.w3.org/check?url=referer">W3C HTML 5 Validator</a>
</footer>
	<!-- Javascript for animated scroll-to-top -->
		<script src="js/scroll.js"></script>
</body>
</html>
