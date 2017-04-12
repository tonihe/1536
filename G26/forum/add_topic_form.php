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
		<title>Create topic</title>
		<link href="css/forumstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../style/base.css">
<link rel="shortcut icon" href="../style/favicon.ico" type="image/x-icon">
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
					<a href="../team.html">Team</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="../services.html">Services</a></div>
				<div class="dropdown-content">
					<a href="../projects.html">Projects</a>
					<a href="../projects/project1.html">Project1</a>
					<a href="../projects/project2.html">Project2</a>
					<a href="../projects/project3.html">Project3</a>
					<a href="../projects/project4.html">Project4</a>
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
			<?php
			if (isLoggedIn()){
					echo '<div class="dropdown"><div class="dropbtn">'."hi: ".$_SESSION['SESS_FIRST_NAME']." | ".'<a href="logout.php">Logout</a></div>';
			} else {
			echo '
			<div class="dropdown">
				<div class="dropbtn"><a href="login_form.php">Login</a></div>
			</div>';
			}
			?>
		</nav>
	</div>
</header>
<a id="pagetop"></a>
<main>
	<div id="forumWrapper">
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<form id="form1" name="form1" method="post" action="add_topic.php">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		<tr>
		<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
		</tr>
		<tr>
		<td width="14%"><strong>Topic</strong></td>
		<td width="2%">:</td>
		<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
		</tr>
		<tr>
		<td valign="top"><strong>Detail</strong></td>
		<td valign="top">:</td>
		<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
		</tr>
		</table>
		</td>
		</form>
		</tr>
		</table>
		<a class="backbutton" href="#" onclick="history.go(-1)">Go Back</a>
	</div>
<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="../style/buttonup.png" alt="Back to Top"></a>
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
		<script src="../js/scroll.js"></script>
</body>
</html>


