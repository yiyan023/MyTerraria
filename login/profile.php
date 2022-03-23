<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/styles.css">
		<link rel="icon" href="/images/Copper_Axe.png">
		<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Guide to Terraria</title>
	</head>

	<body>

	<img src="/images/terraria-icon.png" alt="Terraria" style="width:729px;height:213px;" class="terraria">
		<br>
    <div class="intro">
        <br>
		<p>Username:  <u><b><?php echo $user_data['user_name']; ?></b></u></p>
        <p>Password:  <u><b><?php echo $user_data['password']; ?></b></u></p>
        <p>User Id:  <u><b><?php echo $user_data['user_id']; ?></b></u></p>
        <p>Date Joined:  <u><b><?php echo $user_data['date']; ?></b></u></p>

	</div>

		<div class="right-sidebar">
		</div>

		<div class="sidebar close">
			<div class="logo-details">
				<i class='bx bxl-steam' style='color:#ffffff'></i>
				<span class="logo_name">Terraria</span>

			</div>

			<ul class="nav-links">
				<li>
					<a href="/login/login.php">
						<i class='bx bxs-arrow-to-right' style='color:#ffffff'></i></i>
						<span class="link_name">Sign Out</span>
					</a>
				</li>
                <li>
					<a href="/login/profile.php">
						<i class='bx bx-user-circle' style='color:#ffffff'></i>
						<span class="link_name">Profile</span>
					</a>
				</li>
				<li>
					<a href="index.php">
						<i class='bx bx-grid-alt' style='color:#ffffff'></i>
						<span class="link_name">Home</span>
					</a>
				</li>
				<li>
					<div class="icon-link">
						<a href="#">
							<i class='bx bxs-help-circle' style='color:#ffffff'></i>
							<span class="link_name">Guide</span>
							<i class='bx bx-chevrons-down' style='color:rgb(255, 255, 255)'></i>
						</a>
					</div>
					<ul class="sub-menu">
						<li><a href="/html/theStart.html">The Start</a></li>
						<li><a href="#">Prehard Mode</a></li>
						<li><a href="#">Hard Mode</a></li>
						<li><a href="#">Journey Mode</a></li>
						<li><a href="#">Expert Mode</a></li>
						<li><a href="#">Endgame</a></li>
					</ul>
				</li>
				<li>
					<div class="icon-link">
						<a href="#">
							<i class='bx bxs-checkbox-checked' style='color:#ffffff'></i>
							<span class="link_name">Basics</span>
							<i class='bx bx-chevrons-down' style='color:#ffffff'></i>
						</a>
					</div>
					<ul class="sub-menu">
						<li><a href="/html/bosses.html">Bosses</a></li>
						<li><a href="#">Tools</a></li>
						<li><a href="#">Materials</a></li>
						<li><a href="#">Houses</a></li>
						<li><a href="#">NPCs</a></li>
						<li><a href="#">Enemies</a></li>
						<li><a href="#">Crafting</a></li>
					</ul>
				</li>
				<li>
					<div class="icon-link">
						<a href="#">
							<i class='bx bxs-group' style='color:#ffffff'></i>
							<span class="link_name">Find Friends</span>
						</a>
	
						<ul class="sub-menu">
							<li><a href="/html/contacts.html">Add Contact</a></li>
							<li><a href="/html/results.html">Find Friends</a></li>
						</ul>
					</div>
				</li>
				<li>
					<div class="icon-link">
						<a href="#">
							<i class='bx bx-search-alt-2' style='color:#ffffff'></i>
							<span class="link_name">Search</span>
							<i class='bx bx-chevrons-down' style='color:#ffffff'></i>
						</a>
						<ul class="sub-menu">
							<div class="left">
								<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
								<ul id="myMenu">
								  <li><a href="/html/theStart.html">The Start</a></li>
								  <li><a href="/html/bosses.html">Bosses</a></li>
								  <li><a href="#">Pre-hard mode</a></li>
								  <li><a href="#">Weapons</a></li>
								  <li><a href="#">Tools</a></li>
								  <li><a href="#">Hard mode</a></li>
								  <li><a href="#">Expert Mode</a></li>
								  <li><a href="#">Journey Mode</a></li>
								  <li><a href="#">Endgame</a></li>
								  <li><a href="#">Materials</a></li>
								  <li><a href="#">Houses</a></li>
								  <li><a href="#">NPCs</a></li>
								  <li><a href="#">Enemies</a></li>
								  <li><a href="#">Crafting</a></li>
								  <li><a href="#">Contacts</a></li>
								  <li><a href="index.html">Home</a></li>
								  <li><a href="kingslime.html">King Slime</a></li>
								  <li><a href="theStart.html">Controls</a></li>
								</ul>
							</div>
						</ul>
					</div>
				</li>
			</ul>
		</div>

		<script>
		var coll = document.getElementsByClassName("collapsible");
		var i;
		
		for (i = 0; i < coll.length; i++) {
		  coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.maxHeight){
			  content.style.maxHeight = null;
			} else {
			  content.style.maxHeight = content.scrollHeight + "px";
			} 
		  });
		}

		function copyEvent(id)
    {
        var str = document.getElementById(id);
        window.getSelection().selectAllChildren(str);
        document.execCommand("Copy")
    }

	function myFunction() {
  				var input, filter, ul, li, a, i;
				input = document.getElementById("mySearch");
				filter = input.value.toUpperCase();
				ul = document.getElementById("myMenu");
				li = ul.getElementsByTagName("li");
				for (i = 0; i < li.length; i++) {
					a = li[i].getElementsByTagName("a")[0];
					if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
					li[i].style.display = "";
					} else {
					li[i].style.display = "none";
					}
 				 }
				}
	</script>
	</body>
</html>