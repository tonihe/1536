<header>
	<div class="headerbox">
		<div id="banner">
			<a href="../index.php"><img src="../style/rocketLogo.png" alt="Rocket Logo"></a>
			<a href="../index.php"><h1>WEB RCKT DESIGN</h1></a>
		</div>
		<nav>
			<div class="dropdown">
				<div class="dropbtn"><a href="../index.php">Home</a></div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="../aboutus.php">About Us  </a></div>
				<div class="dropdown-content">
					<a href="../team.php">Team</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="../services.php">Services</a></div>
				<div class="dropdown-content">
					<a href="project1.php">VanTravels</a>
					<a href="project2.php">Levels Club</a>
					<a href="project3.php">Plains of Hiberia</a>
					<a href="project4.php">Matcha Movement</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="../forum/community.php">Community</a></div>
				<div class="dropdown-content">
					<a href="../forum/forum.php">Forum</a>
				</div>
			</div>
			<div class="dropdown">
				<div class="dropbtn"><a href="../contactus.php">Contact Us</a></div>
			</div>
			<?php
			if (isLoggedIn()){
					echo '<div class="dropdown"><div class="dropbtn">'."hi: ".$_SESSION['SESS_FIRST_NAME']." | ".'<a href="../forum/logout.php">Logout</a></div>';
			} else {
			echo '
			<div class="dropdown">
				<div class="dropbtn"><a href="../forum/login_form.php">Login</a></div>
			</div>';
			}
			?>
		</nav>
	</div>
</header>