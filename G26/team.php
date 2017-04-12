<?php include("starter.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/base.css">
	<link rel="stylesheet" href="style/team.css">
	<link rel="shortcut icon" href="style/favicon.ico" type="image/x-icon">
	<!-- Importing Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,800' rel='stylesheet' type='text/css'>
	<title>Team</title>
</head>
<body>
<?php include("header.php"); ?>
<div class="parallax">
<a id="pagetop"></a>

<main>
	<div id="textbox">
	<h2>Meet the Team!</h2>
		<p>
		Hi, we're Web RCKT Design, a creative agency that wants to bring excellent web design and online communities to the BC Lower Mainland area. Our small team is made up of multi-talented and skilled designers, developers, and managers, who all share in producing the best content possible.<br><br>
		Our team relies on our strong work ethic to not only get projects done, but to push ourselves to overcome challenges, follow processes, and produce work that in the end, we are proud of.
		</p>
	</div>
	<table id="teamProfiles">
		<tr>
			<td id="Raly">
				<img id="ralypic" src="style/sample.jpg" alt="raly" width="350" height="300">
				<h3>Raly</h3>
				<h4>Executive Content Manager</h4>
				<p>Born into a family of curtain inspectors, Raly escaped his family business to become a door-to-door vacuum salesman. Evidently it did not work out, so he decided to come into the CST program.</p>
			</td>
			<td id="Carlo">
				<img id="carlopic" src="style/sample.jpg" alt="Carlo" width="350" height="300">
				<h3>Carlo</h3>
				<h4>Database Administrator</h4>
				<p>A former professional card player and award winning recruiter, Carlo has translated his organizational skills and people skills to create an awesome forum for the Web RCKT community.</p>
			</td>
		<tr>
			<td id="Kevin">
				<img id="kevinpic" src="style/sample.jpg" alt="Kevin" width="350" height="300">
				<h3>Kevin</h3>
				<h4>Team Lead and Editor</h4>
				<p>
				Passionate about software development and design, Kevin is driven by problems that need to be solved. Once that feeling hits his brain, he wont stop until the job is done.
				</p>
			</td>
			<td id="Toni">
				<img id="tonipic" src="style/sample.jpg" alt="Toni" width="350" height="300">
				<h3>Toni</h3>
				<h4>Creative Director</h4>
				<p>
				Toni was on her way to Hogwarts, then she realized being magical is boring so she decided to live under the alias of Toni and lead a Mugglelife much to the dismay of her overbearing Slytherin Alumni parents. 
				</p>
			</td>	
	</table>
<a id="scrollbutton" href="#pagetop" onclick="scrollToTop();return false"><img src="style/buttonup.png" alt="Back to Top"></a>	
</main>
</div>
<?php include("footer.php"); ?>
	<!-- Javascript for animated scroll-to-top -->
		<script src="js/scroll.js"></script>
</body>	
</html>