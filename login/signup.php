<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/css/login.css">
		<link rel="icon" href="/images/Copper_Axe.png">
		<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@400;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>



<body style="background-image: url('/images/background.png')">

<img src="/images/terraria-icon.png" alt="Terraria" style="width:729px;height:213px;" class="terraria">

<center>
	<div class="container">
	<div id="box">
		</div>
		<form id="signup" method="post">
                    <h1 class="form__title">Create Account</h1>

			<input id="text" type="text" class="form__input" name="user_name" autofocus placeholder="Username"><br>
			<input id="pass" type="password" class="form__input" name="password" autofocus placeholder="Password"><br>
			<input id="passConf" type="password" class="form__input" autofocus placeholder="Confirm Password"><br>
			<div id="button" class="signupButton" type="button" onclick="submit()" value="Signup">Signup</div><br><br>

			<p class="form__text">
                        <a class="form__link" href="login.php" id="linkLogin">Click to Login</a>
            </p>
		</form>
	</div>
	<script>
		function submit(){
			var p1 = document.getElementById('pass').value
			var p2 = document.getElementById('passConf').value
			if (p1 !== p2) {
				alert('Passwords are not identical!')
			} else{
				document.getElementById('signup').submit()
			}
		}

	</script>
</center>
</body>
</html>

<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<p class='ekko'>Please put valid information.</p>";
	}
}
?>