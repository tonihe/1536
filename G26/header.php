<header>
	<div class="headerbox">
		<div id="banner">
			<a href="index.php"><img src="style/rocketLogo.png" alt="Rocket Logo"></a>
			<a href="index.php"><h1>WEB RCKT DESIGN</h1></a>
		</div>
		<nav>
			<div class="dropdown">
				<a href="index.php"><div class="dropbtn">Home</div></a>
			</div>
			<div class="dropdown">
				<a href="aboutus.php"><div class="dropbtn">About Us</div></a>
				<div class="dropdown-content">
					<a href="team.php">Team</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="services.php"><div class="dropbtn">Services</div></a>
				<div class="dropdown-content">
					<a href="projects.html">Projects</a>
					<a href="projects/project1.php">Project1</a>
					<a href="projects/project2.php">Project2</a>
					<a href="projects/project3.php">Project3</a>
					<a href="projects/project4.php">Project4</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="forum/index.php"><div class="dropbtn">Community</div></a>
				<div class="dropdown-content">
					<a href="forum/forum.php">Forum</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="contactus.php"><div class="dropbtn">Contact Us</div></a>
			</div>
			<?php
			if (isLoggedIn()){
					echo '<div class="dropdown"><div class="dropbtn">'."hi: ".$_SESSION['SESS_FIRST_NAME']." | ".'<a href="forum/logout.php">Logout</a></div>';
			} else {
			echo '
			<div class="dropdown">
				<div class="dropbtn"><a href="forum/login_form.php">Login</a></div>
			</div>';
			}
			?>
		</nav>
	</div>
</header>