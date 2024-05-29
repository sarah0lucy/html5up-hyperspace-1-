<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Haine</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h2 class="title">Haine</h2>
				<nav>
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="pagina2.php">Incaltaminte</a></li>
						<li><a href="pagina3.php">Accesorii</a></li>
						<?php
									if(!isset($_COOKIE['username']) && !isset($_COOKIE['password'])) {
								?>
								<li><a href="pagina4.php" style="color:pink">Sign Up</a></li>
								<li><a href="login.php" style="color:coral">Log In</a></li>
								<?php
									} elseif (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
								?>
								<li><a href="logout.php" style="color:brown">Log Out</a></li>
								<?php
									}
								?>
					</ul>
				</nav>
			</header>
<br>
			<section>
				
				<div class="box alt">
					<div class="row gtr-uniform">
						<div class="col-4"><span class="image fit"><a href="tricou.php"><img src="images/tricou.jpg" alt="tricou" width="450" height="560"/></a></span></div>
						<div class="col-4"><span class="image fit"><a href="sacou.php"><img src="images/sacou.jpg" alt="sacou" width="450" height="560"/></a></span></div>
						<div class="col-4"><span class="image fit"><a href="ie.php"><img src="images/ie.jpg" alt="ie" width="450" height="560"/></a></span></div>
			</section>
			
		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>