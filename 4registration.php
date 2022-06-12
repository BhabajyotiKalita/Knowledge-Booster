<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/registerstyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="data/logo.png">
</head>
<body data-vide-bg="data/vdo/abc3.mp4">

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$firstname = mysqli_real_escape_string($con, $_POST['fname']) ;
	$secondname = mysqli_real_escape_string($con, $_POST['sname']) ;
	$email = mysqli_real_escape_string($con,$_POST['email']) ;
	$mobile = mysqli_real_escape_string($con,$_POST['mobile']) ;
	$password = mysqli_real_escape_string($con,$_POST['pswd']) ;
	$repassword = mysqli_real_escape_string($con,$_POST['rpswd']) ;
	$sec = mysqli_real_escape_string($con,$_POST['security']) ;

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$repass = password_hash($repassword, PASSWORD_BCRYPT);
	
	$emailquery = " select * from registration where email='$email' ";
	$query = mysqli_query($con, $emailquery);
	
	$emailcount = mysqli_num_rows($query);
	
	if($emailcount>0){
		echo "email already exists" ;
	}else{
		if($password === $repassword){
		
			$insertquery = "insert into registration( fname, sname, email, mobile, pswd, rpswd, security) values('$firstname','$secondname','$email','$mobile','$pass','$repass','$sec')";
			
			$iquery = mysqli_query($con , $insertquery);
			
			if($iquery){
					?>
						<script>
						alert("REGISTRATION SUCCESSFUL")
						window.location.replace("3userlogin.php");
						</script>
					<?php 
				}else{
	
					?>
						<script>
							alert("Not Inserted");
						</script>
					<?php
				}
				
		
		}else{
			echo "Password are not matching";
		}
	
	}
	
}
?>
		<div id="menu-bar">
			<div id="menu" onclick="onClickMenu()">
				<div id="bar1" class="bar"></div>
				<div id="bar2" class="bar"></div>
				<div id="bar3" class="bar"></div>
			</div>
			<ul class="nav" id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="7quiz.php">Quiz</a></li>
				<li class="active"><a href="#">Register</a></li>
				<li><a href="6about.php">About</a></li>
				<li><a href="5contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu-bg" id="menu-bg"></div>
		<script src="javascript/register.js"></script>

		<div class="container">
		<h1>REGISTER</h1>
		<form action="" method="POST" id="registration_form" autocomplete="off">
			<div>
				<input type="text" id="form_fname" name="fname" required="">
				<span class="error_form" id="fname_error_message"></span>
				<label>
					First Name
				</label>	
			</div>
			<div>
				<input type="text" id="form_sname" name="sname" required="">
				<span class="error_form" id="sname_error_message"></span>
				<label>
					Second Name
				</label>	
			</div>
			<div>
				<input type="text" id="form_email" name="email" required="">
				<span class="error_form" id="email_error_message"></span>
				<label>
					Email
				</label>
			</div>
			<div>
				<input type="text" id="form_mnum" name="mobile" required="">
				<span class="error_form" id="mobile_error_message"></span>
				<label>Mobile Number</label>	
			</div>
			<div>
				<input type="password" id="form_password" name="pswd" required="">
				<span class="error_form" id="password_error_message"></span>
				<label>Password</label>	
			</div>
			<div>
				<input type="password" id="form_retype_password" name="rpswd" required="">
				<span class="error_form" id="retype_password_error_message"></span>
				<label>Re-Enter Password</label>	
			</div>
			<div>
				<input type="securityqtn" id="form_securityqtn" name="security" required="">
				<span class="error_form" id="securityqtn_error_message"></span>
				<select name="securityqtn" id="securityqtn">
				<option selected disabled>Choose a Security Question</option>
				<option value="favmovie">What is your favourite movie?</option>
				<option value="favactor">Who is your favourite actor?</option>
				<option value="petname">What is your pet's name?</option>
				<option value="favsinger">Who is your favourite singer?</option>
			</div>
			<input type="submit" value="Register" name="submit">
		</form>
	</div>
		
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
		<script src="data/vdo/jquery.vide.js"></script> 
</body>
</html>