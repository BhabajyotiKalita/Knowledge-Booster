<?php

session_start();
		
if(isset($_SESSION['uid']))
		{
			echo "";
		}
else{
			header('location: 2adminlogin.php');
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Knowledge booster</title>
	<link rel="stylesheet" type="text/css" href="css/adminmainpagestyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<link rel="shortcut icon" type="image/png" href="data/logo.png">
</head>
<body onload="startTime()">

	<div class="scrollTop" onclick="scrollToTop();"></div>
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
	<script src="javascript/adminmainpage.js"></script>
	



		
	
	<nav class="leftnavmenu">
	<div class="clockbox">
		<div class="clock" id="clock"></div>
		<div class="date" id="date"></div>
	</div>
	<ul>
		<li><a href="#" onclick="admindash()" id="dash">Dashboard</a></li>
		<li><a href="#" onclick="topics()" id="topics">View Topics</a></li>
		<li><a href="#" onclick="viewusers()" id="users">View Users</a></li>
		<li><a href="updatestudent.php">Update User Details</a></li>
		<li><a href="dstudent.php">Delete Users</a></li>
	</ul>
	<div class="slider">
	<div class="load">
	</nav>
	
		
	<nav class="navmenu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="7quiz.php">Quiz</a></li>
		<li><a href="4registration.php">Register</a></li>
		<li><a href="6about.php">About</a></li>
		<li><a href="5contact.php">Contact</a></li>
	</ul>
	<button type="button" class="logout"><a href = "adminlogout.php">Logout</a></button>
	<form class="searchform" action="https://www.google.com/search" method="get" autocomplete="off">
	<div class="searchdropdown">
		<input type="text" onclick="mySearchFunction()" class="dropbtn" name="q" id="myInput" 
		onkeyup="filterFunction()" placeholder="What are you looking for ?" required="required">
		<div id="myDropdown" class="searchdropdown-content">
		<a href="#" onclick="admindash()">Dashboard</a>
		<a href="#" onclick="viewusers()">View Users</a>
		<a href="updatestudent.php" onclick="updateusers()">Update User Details</a>
		<a href="dstudent.php" onclick="deleteusers()">Delete User</a>
		<a href="#" onclick="topics()">View Topics</a>
		<a href="index.php">Home</a>
		<a href="7quiz.php">Quiz</a>
		<a href="4registration.php">Register</a>
		<a href="6about.php">About</a>
		<a href="5contact.php">Contact</a>
		</div>
	</div>
		<button type="submit">Search</button>
	</form>
	</nav>

		<div class="admindash">
		<h1 id="admindashhead">Admin Dashboard</h1>
		</div>
		
		<div class="title">
		<h1 id="topicshead">Topics</h1>
		</div>
		
		<div class="title">
		<h1 id="viewusershead">Users</h1>
		</div>
		
		<div class="title">
		<h1 id="updateusershead"><a href="updatestudent.php">Update Users</a></h1>
		</div>
		
		<div class="title">
		<h1 id="deleteusershead"><a href="dstudent.php">Delete Users</a></h1>
		</div>
		
		<div id="admindashpost">
		<div class="mainpost">
			<div class="box">
			<div class="glass"></div>
			<div class="content">
				<h2>👨 &nbsp;10 Users</h2>
			</div>
			</div>
			<div class="box">
			<div class="glass"></div>
			<div class="content">
				<h2>📖 &nbsp;17 Topics</h2>
			</div>
			</div>
			<div class="box">
			<div class="glass"></div>
			<div class="content">
				<h2>📝 &nbsp;224 Posts</h2>
			</div>
			</div>
		</div>
		
		<div class="latestpost">
		<div class="latest">
			<h1>Latest Users</h1>
			</div>

		<table border="1">
		<tr>
		<th>Name</th>
		<th>Mobile no.</th>
		<th>Email id</th>
		</tr>
		<tr>
		<td>Bhabajyoti Kalita</td>
		<td>8822670167</td>
		<td>bhabajyotikalita66@gmail.com</td>
		</tr>
		<tr>
		<td>Arnab Sharma</td>
		<td>7669878778</td>
		<td>arnabsarma10@gmail.com</td>
		</tr>
		<tr>
		<td>Divya Singh</td>
		<td>8734974078</td>
		<td>divya341@gmail.com</td>
		</tr>
		<tr>
		<td>Ramesh Prasad</td>
		<td>6878768097</td>
		<td>ramesh123@gmail.com</td>
		</tr>
		<tr>
		<td>Priya Das</td>
		<td>9834868778</td>
		<td>pdas56@gmail.com</td>
		</tr>
		</table>

		</div>
		</div>



		<div class="subpost" id="topicspost">
		<table border="1">
		<tr>
		<th>No.</th>
		<th>Topic Name</th>
		<th>Total Posts</th>
		</tr>
		<tr>
		<td>1</td>
		<td>English: Tense</td>
		<td>5</td>
		</tr>
		<tr>
		<tr>
		<td>2</td>
		<td>English: Voice Change</td>
		<td>4</td>
		</tr>
		<tr>
		<td>3</td>
		<td>General Awareness</td>
		<td>10</td>
		</tr>
		<tr>
		<td>4</td>
		<td>Science: Physics</td>
		<td>5</td>
		</tr>
		<tr>
		<td>5</td>
		<td>Science: Chemistry</td>
		<td>5</td>
		</tr>
		<tr>
		<td>6</td>
		<td>Science: Biology</td>
		<td>5</td>
		</tr>
		<tr>
		<td>7</td>
		<td>Economics</td>
		<td>6</td>
		</tr>
		<tr>
		<td>8</td>
		<td>Sports</td>
		<td>5</td>
		</tr>
		<tr>
		<td>9</td>
		<td>Computer Science</td>
		<td>5</td>
		</tr>
		<tr>
		<td>10</td>
		<td>Mathematics</td>
		<td>9</td>
		</tr>
		<tr>
		<td>11</td>
		<td>Statistics</td>
		<td>7</td>
		</tr>
		<tr>
		<td>12</td>
		<td>Environmental Science</td>
		<td>7</td>
		</tr>
		<tr>
		<td>13</td>
		<td>Prepare for SSC & Railway</td>
		<td>60</td>
		</tr>
		<tr>
		<td>14</td>
		<td>Prepare for Bank Exams</td>
		<td>26</td>
		</tr>
		<tr>
		<td>15</td>
		<td>Prepare for Medical Entrance</td>
		<td>15</td>
		</tr>
		<tr>
		<td>16</td>
		<td>Prepare for Engineering Entrance</td>
		<td>19</td>
		</tr>
		<tr>
		<td>17</td>
		<td>Prepare for Defence Exams</td>
		<td>31</td>
		</tr>
		</table>
		</div>
		
		
		<div class="subpost" id="viewuserspost">
		<table border="1">
		<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Mobile no.</th>
		<th>Email id</th>
		</tr>
		<tr>
		<td>1</td>
		<td>Bhabajyoti Kalita</td>
		<td>8822670167</td>
		<td>bhabajyotikalita66@gmail.com</td>
		</tr>
		<tr>
		<td>2</td>
		<td>Arnab Sharma</td>
		<td>7669878778</td>
		<td>arnabsarma10@gmail.com</td>
		</tr>
		<tr>
		<td>3</td>
		<td>Divya Singh</td>
		<td>8734974078</td>
		<td>divya341@gmail.com</td>
		</tr>
		<tr>
		<td>4</td>
		<td>Ramesh Prasad</td>
		<td>6878768097</td>
		<td>ramesh123@gmail.com</td>
		</tr>
		<tr>
		<td>5</td>
		<td>Priya Das</td>
		<td>9834868778</td>
		<td>pdas56@gmail.com</td>
		</tr>
		</table>
		</div>
		
		
		<div class="subpost" id="updateuserspost">
		<table border="1">
		<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Mobile no.</th>
		<th>Email id</th>
		<th>Update</th>
		</tr>
		<tr>
		<td>1</td>
		<td>Bhabajyoti Kalita</td>
		<td>8822670167</td>
		<td>bhabajyotikalita66@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		<td>2</td>
		<td>Arnab Sharma</td>
		<td>7669878778</td>
		<td>arnabsarma10@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		<td>3</td>
		<td>Divya Singh</td>
		<td>8734974078</td>
		<td>divya341@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		<td>4</td>
		<td>Ramesh Prasad</td>
		<td>6878768097</td>
		<td>ramesh123@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		<td>5</td>
		<td>Priya Das</td>
		<td>9834868778</td>
		<td>pdas56@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		<td>1</td>
		<td>Bhabajyoti Kalita</td>
		<td>8822670167</td>
		<td>bhabajyotikalita66@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		<td>2</td>
		<td>Arnab Sharma</td>
		<td>7669878778</td>
		<td>arnabsarma10@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		<td>3</td>
		<td>Divya Singh</td>
		<td>8734974078</td>
		<td>divya341@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		<td>4</td>
		<td>Ramesh Prasad</td>
		<td>6878768097</td>
		<td>ramesh123@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		<td>5</td>
		<td>Priya Das</td>
		<td>9834868778</td>
		<td>pdas56@gmail.com</td>
		<td><a href="#" style="cursor:pointer;" onclick="updatedata()">Update</a></td>
		</tr>
		<tr>
		</table>
		</div>
		
				
		
		<div class="subpost" id="deleteuserspost">
		<table border="1">
		<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Mobile no.</th>
		<th>Email id</th>
		<th>Delete</th>
		</tr>
		<tr>
		<td>1</td>
		<td>Bhabajyoti Kalita</td>
		<td>8822670167</td>
		<td>bhabajyotikalita66@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>2</td>
		<td>Arnab Sharma</td>
		<td>7669878778</td>
		<td>arnabsarma10@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>3</td>
		<td>Divya Singh</td>
		<td>8734974078</td>
		<td>divya341@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>4</td>
		<td>Ramesh Prasad</td>
		<td>6878768097</td>
		<td>ramesh123@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>5</td>
		<td>Priya Das</td>
		<td>9834868778</td>
		<td>pdas56@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>1</td>
		<td>Bhabajyoti Kalita</td>
		<td>8822670167</td>
		<td>bhabajyotikalita66@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>2</td>
		<td>Arnab Sharma</td>
		<td>7669878778</td>
		<td>arnabsarma10@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>3</td>
		<td>Divya Singh</td>
		<td>8734974078</td>
		<td>divya341@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>4</td>
		<td>Ramesh Prasad</td>
		<td>6878768097</td>
		<td>ramesh123@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>5</td>
		<td>Priya Das</td>
		<td>9834868778</td>
		<td>pdas56@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>1</td>
		<td>Bhabajyoti Kalita</td>
		<td>8822670167</td>
		<td>bhabajyotikalita66@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>2</td>
		<td>Arnab Sharma</td>
		<td>7669878778</td>
		<td>arnabsarma10@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>3</td>
		<td>Divya Singh</td>
		<td>8734974078</td>
		<td>divya341@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>4</td>
		<td>Ramesh Prasad</td>
		<td>6878768097</td>
		<td>ramesh123@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		<tr>
		<td>5</td>
		<td>Priya Das</td>
		<td>9834868778</td>
		<td>pdas56@gmail.com</td>
		<td><a href="#" style="cursor:pointer;">Delete</a></td>
		</tr>
		</table>
		</div>
		
		
		<div class="container" id="updatedata">
		<form id="registration_form" autocomplete="off">
			<div>
				<input type="text" id="form_fname" name="" required="">
				<span class="error_form" id="fname_error_message"></span>
				<label>
					First Name
				</label>	
			</div>
			<div>
				<input type="text" id="form_sname" name="" required="">
				<span class="error_form" id="sname_error_message"></span>
				<label>
					Second Name
				</label>	
			</div>
			<div>
				<input type="text" id="form_email" name="" required="">
				<span class="error_form" id="email_error_message"></span>
				<label>
					Email
				</label>
			</div>
			<div>
				<input type="text" id="form_mnum" name="" required="">
				<span class="error_form" id="mobile_error_message"></span>
				<label>Mobile Number</label>	
			</div>
			<div>
				<input type="password" id="form_password" name="" required="">
				<span class="error_form" id="password_error_message"></span>
				<label>Password</label>	
			</div>
			<div>
				<input type="password" id="form_retype_password" name="" required="">
				<span class="error_form" id="retype_password_error_message"></span>
				<label>Re-Enter Password</label>	
			</div>
			<div>
				<input type="securityqtn" id="form_securityqtn" name="" required="">
				<span class="error_form" id="securityqtn_error_message"></span>
				<select name="securityqtn" id="securityqtn">
				<option selected disabled>Choose a Security Question</option>
				<option value="favmovie">What is your favourite movie?</option>
				<option value="favactor">Who is your favourite actor?</option>
				<option value="petname">What is your pet's name?</option>
				<option value="favsinger">Who is your favourite singer?</option>
			</div>
			<input type="submit" value="Submit" name="">
		</form>
	</div>
		
		</div>
		</div>
	
</body>
</html>
