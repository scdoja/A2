<head>
	<title>IMM News Network - Home Page</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Home Page">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
	<link rel="stylesheet" href="css/main.css"/>
	<link rel="stylesheet" href="css/logo.css"/>
</head>
</html>



<header>
	<nav>
		<div class="card-container">
			<div class="card">
				<div class="side"><img id="logo" src="./images/logos/immlogo.png" width="250" alt="Logo"></div>
				<div class="side back"><img id="logo" src="./images/logos/immlogo.png" width="250" alt="Logo"></div>
			</div>
		</div>
		<a href="home-page.php">Home Page</a>   |
		<a href="about-page.php">About Page</a> |
		<a href="contact-page.php">Contact Page</a> |
		<a href="register-page.php">Register</a>   |
		<a href="login-page.php">Login</a> |
		<a href="logout-page.php">Logout</a>
	</nav>
</header>
<!DOCTYPE html>
<body>
<h1>Homepage</h1>
    <h2>Welcome to IMM News Network</h2>
    	<h3>Sheridan College's News Network for all things Interactive! Browse from Industry, Technical and Career articles content.</h3>

<section class="feature">
<?php
    include('includes/db-config.php');
?>

<?php
    $stmt = $pdo->prepare("SELECT * FROM `article`
    WHERE `article`.`feature` = 1");

    $stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo("<h2>Featured Article</h2>");
?>
    <img id="feature" src="uploads/<?php echo($row['image']);?>" width="350"/></html><br>
<?php
	echo("<label>Article Category:</label>".$row["category"]."<br><label>Article Title:</label>".$row["title"]."<br><label>Article Preview:</label>".$row["preview"]."<br><label>Article Date:</label> ".$row["date"]);
?>
    <br><a href="<?php echo($row['articleLink']);?>" target = "_blank">External Article Link</a><br>
    <br><a href="public-view-article.php?articleId=<?php echo($row["articleId"]); ?>"> View Public Verison</a>
	<a href="view-article.php?articleId=<?php echo($row["articleId"]); ?>"> View Full Article</a>
<?php

}?>
</section>

<section class="articles">

<?php
	include('includes/db-config.php');
?>

<section class="article">
<h2 id = "text">Technical Articles</h2>
<?php
	$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'Technical'");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo("<div class='separticles'");
?>
	<br><img src="uploads/<?php echo($row['image']);?>" width="350"/>

<?php
	echo("
		<p class='author'><label>Author:</label> ".$row["author"]."
		<p><label>Article Title:</label>".$row["title"]."
		<p><label>Article Preview:</label> ".$row["preview"]."
		<p><label>Article Date:</label> ".$row["date"]);?>

    	<br><a href="<?php echo($row['articleLink']);?>" target = "_blank">External Article Link</a><br>
        <br><a href="public-view-article.php?articleId=<?php echo($row["articleId"]);?>">View Public Verison</a>
        <a href="view-article.php?articleId=<?php echo($row["articleId"]);?>"> View Full Article</a></br>

<?php
	echo("</div>");
}?>
</section>


<section class="article">
<h2>Career Articles</h2>
<?php
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'Career'");

    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo("<div class='separticles'");
?>
    <br><img src="uploads/<?php echo($row['image']);?>" width="300"/>

<?php
    echo("
        <p class = 'author2'><label>Author:</label> ".$row["author"]."<br>
        <p><label>Article Title:</label>".$row["title"]."<br>
        <p><label>Article Preview:</label> ".$row["preview"]."<br>
        <p><label>Article Date:</label> ".$row["date"]);?>

<br><a href="<?php echo($row['articleLink']);?>" target = "_blank">External Article Link</a><br>
<br><a href="public-view-article.php?articleId=<?php echo($row["articleId"]); ?>"> View Public Verison</a>
<a href="view-article.php?articleId=<?php echo($row["articleId"]); ?>">View Full Article</a></br>

<?php
	echo("</div>");
}?>
</section>



<section class="article">
<h2>Industry Articles</h2>
<?php
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'Industry'");

    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo("<div class='separticles'");
?>
    <br><img src="uploads/<?php echo($row['image']);?>" width="300"/>

<?php
    echo("
        <p><label>Author:</label> ".$row["author"]."
        <p><label>Article Title:</label>".$row["title"]."
        <p><label>Article Preview:</label> ".$row["preview"]."
        <p><label>Article Date:</label> ".$row["date"]);?>

<br><a href="<?php echo($row['articleLink']);?>" target = "_blank">External Article Link</a><br>
<br><a href="public-view-article.php?articleId=<?php echo($row["articleId"]); ?>"> View Public Verison</a>
<a href="view-article.php?articleId=<?php echo($row["articleId"]); ?>">View Full Article</a></br>

<?php
	echo("</div>");
}?>
</section>
</section>


<section>
<h2>Video</h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/RkwPzCO-BY0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
</section>
</br>

<table>
    <tr>
	<h2 id="table"></h2>
    <th></th>
        <td></td>
    <th></th>
        <td></td>
    <th></th>
        <td></td>
    <th></th>
        <td></td>
    <th></th>
        <td></td>
    <th></th>
        <td></td>
        </tr>
</table>
<script src="js/table.js"></script>

</body>

<br><button id="assist">Reading Assistance</button>
<script src="js/assist.js"></script>

<footer>
<p id="cookies" onclick="myFunction()">Accept Cookies.</p>
</footer>
<script src="js/cookies.js"></script>

</html>
