<?php

	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];
	

	$sql="SELECT * FROM $tbl_name, members WHERE id='$id' and members.member_id = 
		topic.member_id";
	
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

	$rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Forum</title>
<link href="css/forumstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../style/base.css">
<link rel="shortcut icon" href="../style/favicon.ico" type="image/x-icon">
<!-- Importing Google Font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include("forumheader.php"); ?>
<div class="parallax">

<a id="pagetop"></a>
<main>
	<div id="forumWrapper">
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
		<tr>
		<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
		</tr>

		<tr>
		<td class="responseposts" bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
		</tr>

		<tr>
		<td bgcolor="#F8F7F1"><strong>By : </strong><?php echo $rows['login']; ?></td>
		</tr>

		<tr>
		<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
		</tr>
		</table></td>
		</tr>
		</table>
		<BR>
		<?php
		$tbl_name2="response"; // Switch to table "response"

		$sql2="SELECT * FROM $tbl_name2 join members on members.member_id = 
				response.member_id and topic_id='$id'";
		$result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);

		while($rows=mysqli_fetch_array($result2)){
		?>
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		<tr>
		<td bgcolor="#F8F7F1"><strong>ID</strong></td>
		<td bgcolor="#F8F7F1">:</td>
		<td bgcolor="#F8F7F1"><?php echo $rows['id']; ?></td>
		</tr>
		<tr>
		<td width="18%" bgcolor="#F8F7F1"><strong>By</strong></td>
		<td width="5%" bgcolor="#F8F7F1">:</td>


		<td width="77%" bgcolor="#F8F7F1"><?php echo $rows['login']; ?></td>
		</tr>
		<tr>
		<td bgcolor="#F8F7F1"><strong>Response</strong></td>
		<td bgcolor="#F8F7F1">:</td>
		<td class="responseposts" bgcolor="#F8F7F1"><?php echo $rows['response']; ?></td>
		</tr>
		<tr>
		<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
		<td bgcolor="#F8F7F1">:</td>
		<td bgcolor="#F8F7F1"><?php echo $rows['datetime']; ?></td>
		</tr>
		</table></td>
		</tr>
		</table><br>

		<?php
		}
		((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
		?>

		<BR>
		<?php
			if(!isLoggedIn()) {
				echo "<p>Please log in to post comments!";
				echo "<br>";
				echo "<br>";
				echo '
				<a href="#" onclick="history.go(-1)">Go Back</a>
				';
				echo '
				</div>
<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="../style/buttonup.png" alt="Back to Top"></a>
</main>
</div>
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
			<li><a href="../index.php">Home</a></li>
			<li><a href="../aboutus.php">About Us</a></li>
			<li><a href="../services.php">Services</a></li>
			<li><a href="index.php">Community</a></li>
			<li><a href="../contactus.php">Contact Us</a></li>
		</ul>
	</div>
	<div id="copyright">
		<p><a href="../sitemap.php">Site Map</a> &copy; 2017 Web RCKT Design | All rights reserved.</p>
	</div>
<a id="validator" href="http://validator.w3.org/check?url=referer">W3C HTML 5 Validator</a>
</footer>
	<!-- Javascript for animated scroll-to-top -->
		<script src="../js/scroll.js"></script>
</body>
</html>

				';
				exit();
			}
		?>
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<form name="form1" method="post" action="add_response.php">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		<tr>
		<td valign="top"><strong>Response</strong></td>
		<td valign="top">:</td>
		<td><textarea name="response" cols="45" rows="3" id="answer"></textarea></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
		<td><input type="submit" name="Submit" value="Submit"z> <input type="reset" name="Submit2" value="Reset"></td>
		</tr>
		</table>
		</td>
		</form>
		</tr>
		</table>
		<div id="buttondiv">
		<a href="#" onclick="history.go(-1)">Go Back</a>
		</div>
	</div>
</main>
<div id="break">	
	<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="../style/buttonup.png" alt="Back to Top"></a>
</div>
</div>
<?php include("forumfooter.php"); ?>
</body>
</html>
