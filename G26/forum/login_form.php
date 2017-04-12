<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login Form</title>
<link href="css/loginmodule.css" rel="stylesheet" type="text/css" />
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
		</nav>
	</div>
</header>
<a id="pagetop"></a>
<main>
	<div id="formWrapper">
	<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
	<h2> Log in to our community forum </h2>
		<form id="loginForm" name="loginForm" method="post" action="login.php">
		  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
			<tr>
			  <td width="112"><b>Login</b></td>
			  <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
			</tr>
			<tr>
			  <td><b>Password</b></td>
			  <td><input name="password" type="password" class="textfield" id="password" /></td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><input type="submit" name="Submit" value="Login" /></td>
			</tr>
		  </table>
		</form>
		<br>
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
