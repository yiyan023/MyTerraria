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
		<title>Login</title>

	</head>

	<style>
		
	</style>
	<body style="background-image: url('/images/background.png')">

        <img src="/images/terraria-icon.png" alt="Terraria" style="width:729px;height:213px;" class="terraria">

        <center>
			<p>Please log in/sign up before accessing the website.</p>
            <div class="container">
				
			<div id="box">
					<form method="post">
						
                    <h1 class="form__title">Login</h1>
					<div class="form__input-group">
						<input id="text" class="form__input" type="text" name="user_name"><br>
					</div>
					<div class="form__input-group">	
						<input id="text" class="form__input" type="password" name="password"><br>
					</div>
						<input id="button" class="form__button" type="submit" value="continue"><br>
                    <p class="form__text">
                        <a class="form__link" href="signup.php" id="linkCreateAccount">Don't have an account? Create account</a>
                    </p>
					</form>
				</div>
               
            </div>
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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "<p class='ekko'>Incorrect username or password.</p>";
		}else
		{
			echo "<p class='ekko'>Incorrect username or password.</p>";
		}
	}

?>