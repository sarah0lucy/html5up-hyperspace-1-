<?php
session_start();
?>

<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Ura!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

    	<!-- Header -->
			<header id="header">
				<nav>
					<ul>
					        <li><a href="index.php">Welcome!</a></li>
							<li><a href="home.php">Home</a></li>
							<li><a href="pagina1.php">Haine</a></li>
							<li><a href="pagina2.php">Incaltaminte</a></li>
							<li><a href="pagina3.php">Accesorii</a></li>
						
					</ul>
				</nav>
			</header>
            <br><br>

<div class="navbar">
        <span id="username">
            <?php
            if (isset($_SESSION["username"])) {
                echo 'Utilizator inregistrat cu numele : '."<span style='color:black';>".$_SESSION["username"]."</span>";
            } else {
                echo 'Utilizator neautentificat';
            }
            ?>
        </span>
    </div>
    <br><br>

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
