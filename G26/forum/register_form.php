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
<title>Register Form</title>
<link href="css/loginmodule.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../style/base.css">
<link rel="shortcut icon" href="../style/favicon.ico" type="image/x-icon">
<!-- Importing Google Font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
<script>
	function show(id) {
		document.getElementById(id).style.visibility = "visible";
	}
	function hide(id) {
		document.getElementById(id).style.visibility = "hidden";
  }
</script>
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

<h2>Please sign up and join our community!</h2>
<p>(all fields are required)</p>
<form id="registerForm" name="registerForm" method="post" action="register.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>First Name </th>
      <td><input name="fname" type="text" class="textfield" id="fname" onfocus="show('namehelp')" onblur="hide('namehelp')"/></td>
    </tr>
    <tr>
      <th>Last Name </th>
      <td><input name="lname" type="text" class="textfield" id="lname" onfocus="show('namehelp')" onblur="hide('namehelp')"/></td>
    </tr>
    <tr>
      <th width="124">Login</th>
      <td width="168"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><input name="password" type="password" class="textfield" id="password" onfocus="show('passwordhelp')" onblur="hide('passwordhelp')"/></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>
<a class="backbutton" href="#" onclick="history.go(-1)">Go Back</a>
<div class = "reminder">
	<p id="namehelp">Names can only contain upper or lower case letters</p>
	<p id="passwordhelp">Password must be at least 6 characters long, contain only letters and numbers, and contain at least one letter.</p>
</div>
</div>
<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="../style/buttonup.png" alt="Back to Top"></a>
</main>
<?php include("forumfooter.php"); ?>
</html>
