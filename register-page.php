<!DOCTYPE html>
<head>
	<title>IMM News Network - Register  Page</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Register Page">
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

<!DOCTYPE html>
	<h2>Register New User</h2>
<body>
	<form action="process-register-page.php" method="POST">
<p>
        firstName: <input type="text" name="firstName" />
        lastName: <input type="text" name="lastName" />
        emailAddress: <input type="text" name="emailAddress" />
        password: <input type="text" name="password" />
		DOB: <input type="text" name="DOB" />
</p>

<p>
    <label for="userType">Register Your User Type:</label>
    <select name="userType" id="userType">
		<option value="user" selected>User</option>
		<option value="public">Public</option>
    </select>
	<input type="submit" value="Submit">
</p>
</form>
</body>

<br><button id="assist">Reading Assistance</button>
<script src="js/assist.js"></script>

<footer>
<p id="cookies" onclick="myFunction()">Accept Cookies.</p>
</footer>
<script src="js/cookies.js"></script>

</html>
