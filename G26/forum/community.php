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
<link rel="shortcut icon" href="../style/favicon.ico" type="image/x-icon">
<title>Community</title>
<!-- Importing Google Font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
</head>

<body>
<?php include("forumheader.php"); ?>
<a id="pagetop"></a>
<div id="communitytitle">
	<h1>COMMUNITY</h1>
		<div id="tagline">
			<p>Come meet some new <span>friends</span></P>
		</div>
</div>
<div class="blackbg">
	<div class="parallax"></div>
</div>
<div id="communitycontent">
	<div id="content">
		<div id= "centerpic">
			<img id= "communityimage" src="../style/communitylol.jpg" alt="Design and Development">
		</div>
		<div id="left">
			<h2>Welcome to the Web RCKT <span>Community!</span></h2>
			<p>Have a question about web design?</p>
			<p>Want to know about the progress of a website that we're working on for you?</p>
			<p>Feel free to ask here at our Community Forum!</p>
			<p>We are constantly checking our forum and answering questions.</p>
			<p>Come join us and talk with us, as well as other members of our community!</p>
		</div>
	</div>
	<div id="right">
		<div class="box">
			<h2 style="margin-top:17px">Recent <span>Entries</span></h2>
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
</div>

<div class="blackbg">
	<div class="parallax2">	
		<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="../style/buttonup.png" alt="Back to Top"></a>
	</div>
</div>
<?php include("forumfooter.php"); ?>
</body>
</html>
