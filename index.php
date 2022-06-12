<?php

session_start();

if(isset($_SESSION['fname']))
{
	$_SESSION['msg'] = "You must log in to view this page";
	header("location: userlogin.php");
}

if(isset($_REQUEST['logout']))
{
	
	session_destroy();
	unset($_SESSION['fname']);
	header("location : userlogin.php");
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Knowledge Booster</title>
	<link rel="stylesheet" type="text/css" href="css/frontstyle.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="data/logo.png">
</head>
<body onload="startTime()">

<?php
	if(isset($_SESSION['success'])) :?>
	<div>
	   <h3>
	   <?php
	       echo $_SESSION['success'];
		   unset($_SESSION['success']);
		   
		   ?>
</h3>
</div>
<?php endif ?>

			<?php if(isset($_SESSION['username'])) : ?>
		    <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
		   
		   <button><a href="Index.php?logout='1'"></a></button>
	<?php endif ?>


	<div class="slider">
	<div class="load">
	<div class="main">
	<ul>
	<b>
	<li class="active"><a href="#">Home</a></li>
	<li><a href="7quiz.php">Quiz</a></li>
	<li><a href="4registration.php">Register</a></li>
	<li><a href="6about.php">About</a></li>
	<li><a href="5contact.php">Contact</a></li>
	</b>
	</ul>
	</div>
	<div id="menu-bar">
			<div id="menu" onclick="onClickMenu()">
				<div id="bar1" class="bar"></div>
				<div id="bar2" class="bar"></div>
				<div id="bar3" class="bar"></div>
			</div>
			<ul class="nav" id="nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="7quiz.php">Quiz</a></li>
				<li><a href="4registration.php">Register</a></li>
				<li><a href="6about.php">About</a></li>
				<li><a href="5contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu-bg" id="menu-bg"></div>
		<div id="clock"></div>
		<script src="javascript/time.js"></script>
	<h1>
	<span>K</span>
	<span>n</span>
	<span>o</span>
	<span>w</span>
	<span>l</span>
	<span>e</span>
	<span>d</span>
	<span>g</span>
	<span>e</span>
	<span>&nbsp;</span>
	<span>B</span>
	<span>o</span>
	<span>o</span>
	<span>s</span>
	<span>t</span>
	<span>e</span>
	<span>r</span>
	</h1>
	<div class="button">
		<a href="2adminlogin.php" class="btn"><span></span><span></span><span></span><span></span>Log in as Admin</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="3userlogin.php" class="btn"><span></span><span></span><span></span><span></span>Log in as User</a>
	</div>
	</div>
	</div>
</body>
</html>
