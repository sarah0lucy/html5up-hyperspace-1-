<?php
session_start();

$_SESSION['username']='';

function died($error){
    //your error code can go here
    echo "We are verry sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear bellow.<br /><br />";
    echo $error."<br/><br/>";
    echo "Please go back and fix these errors <br/><br/>";
    die();
}
//validation expected data exists
if(!isset($_POST['username'])|| !isset($_POST['captcha'])){
    died("We are verry sorry, but there appears to be a problem with the form you submitted. ");
}

$text=$_POST['username']; //required
$email=$_POST['email'];
$password=$_POST['password'];
$captcha=$_POST['captcha']; //required
$correctsum=$_POST['correctsum']; //required
$error_message="";
$string_exp="/^[A-Za-z .'-]+$/";

$errors=[];


// validare Username
if (empty($text)) {
    $errors[] = "Numele de utilizator este obligatoriu.";
} elseif (!preg_match("/^[a-zA-Z0-9_]{6,20}$/", $text)) {
    $errors[] = "Numele de utilizator trebuie să aibă între 6 și 20 de caractere și să conțină doar litere, cifre și underscore.";
	
}else{
	$_SESSION['username']=$text;
}

// validare E-mail
if (empty($email)) {
    $errors[] = "Email-ul este obligatoriu.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email-ul nu este valid.";
}

// Validare parolă
if (empty($password)) {
    $errors[] = "Parola este obligatorie.";
} elseif (!preg_match("/^[a-zA-Z0-9_]{6,15}$/", $password)) {
    $errors[] = "Parola trebuie să aibă cel puțin 6 caractere, acestea fiind a-z, A-Z, 0-9, si _ ";
}

//verificare capchea
if (!isset($_POST['captcha'])){
    $errors[] = "Capchea este obligatorie.";
} elseif ($_POST['captcha']!=$_POST['correctsum']){
    $errors[] = "Suma nu e corecta :( .";
}

// Afișăm erorile daca acestea exista
if (!empty($errors)) {
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
} else{
    header('Location: successignin.php');
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
