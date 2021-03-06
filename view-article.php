<!DOCTYPE html>
<head>
	<title>IMM News Network - Articles</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Articles">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
	<link rel="stylesheet" href="css/main2.css"/>
	<link rel="stylesheet" href="css/logo.css"/>
</head>
</html>

<header>
	<div class="card-container">
	  <div class="card">
		<div class="side"><img id="logo" src="./images/logos/immlogo.png" width="250" alt="Logo"></div>
		<div class="side back"><img id="logo" src="./images/logos/immlogo.png" width="250" alt="Logo"></div>
	  </div>
	</div>
	<a href="home-page.php">Go Back to Home Page</a>
</header></br>

<?php
session_start();
if(isset($_SESSION["personId"])){
?>

<?php
	$articleId = $_GET["articleId"];

	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `article`
	WHERE `article`.`articleId` = $articleId;");

	$stmt->execute();

	$row = $stmt->fetch(PDO::FETCH_ASSOC);?>
		<img src="uploads/<?php echo($row["image"]); ?>" width="500" alt="image"><?php
echo("<p>");

	echo("<h1>");
		echo($row["title"]);
	echo("</h1>");

	echo("<h2>");
		echo("<label>By: </label>".$row["author"]);
	echo("</h2>");

	echo("<h3>");
		echo("<label>Published: </label>".$row["date"]);
	echo("</h3>");

echo("<p>");
	echo($row["content"]);
echo("</p>");

?>
	<p><a href="<?php echo($row['articleLink']);?>" target = "_blank">External Article Link</a>
<p>
	<form action = "like.php?articleId=<?php echo($row["articleId"]);?>" method="POST" enctype="multipart/form-data">
		<input type = "hidden" value = "<?php echo ($personId);?>">
		<input type = "hidden" value = "<?php echo ($articleId);?>">
		<input type = "submit" name= "like" value = "Like">
	</form>
</p>
<p>
	<form action = "unlike.php?articleId=<?php echo($row["articleId"]);?>" method="POST" enctype="multipart/form-data">
		<input type = "hidden" value = "<?php echo ($personId);?>">
		<input type = "hidden" value = "<?php echo ($articleId);?>">
		<input type = "submit" name = "unlike" value = "Unlike">
	</form>
</p>

<?php
$personId = $_SESSION["personId"];

	$stmt = $pdo->prepare("SELECT * FROM `likes`
	WHERE `likes` . `personId`= $personId
	AND `likes`.`articleId` = $articleId");

	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);?>
	<img src="icon/<?php echo($row["likeicon"]); ?>" width="50" alt="likeicon">

<?php

	$stmt = $pdo->prepare("SELECT count(*) FROM `likes`
	WHERE `likes`.`articleId` = $articleId");

	$stmt->execute();
	$row = $stmt->fetchColumn();?>

	<p><?php echo $row?> total likes for this article</p>

<?php

}else{?>
	<p> Please Login to view Full Articles.
		<a href = "login-page.php"> Login Here </a>
</p>
<?php

}
?>

<br><button id="assist">Reading Assistance</button>
<script src="js/assist.js"></script>

<footer>
<p id="cookies" onclick="myFunction()">Accept Cookies.</p>
</footer>
<script src="js/cookies.js"></script>

</html>
