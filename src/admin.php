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


    <div id="wrapper">
        <section id="main" class="wrapper">
            <div class="inner">
                <h1 class="major"><?php echo "Bun venit: "  ."<span style='color:black';>".$_SESSION["AdminUsername"]."</span>"?></h1>
                <p> Bine ai revenit!  Continua shoppingul:  <a href="home.php" style="color: pink"> Home </a></p>
            </div>
        </section>

</div>

            <form method="post" action="save.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <input type="text" name="titlu" placeholder="Titlu:">
                </div>
                <div>
                    <textarea name="descriere" rows="3" cols="50" placeholder="Descriere:"></textarea>
                </div>
                <div>
                    <input type="submit" name="upload" value="Upload Image">
                </div>
            </form>
            <br>

<?php
    include 'connection.php';
    $sql='SELECT * FROM images; ';
    $query= mysqli_query($con,$sql)or die(mysqli_error($con));
?>
    <table width="50%" cellpadding="4" cellspace="4" rules="rows">
            <tr>
                <th>Imagine</th>
                <th>Nume</th>
                <th>Descriere</th>
            </tr>
        <?php while($row=mysqli_fetch_array($query)){?>
            <div>
            <tr style="border-bottom: 1px solid black;">
            <td><img src="<?php echo $row['image'];?>" width="300" height="300"></td>
            <td><?php echo $row['titlu'];?></td>
            <td><?php echo $row['descriere'];?></td>
            <td>
                <?php echo "<a href=\"view.php?id=".$row['id']."\">View</a> <a href=\"edit.php?id=".$row['id']."\">Edit</a> <a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
            </td>
        </tr>
        </div>
    <?php } ?>

    </table>

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


    