<?php

session_start();

$_SESSION["username"]="";
$_SESSION["password"]="";

$_SESSION["AdminUsername"]= "admin";
$_SESSION["AdminPassword"]= "admin";


if(isset($_POST["username"]) && isset($_POST["password"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $_SESSION["username"]=$username;
    $_SESSION["password"]=$password;

    if($username == $_SESSION["AdminUsername"] && $password == $_SESSION["AdminPassword"]){
        header("Location:admin.php");
    } else {
        header("Location:index.php");
    }
}


// REMEMBER ME 

if((isset($_POST['username'])) && (isset($_POST['password']))){
    if(($_POST['username']==$username) && ($_POST['password']==$password)){
        if(isset($_POST['remember'])){
         
            setcookie('username', $_POST['username'], time()+60*60*24);
            setcookie('password', md5($_POST['password']), time()+60*60*24);
        }else {            
            setcookie('username', $_POST['username'],false);
            setcookie('password', md5($_POST['password']),false);
           
        }
    } 
}


?> 	
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

        <section class="wrapper style1 fade-up">
						<div class="inner">
								
							<h2>Login</h2>
							
							<div>
								<section>
									<form method='post' action="login.php">
										<div class="fields">
											<div class="field half">
												<label for="username">Username</label>
												<input type="text" name="username" id="username" required/>
											</div>
											<div class="field half">
												<label for="password">Parola</label>
												<input type="password" name="password" id="password" required/>
											</div>
                                            <div class="field">
                                                <!-- Remember me -->
												<input type="checkbox" id="demo-human" name="remember">
												<label for="demo-human">Remember me</label><br/><br/>
												
												<input type="submit" name="submit" value="Trimite"/>

                                                		
											</div>	
										</div>
									</form>
								</section>
							</div>	
                        </div>       
				</section>

					<br>
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