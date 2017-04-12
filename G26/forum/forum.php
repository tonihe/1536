<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	
	$sql="SELECT * FROM $tbl_name, members where members.member_id = 
		topic.member_id ORDER BY id DESC";
	
	// ORDER BY id DESC is order result by descending
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
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
	<div id="forum">
		<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
		<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
		<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
		<td width="7%" align="center" bgcolor="#E6E6E6"><strong>By</strong></td>
		</tr>

		<?php
		while($rows=mysqli_fetch_array($result)){ // Start looping table row
		?>

		<tr>
		<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
		<td class="forumposts" bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic'] ?></a><span class="preview"> <br><br> <?php echo $rows['detail']; ?> </span></td>
		<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
		<td align="center"  bgcolor="#FFFFFF"><?php echo $rows['login']; ?></td>
		</tr>

		<?php
		// Exit looping and close connection
		}
		((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
		?>
		<tr>
		<td id="newtopicrow" colspan="5" align="right" bgcolor="#E6E6E6"><a href="add_topic_form.php"><strong>Create New Topic</strong> </a></td>
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
