<!DOCTYPE html>
<head>
	<title>IMM News Network - About Page</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - About Page">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
	<link rel="stylesheet" href="css/main2.css"/>
</head>
</html>

<?php
	include("includes/header.html");
?>

<html>
	<h2>About Page</h2>
</html>

<?php
	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `about`");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

	echo("<p>");
		echo($row["content"]."<br>");?>
<?php
	echo("</p>");
}
?>

<br><button id="assist">Reading Assistance</button>
<script src="js/assist.js"></script>

<footer>
<p id="cookies" onclick="myFunction()">Accept Cookies.</p>
</footer>
<script src="js/cookies.js"></script>
