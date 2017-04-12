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
<title>Login Form</title>
<link href="css/loginmodule.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../style/base.css">
<link rel="shortcut icon" href="../style/favicon.ico" type="image/x-icon">
<!-- Importing Google Font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include("forumheader.php"); ?>
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
<?php include("forumfooter.php"); ?>
</body>
</html>
