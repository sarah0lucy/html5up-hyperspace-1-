<?php

session_start();

include 'connection.php';
if(!isset($_POST["submit"])){
    $sql="SELECT * FROM images WHERE ID='{$_GET['id']}'";
    $result=mysqli_query($con,$sql);
    $record=mysqli_fetch_array($result);
}else{
    $sql2="SELECT * FROM images WHERE id='{$_POST['id']}'";
    $result2=mysqli_query($con,$sql2);
    $rec=mysqli_fetch_array($result2);
    $title=$_POST['titlu'];
    $descriere=$_POST['descriere'];
    if(isset($_POST['image'])){
        $target="./images/".basename($_FILES['image']['name']);
    }else{
        $target=$rec['image'];
    }
    $sql1="UPDATE images SET titlu='{$title}', descriere='{$descriere}', image='{$target}' WHERE id='{$_POST['id']}'";
    mysqli_query($con,$sql1)or die(mysqli_error($con));
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    header('location:admin.php');
}
?>

<h1>Editati inregistrearea: </h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    Titlu: <br/><input type="text" name="titlu" value="<?php echo $record['titlu'];?>"><br/>
    Descriere: <br/><textarea name="descriere" value="<?php echo $record['descriere'];?>"></textarea><br/>
    Image: <br/><input type="file" name="image" value="<?php echo $record['image'];?>"><br/>
    <img src="<?php echo $record['image'] ;?>"><br/>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
    <input type="submit" name="submit" value="Edit"/>
</form>


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

