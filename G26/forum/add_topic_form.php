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
<?php include("forumheader.php"); ?>
<div class="parallax">

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
</div>
<?php include("forumfooter.php"); ?>
</body>
</html>


