<?php
		session_start();
		if(isset($_SESSION['uid'])){
			header('location: 11adminmainpage.php');
		}
			

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/adminloginstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="data/logo.png">
</head>
<body>
	
	<div id="menu-bar">
			<div id="menu" onclick="onClickMenu()">
				<div id="bar1" class="bar"></div>
				<div id="bar2" class="bar"></div>
				<div id="bar3" class="bar"></div>
			</div>
			<ul class="nav" id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="7quiz.php">Quiz</a></li>
				<li><a href="4registration.php">Register</a></li>
				<li><a href="6about.php">About</a></li>
				<li><a href="5contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu-bg" id="menu-bg"></div>
		<script src="javascript/nav.js"></script>
	
	<div class="container">
		<div class="form">
			<h2>Admin Login Form</h2>
			<form action="" method="POST" autocomplete="off">
			<div class="namepswrd">
			<div class="inputBox">
			<input type="text" name="Email" placeholder="Email" required="required">
			</div>
			<div class="inputBox">
			<input type="password" name="Password" placeholder="Password" required="required">
			</div>
			</div>
			<div class="inputBox">
			<input type="submit" name="login" value="Login">
			</div>
			<p><span class="frgttxt">Forgot Password? </span><a href="8forgotpassword.html">Click Here!</a></p>
			</form>
		</div>
		</div>
		
</body>
</html>

<?php

$con = mysqli_connect('localhost','root','','kb');

if(isset($_POST['login'])){
	$email = $_POST['Email'];
	$pass =  $_POST['Password'];

	//$sql = "select * from admin where Email=$email"'AND Password = '".$pass."' limit 1";
	$sql = "select * from `admin` where Email='$email'  ";
	
	$query=mysqli_query($con,$sql);
	
	$email_count = mysqli_num_rows($query);
	
	if($email_count<1){
	
		?>
			<script>
			alert('Access Denied');
			</script>
		<?php
	}

	else{
		$data = mysqli_fetch_assoc($query);
		
		$id = $data['id'];
		

		
		$_SESSION['uid'] = $id ;
		
		header('location: 11adminmainpage.php');
	}

}

?>