<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Accesorii</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h2 class="title">Accesorii</h2>
				<nav>
					<ul>
						<li><a href="home.php">Home</a></li>
                        <li><a href="pagina1.php">Haine</a></li>
						<li><a href="pagina2.php">Incaltaminte</a></li>
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

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<form action="pagina3.php" method="post" >
								<input type="text" name="search" placeholder="Search..."><br>

								<input type="submit" value="Search" name="submit">
							</form>
						</div>
					</section>

			</div>

			<?php

				include 'connection.php';

				
                $search_term = '';
				if(isset($_POST["search"])){
	    			$search_term= mysqli_real_escape_string($con, $_POST["search"]);
				}
        		$sql = "SELECT * FROM images";
        		if(!empty($search_term)){
        		    $sql .= " WHERE titlu='{$search_term}'";
        		}

        		$res = mysqli_query($con, $sql) or die(mysqli_error($con));
        		$nr = 0;
        		$nr2 = 0;
        		echo "<table border='1'>
        			<tr>
        				<th>ID</th>
        				<th>Image</th>
        				<th>Title</th>
        			</tr>";
        		while($row = mysqli_fetch_array($res)){
        		    $nr++;
        		}
        		mysqli_data_seek($res, 0); 
				while($row = mysqli_fetch_array($res))
				{
					echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td> <img src='".$row['image']."' height='100px' width='100px'  ></td>";
					echo "<td>" . $row['titlu'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			?>
 
			<div>
				<form action="pagina3.php" method="post" >
					<input type="submit" value="Reset" name="reset">
				</form>
			</div>
									
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