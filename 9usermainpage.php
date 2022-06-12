<?php
session_start();

if(!isset($_SESSION['fname']))
	header('login.php')
?>


<!DOCTYPE html>
<html>
<head>
	<title>Online Knowledge</title>
	<link rel="stylesheet" type="text/css" href="css/usermainpagestyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="data/logo.png">
</head>
<body onload="startTime()">

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
	<script src="javascript/usermainpage.js"></script>
	



		
	
	<nav class="leftnavmenu">
	<div class="clockbox">
		<div class="clock" id="clock"></div>
		<div class="date" id="date"></div>
	</div>
	<ul>
		<li><a href="#" onclick="sscrlwy()">Prepare for SSC & Railway</a></li>
		<li><a href="#" onclick="bank()">Prepare for Bank Exams</a></li>
		<li><a href="#" onclick="med()">Prepare for Medical Entrance</a></li>
		<li><a href="#" onclick="engi()">Prepare for Engineering Entrance</a></li>
		<li><a href="#" onclick="dfnc()">Prepare for Defence Exams</a></li>
	</ul>
	<div class="slider">
	<div class="load">
	</nav>
	
	

	<nav class="rightnavmenu">
	<h1>Topics</h1>
	<ul>
		<div class="dropdown">
		<li><a class="dropbtn" href="#">English</a></li>
		<div class="dropdown-content">
		<li><a href="#" onclick="tense()">Tense</a></li>
		<li><a href="#" onclick="voice()">Voice Change</a></li>
		</div>
		</div>
		<li><a href="#" onclick="genawe()">General Awareness</a></li>
		<div class="dropdown">
		<li><a class="dropbtn" href="#">Science</a></li>
		<div class="dropdown-content">
		<li><a href="#" onclick="phy()">Physics</a></li>
		<li><a href="#" onclick="chem()">Chemistry</a></li>
		<li><a href="#" onclick="bio()">Biology</a></li>
		</div>
		</div>
		<li><a href="#" onclick="eco()">Economics</a></li>
		<li><a href="#" onclick="sports()">Sports</a></li>
		<li><a href="#" onclick="comp()">Computer Science</a></li>
		<li><a href="#" onclick="maths()">Mathematics</a></li>
		<li><a href="#" onclick="stats()">Statistics</a></li>
		<li><a href="#" onclick="evs()">Environmental Studies</a></li>
	</ul>
	</nav>

	
		
	<nav class="navmenu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="7quiz.php">Quiz</a></li>
		<li><a href="4registration.php">Register</a></li>
		<li><a href="6about.php">About</a></li>
		<li><a href="5contact.php">Contact</a></li>
	</ul>
	<button type="button" class="logout"><a href = "logout.php">Logout</a></button>
	<form class="searchform" action="https://www.google.com/search" method="get" autocomplete="off">
	<div class="searchdropdown">
		<input type="text" onclick="mySearchFunction()" class="dropbtn" name="q" id="myInput" 
		onkeyup="filterFunction()" placeholder="What are you looking for ?">
		<div id="myDropdown" class="searchdropdown-content">
		<a href="#" onclick="tense()">Tense</a>
		<a href="#" onclick="voice()">Voice Change</a>
		<a href="#" onclick="genawe()">General Awareness</a>
		<a href="#" onclick="phy()">Physics</a>
		<a href="#" onclick="chem()">Chemistry</a>
		<a href="#" onclick="bio()">Biology</a>
		<a href="#" onclick="eco()">Economics</a>
		<a href="#" onclick="sports()">Sports</a>
		<a href="#" onclick="comp()">Computer Science</a>
		<a href="#" onclick="maths()">Mathematics</a>
		<a href="#" onclick="stats()">Statistics</a>
		<a href="#" onclick="evs()">Environmental Studies</a>
		<a href="#" onclick="sscrlwy()">Prepare for SSC & Railway</a>
		<a href="#" onclick="bank()">Prepare for Bank Exams</a>
		<a href="#" onclick="med()">Prepare for Medical Entrance</a>
		<a href="#" onclick="engi()">Prepare for Engineering Entrance</a>
		<a href="#" onclick="dfnc()">Prepare for Defence Exams</a>
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
	
		<div class="welcome">
		<h1 id="welcome">Welcome Learner! Wish you Happy Learning</h1>
		</div>
		
		<div class="title">
		<h1 id="comphead">Computer Science</h1>
		</div>
		
		<div class="title">
		<h1 id="tensehead">English: Tense</h1>
		</div>
		
		<div class="title">
		<h1 id="voicehead">English: Voice Change</h1>
		</div>
		
		<div class="title">
		<h1 id="genawehead">General Awareness</h1>
		</div>
		
		<div class="title">
		<h1 id="sportshead">Sports</h1>
		</div>
		
		<div class="title">
		<h1 id="mathshead">Mathematics</h1>
		</div>
		
		<div class="title">
		<h1 id="statshead">Statistics</h1>
		</div>
		
		<div class="title">
		<h1 id="evshead">Environmental Studies</h1>
		</div>
		
		<div class="title">
		<h1 id="ecohead">Economics</h1>
		</div>
		
		<div class="title">
		<h1 id="phyhead">Science: Physics</h1>
		</div>
		
		<div class="title">
		<h1 id="chemhead">Science: Chemistry</h1>
		</div>
		
		<div class="title">
		<h1 id="biohead">Science: Biology</h1>
		</div>
		
		<div class="title">
		<h1 id="sscrlwyhead">Prepare for SSC and Railway</h1>
		</div>
		
		<div class="title">
		<h1 id="medhead">Prepare for Medical Entrance</h1>
		</div>
		
		<div class="title">
		<h1 id="engihead">Prepare for Engineering Entrance</h1>
		</div>
		
		<div class="title">
		<h1 id="bankhead">Prepare for Bank Exams</h1>
		</div>
		
		<div class="title">
		<h1 id="dfnchead">Prepare for Defence Exams</h1>
		</div>
		
		<!-- welcome content view -->
				<div class="welpost" id="welpost">
					<!-- post 1 by creator-->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;
							Welcome to our society. We provide the users with the facility of learing
							different topics they have interest in. Anybody can simply login and
							choose the topic they want to learn and gain knowledge. 
							Moreover, if the users wants to test 
							themselves, they have the option of online mock test on 
							different topics. Enjoy your stay.
						</p>
						<div class="post">
							<img class="postimg" src="data/frnt31.jpg"/>
						</div>
						
					</div>
					<!-- end of post 1 by creator -->

					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;
							Education is the passport to the future, for tommorrow belongs to those who prepare for it today.
							The roots of education are bitter, but the fruit is sweet. Education is not the filling of a pail, 
							but the lightning of a fire. Education is not preparation for life, education is life itself.
						</p>
						<div class="post">
							<img class="postimg" src="data/frnt54.jpg"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;
							Don't be sad when you got failed. Because failure is just a warm up for achieving successs with perfection.
						</p>
						<div class="post">
							<video width=550 height=250 controls>
							<source src="data/vdo/eduvdo.mp4">
							</video>
						</div>

					</div>
					<!-- end of post 3 by creator -->

					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;
							If you want to be Powerfull, Educate yourself.
						</p>
						<div class="post">
							<img class="postimg" src="data/frnt55.jpg"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/frnt57.jpg"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					
					<!-- post 6 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/frnt58.png"/>
						</div>

					</div>
					<!-- end of post 6 by creator -->
					
					<!-- post 7 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/frnt59.jpg"/>
						</div>

					</div>
					<!-- end of post 7 by creator -->
					
					<!-- post 8 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/frnt60.png"/>
						</div>

					</div>
					<!-- end of post 8 by creator -->
					
					<!-- post 9 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/frnt61.jpg"/>
						</div>

					</div>
					<!-- end of post 9 by creator -->
					</div>
					<!--end of welcome content view-->
					
					
					<!-- defence content view -->
				<div class="subpost" id="dfncpost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/dfnc1.png"/>
						</div>

					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/dfnc2.jpg"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/dfnc3.jpg"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					</div>
					<!--end of defence content view-->
					
					
					<!-- tense content view -->
				<div class="subpost" id="tensepost">
					<!-- post 1 by creator-->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;
							In grammer, tense is a category that expresses time reference with reference 
							to the moment of speaking. Tenses are usually manifested by the use of specific 
							forms of verbs, particularly in their conjugation patterns.
						</p>
						
					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator-->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;
							The main tenses found in many languages include <br><br>
							1) the Present Tense, <br>
							2) the Past Tense and <br>
							3) the Future Tense<br><br>
							Some languages have only two distinct tenses, such as past and nonpast, 
							or future and nonfuture. There are also tenseless languages, like most 
							of Chinese languages, though they posess a future and nonfuture system, 
							which is typical of Sino-Tibetan languages.
						</p>
						
					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator-->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;
						<center>
							I go to school everyday.<br>
							I went to school yesterday.<br>
							I shall go to school tomorrow.<br><br>
							</center>
							&nbsp;In the above sentences, we have seen three different forms of the verb 'go'. 
							&nbsp;In the first sentence, the verb 'go' refers to the present time. It is therefore, 
							said to be in the <b>Present Tense</b>.
							&nbsp;In the second sentence, the verb 'went' refers to the past time. It is therefore, 
							said to be in the <b>Past Tense</b>.
							&nbsp;In the third sentence, the verb 'shall go' refers to the future time. It is therefore, 
							said to be in the <b>Future Tense</b>.
						</p>
						
					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator-->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;
						The Present Tense has four forms --<br>
							1) The Present Indefinite Tense or The Simple Present Tense<br>
							2) The Present Continuous Tense<br>
							3) The Present Perfect Tense<br>
							4) The Present Perfect Continuous Tense<br><br><br>
						Just as the Present Tense has four forms, the Past Tense also has four forms --<br>
							1) The Past Indefinite Tense or The Simple Past Tense<br>
							2) The Past Continuous Tense<br>
							3) The Past Perfect Tense<br>
							4) The Past Perfect Continuous Tense<br><br><br>
						Likewise, the Future Tense has four forms --<br>
							1) The Future Indefinite Tense or The Simple Future Tense<br>
							2) The Future Continuous Tense<br>
							3) The Future Perfect Tense<br>
							4) The Future Perfect Continuous Tense<br><br><br>
						</p>
						
					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/tense1.jpg"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					</div>
					<!--end of tense content view-->
					
					
					<!-- voice content view -->
				<div class="subpost" id="voicepost">
					<!-- post 1 by creator-->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						<center>
						1) I write a letter.<br>
						2) A letter is written by me.<br><br>
						</center>
						&nbsp;&nbsp;&nbsp; The above two sentences express the same meaning. 
						But their form is different. The two forms of the verb of a sentence to 
						denote the same meaning are called Voice.
						</p>
						
					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator-->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;
						Voices are of two kinds --<br>
						<center>
						1) Active Voice<br>
						2) Passive Voice<br><br>
						</center>
						&nbsp;&nbsp;&nbsp; When the subject of the verb himself does something, 
						the verb is said to be in the <b>Active Voice</b>.
						&nbsp;&nbsp;&nbsp; When the subject of the verb does not act itself, but  
						is acted upon, the verb is said to be in the <b>Passive Voice</b>.
						</p>
						
					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/voice.jpg"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/voiceeg.jpg"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					</div>
					<!--end of voice content view-->
					
					
					<!-- computer content view -->
				<div class="subpost" id="comppost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;
						A computer is a machine that can be instructed to carry out 
						sequences of arithmetic or logical operations automatically via 
						computer programming. Modern computers have the ability to follow 
						generalized sets of operations, called programs. These programs 
						enable computers to perform an extremely wide range of tasks.
						</p>
						<div class="post">
							<img class="postimg" src="data/comp5.jpg"/>
						</div>

					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/comp1.jpg"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/comp2.jpg"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/comp3.jpg"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/comp4.jpg"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					
					</div>
					<!--end of computer content view-->
					
					<!-- general awareness content view -->
				<div class="subpost" id="genawepost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. Who invented the telephone? (Alexander Graham Bell)<br>

						Q. Which nail grows fastest? (middle)<br>

						Q. What temperature does water boil at? (100C)<br>

						Q. Who discovered penicillin? (Fleming)<br>

						Q. What Spanish artist said he would eat his wife when she died? (Dali)<br>
						
						Q. Who wrote Julius Caesar, Macbeth and Hamlet? (Shakespeare)<br>

						Q. Who wrote Lazarillo de Tormes? (anonymous)<br>

						Q. What did the crocodile swallow in Peter Pan? (alarm clock)<br>

						Q. Where was Lope de Vega born? (Madrid)<br>

						Q. Who did Lady Diana Spencer marry? (Prince Charles)<br>
						</p>
					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. Where is Mulhacen? (Granada Spain)<br>

						Q. How many states are there in the United States of America? (50)<br>

						Q. Which river passes through Madrid? (Manzanares)<br>

						Q. Which German city is famous for the perfume it produces? (Cologne)<br>

						Q. Who did Prince Rainier of Monaco marry? (Grace Kelly)<br>

						Q. What year did the Spanish Civil War end? (1939)<br>

						Q. When did the First World War start? (1914)<br>

						Q. What did Joseph Priesley discover in 1774? (Oxygen)<br>

						Q. Where is the smallest bone in the body? (ear)<br>

						Q. Which is the only mammal that can’t jump? (elephant)<br>
						</p>
					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. What does the roman numeral C represent? (100)<br>

						Q. What colour is a panda? (black and white)<br>

						Q. What nationality was Chopin? (Polish)<br>

						Q. What’s the best known artificial international language? (esperanto)<br>

						Q. Who lived at 221B, Baker Street, London? (Sherlock Holmes)<br>

						Q. Who cut Van Gogh’s ear? (he did)<br>

						Q. Where did Salvador Dali live? (Figueras)<br>

						Q. Who painted the Mona Lisa? (Da Vinci)<br>

						Q. How many dots are there on two dice? (42)<br>

						Q. What horoscope sign has a crab? (cancer)<br>

						</p>
					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. In which shop can you buy books in England? (bookshop)<br>

						Q. Where does the British Prime Minister live? (10, Downing Street)<br>

						Q. How long is the compulsory military service in England? (it doesn’t exist)<br>

						Q. When did the Second World War end? (1945)<br>

						Q. What are the first three words of the bible? (In the beginning)<br>

						Q. How many children has Queen Elizabeth the Second got? (4)<br>

						Q. What’s the real name of Siddartha Gautama? (Buddha)<br>

						Q. What’s the name of the famous big clock in London? (Big Ben)<br>

						Q. Where was Christopher Columbus born? (Genoa)<br>

						Q. When did the American Civil War end? (1865)<br>
						</p>
					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. What did the 7 dwarves do for a job? (miners)<br>

						Q. Who painted the Sistine Chapel? (Michelangelo)<br>

						Q. Who wrote La Colmena? (Cela)<br>

						Q. Name a famous detective who smoked a pipe and played the violin. (S. Holmes)<br>

						Q. Who said E=mc2 (Einstein)<br>

						Q. Which planet is nearest the sun? (Mercury)<br>

						Q. Where are the Dolomites? (Italy)<br>

						Q. What’s the capital of Kenya? (Nairobi?<br>

						Q. Which is the largest ocean? (Pacific)<br>

						Q. What’s the capital of Honduras? (Tegucigarpa)<br>
						</p>
					</div>
					<!-- end of post 5 by creator -->
					
					<!-- post 6 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. What’s the capital of Ethiopia? (Addis Ababa)<br>

						Q. How many squares are there on a chess board? (64)<br>

						Q. How many prongs are there on a fork? (4)<br>

						Q. Who starts first in chess? (white)<br>

						Q. How many events are there in the decathlon? (10)<br>

						Q. What do you use to take a cork out of a bottle? (a corkscrew)<br>

						Q. What language has the most words? (English)<br>

						Q. What’s the name of the main airport in Madrid? (Barajas)<br>

						Q. What money do they use in Japan? (yen)<br>

						Q. What year did Paquirri die? (1984 or 1985)<br>
						</p>
					</div>
					<!-- end of post 6 by creator -->
					
					<!-- post 7 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. Who said, “I think, therefore I am”? (Descartes)<br>

						Q. Who wrote the Ugly Duckling? (Hans Christian Andersen)<br>

						Q. Where was El Greco born? (Greece)<br>

						Q. What’s the Hungarian word for pepper? (paprika)<br>

						Q. Which painter did the group Mecano write a song about? (Dali)<br>

						Q. Who sang, “I’m dreaming of a white Christmas”? (Bing Crosby)<br>

						Q. Name the two main actors in “The Sting”. (Paul Newman and Robert Redford)<br>

						Q. What year did Elvis Presley die? (1977)<br>

						Q. What film star who was in 9« weeks is now a boxer? (Mickey Rourke)<br>

						Q. Where was Marco Polo’s home town? (Venice)<br>
						</p>
					</div>
					<!-- end of post 7 by creator -->
					
					<!-- post 8 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. Which Italian leader was terribly afraid of the evil eye? (Mussolini)<br>

						Q. What country gave Florida to the USA in 1891? (Spain)<br>

						Q. Who gave his name to the month of July? (Julius Caesar)<br>

						Q. Who wrote the Satanic Verses? (Salman Rushdie)<br>

						Q. What was the first theatre play in Spain? (La Celestina)<br>

						Q. What’s the most important book in the Moslem religion? (Koran)<br>

						Q. When was Elvis’ first ever concert? (1954)<br>

						Q. Who sang “My Way”? (Frank Sinatra)<br>

						Q. Who as the main actor in “Cocktail”? (Tom Cruise)<br>

						Q. Who was the main actor in Superman 2? (Christopher Reeve)<br>
						</p>
					</div>
					<!-- end of post 8 by creator -->
					
					<!-- post 9 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. Who did Madonna marry? (Sean Penn)<br>

						Q. What did the Montgolfier brothers invent? (the balloon)<br>

						Q. Who is the president of Iraq? (Sadam Hussein)<br>

						Q. What type of elephant has got the biggest ears? (African)<br>

						Q.Who invented the electric light bulb? (Thomas Edison)<br>

						Q. What’s the smallest type of tree in the world? (Bonsai)<br>

						Q. Who invented television? (John Logie Baird)<br>

						Q. What activity other than jumping are kangaroos good at? (boxing)<br>

						Q. What’s the capital of Ecuador? (Quito)<br>

						Q. What colours make purple? (red and blue)<br>
						</p>
					</div>
					<!-- end of post 9 by creator -->
					
					<!-- post 10 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. What’s the hardest rock? (diamond)<br>

						Q. How much does a litre of water weigh? (1kg)<br>

						Q. When was President Kennedy killed? (1963)<br>

						Q. What stopped in London at 3.45 on August 5th, 1975? (Big Ben)<br>

						Q. What nationality was Marco Polo? (Italian)<br>

						Q. Who won a gold medal for Spain in cycling in the 1992 Olympics? (Jose Manuel Moreno)<br>

						Q. Who is the tallest basketball player in the world? (Manute Boll – 2.31m)<br>

						Q. Where does the American president live? (The White House)<br>

						Q. What is the first letter on a typewriter? (Q)<br>

						Q. Which river goes through London? (Thames)<br>
						</p>
					</div>
					<!-- end of post 10 by creator -->
					
					</div>
					<!--end of general awareness content view-->
					
					
					<!-- sports content view -->
				<div class="subpost" id="sportspost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. Which country’s first ever home football international was played at the Racecourse Ground in 1877? Wales<br>

						Q. Frankie Fredericks represented which African country in athletics? Namibia

						Q. In a famous 2006 newspaper article, the then British Deputy Prime Minister, John Prescott, 
						was photographed playing what sport? Croquet<br>

						Q. In inches, how big is the diameter of a basketball hoop? 18<br>

						Q. Which sporting great was dubbed ‘the boy from Bowral’? Sir Donald Bradman<br>

						Q. What is an NBA player deemed to be if he has received the Maurice Podoloff Trophy? The most valuable player (MVP)<br>

						Q. Who was the first U.S. volleyball player to win three Olympic gold medals? Karch Kiraly<br>

						Q. How many world records did swimmer Mark Spitz set when he won seven gold medals at the 1972 
						Olympics? Seven―one in each of the races in which he competed.<br>

						Q. What sport used the term ‘home run’ long before baseball? Cricket<br>

						Q. What was the first sport in which women were invited to compete at the Olympics? 
						Tennis, at the 1900 games in Paris. Charlotte Cooper of Great Britain was the first gold medalist.<br>

						Q. In cross-country bike racing, what do the initials BMX represent? Bicycle moto x (cross)<br>

						Q. Which team is as well-known for their comic antics as for their on-court skills? Harlem Globetrotters<br>

						Q. Which country dominates Olympics basketball like no one else? USA has won the gold 14 times out of 18 editions<br>

						Q. Which type of ball was basketball played with until 1929? Soccer ball<br>

						Q. What’s the second event on day one of a men’s decathlon? Long Jump<br>

						Q. The Borg-Warner Trophy is awarded to the winner of which race? Indianapolis 500<br>

						Q. In American Football which famous Miami Dolphins quarterback retired in 2000?Dan Marino<br>

						Q. What number lies between 5 and 9 on a British dart board?12<br>

						Q. Name the England rugby league forward that joined Bath rugby union club in 2014?Sam Burgess<br>

						Q. Britain’s Desmond Douglas was world number seven in which sport during the 1980s?Table tennis<br>
						</p>
					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. Which 100/1 outsider won the 2009 Grand National?Mon Mome<br>

						Q. The San Siro Stadium is in which Italian city?Milan<br>

						Q. Why did the year 1994 see no baseball World Series? Player’s strike<br>

						Q. Who beat Ivan Lendl in a French Open final using underhand serves? Michael Chang<br>

						Q. Who is the only wild card entrant to have won Wimbledon? Goran Ivanišević: 2001<br>

						Q. Who is the youngest winner of a Ladies Singles title in the Open Era? Martina Hingis: Winner in 1997 at 16 years of age<br>

						Q. Which is the only country to have played in each and every World Cup? Brazil<br>

						Q. The creator of Sherlock Holmes, Sir Arthur Conan Doyle, was the first keeper for which English football club? AFC Portsmouth<br>

						Q. Which was the first African country to qualify for a World Cup? Egypt: 1934<br>

						Q. Which country won the first World Cup held in 1930? Uruguay<br>

						Q. In which year was the first Wimbledon tournament held? 1877<br>

						Q. The Eclipse Stakes is run at which racecourse?Sandown<br>

						Q. Sixways Stadium is the home ground of which English Premiership rugby union team?Worcester Warriors<br>

						Q. In which athletic event did Bruce Jenner win the gold medal in the 1976 Summer Olympics?The Decathlon<br>

						Q. Who won the men’s single at Wimbledon in 1985 at the age of just 17?Boris Becker<br>

						Q. Kareem Abdul-Jabbar played 20 seasons in which sport?Basketball<br>

						Q. How many players are on the field for each team in an Australian rules football match?<br>

						Q. Which club did rugby legend Martin Johnson play for? Leicester<br>

						Q. In horse racing, which is the last of the five classics to be run each year, and its distance is also the longest? St Leger<br>

						Q. In sport, what is black, 1 inch thick, 3 inches in diameter, and weighs between 5.5 and 6 ounces? Ice Hockey Puck<br>
						</p>
					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. In rugby, which country will the British and Irish Lions tour in 2017? New Zealand<br>

						Q. Who is the only coach to win both a Super Bowl and a Rose Bowl? Dick Vermeil<br>

						Q. Before the NFL mandated the use of helmets in 1943, who was the last player not to 
						use one? Chicago Bears lineman Dick Plasman<br>

						Q. Who is the only tennis player to have won each of the four grand slam events at least four times? Steffi Graf<br>

						Q. What is ‘El Clásico’? A game between club giants Real Madrid and Barcelona<br>

						Q. How many World Cups have been won by Australian? Four: 1987, 1999, 2003, 2007<br>

						Q. Which 2 counties did umpiring legend Dickie Bird play for? Yorkshire and Leicestershire<br>

						Q. Which cricketer was even offered the throne of Albania? C.B. Fry<br>

						Q. Which is the coldest game in NFL history? 1967 NFL Championship game between the 
						Dallas Cowboys and the Green Bay Packers: -13 degrees<br>

						Q. Which was the first televised game of the NFL?Oct 22, 1939: The Brooklyn Dodgers 
						Vs. Philadelphia Eagles (broadcast by NBC to 500 TV sets)<br>

						Q. In the 1995–96 season, who scored 114 goals in 29 games for Everton’s under-10s and 11s? Wayne Rooney<br>

						Q. How many players, including the goaltender, make up an ice hockey team?Six<br>

						Q. Wladimir Klitschko is a champion boxer from which country? Ukraine<br>

						Q. Which was the only team to win two World Series in the 1980s?The Los Angeles Dodgers<br>

						Q. How many home runs did baseball great Ty Cobb hit in the three world series in which he played? None<br>

						Q. After retiring as a player, with which team did baseball great Babe Ruth spend one 
						year as a coach? The Brooklyn Dodgers: 1938<br>

						Q. Who is the only player to have blasted 100 international centuries? Sachin Tendulkar<br>

						Q. What was banned from 1967 to 1976? Slam dunk<br>

						Q. Which NFL team is known as the ‘ain’ts’ when on a losing streak? The New Orleans Saints<br>

						Q.In golf, who won his first major at the Masters in 2015 and also won the 2015 U.S. Open? Jordan Spieth<br>
						</p>
					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. In feet, how high is a basketball hoop? 10 feet<br>

						Q. What nationality is tennis player Novak Djokovic? Serbian<br>

						Q. In 1971, what team did Kevin Keegan joined Liverpool from? Scunthorpe United<br>

						Q. Jan-Ove Waldner, Zhang Jike and Deng Yaping have been noteable players in which sport? Table tennis<br>

						Q. Which jockey won the Investec Derby in 2015 on Golden Horn? Frankie Dettori<br>

						Q. For which county does cricketer Joe Root play? Yorkshire<br>

						Q. Which British Paralympic wheelchair athlete has won the London Marathon six times? David Weir<br>

						Q. Who won The World Highland Games Championships a record six times? Geoff Capes<br>

						Q. What jobs did Mike ‘Fluff’ Cowan, Jim ‘Bones’ Mackay and Fanny Sunesson do? Golf caddies<br>

						Q. The groundbreaking Stoke Mandeville Games for the Paralyzed in 1948, featured 14 male 
						and 2 female competitors in which sport? Archery<br>

						Q. Which former rugby player once called the English RFU committee ‘Old Farts’? Will Carling<br>

						Q. The test cricket ground Sabina Park is in which country?Jamaica<br>

						Q. What three movements are required for an athlete to successfully complete a triple jump? Hop, step, and jump<br>

						Q. Which boxer was an underdog with odds of 42:1 when he stunned Mike Tyson? Buster Douglas: 1990<br>

						Q. Who was the first athlete to fail an Olympic drug test? Pentathlete Hans-Gunnar Liljenwall in 1968<br>

						Q. In which sport are the terms ‘stale fish’ and ‘mulekick’ used? Snowboarding<br>

						Q. Name the only major team sport in the USA with no game clock? Baseball<br>

						Q. Which British female won two gold medals at the 2008 Olympic Games? Rebecca Adlington<br>

						Q. Who did boxer Frank Bruno beat to become WBC world champion in 1995? Oliver McCall<br>

						Q. On which racecourse is the St Leger horse race run?Doncaster<br>
						</p>
					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						&nbsp;&nbsp;&nbsp;<br><br>
						Q. Who won the 2013 Tour de France? Chris Froome<br>

						Q. Who was the first European post-war golfer to win three different majors? Rory McIlroy<br>

						Q. Who competed in the 2008 Paralympics in Beijing, winning two swimming gold medals for 
						Great Britain, despite being only 13?Ellie Simmonds<br>

						Q. The American basketball team ‘The Bulls’, represent which city?Chicago<br>

						Q. Which major did golfer Rory McIlroy win at the age of 22, in 2011?U.S. Open<br>

						Q. Which sport is played on the biggest pitch in terms of area? Polo<br>

						Q. What is the highest possible break in snooker? 155<br>

						Q. Which sport did George Washington play with his troops? Cricket<br>

						Q. Who was the 1st non-European to win the Tour de France? Greg Lemond from the US<br>

						Q. In horse racing, what is a Yankee? 11 individual bets<br>

						Q. What is the maximum time limit allowed to look for a lost ball in golf? 5 minutes<br>

						Q. Name the European club David Beckham ended his career with?Paris Saint-Germain<br>

						Q. In golf, over how many holes is The Open Championship contested?72 (4 rounds of 18)<br>

						Q. In cricket, how many matches generally make up an Ashes Test series?Five<br>

						Q. On Feb. 25, 1964, brash, overconfident phenomenon Cassius Clay gained his first 
						heavyweight boxing title when he knocked out which champion? Sonny Liston<br>

						Q. On November 13, 2000, the Michigan State basketball team broke what team’s 
						1,270 game winning streak?Harlem Globetrotters<br>

						Q. Which NFL team is the first to win 3 Super Bowls?The Pittsburgh Steelers. They won Super Bowls IX, X, and XIII.<br>

						Q. What city of Asia hosted the Summer Olympics in 2008?Beijing

						Q. Which Australian was selected by the Milwaukee Bucks with the first overall pick 
						in the 2005 National Basketball Association (NBA) Draft? Andrew Bogut<br>

						Q. Which golfer won the 2013 Masters Tournament in Augusta, Georgia? Adam Scott<br>
						</p>
					</div>
					<!-- end of post 5 by creator -->
					
					</div>
					<!--end of sports content view-->
					
					
					<!-- mathematics content view -->
				<div class="subpost" id="mathspost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/maths2.jpg"/>
						</div>

					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/maths1.jpg"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/maths5.jpg"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/maths6.png"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/maths7.jpg"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					
					<!-- post 6 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/maths8.jpg"/>
						</div>

					</div>
					<!-- end of post 6 by creator -->
					
					<!-- post 7 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/maths9.jpg"/>
						</div>

					</div>
					<!-- end of post 7 by creator -->
					
					<!-- post 8 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/maths10.jpg"/>
						</div>

					</div>
					<!-- end of post 8 by creator -->
					
					<!-- post 9 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/maths11.jpg"/>
						</div>

					</div>
					<!-- end of post 9 by creator -->
					
					
					</div>
					<!--end of mathematics content view-->
					
					
					
					<!-- statistics content view -->
				<div class="subpost" id="statspost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/stats1.jpg"/>
						</div>

					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/stats2.jpg"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/stats3.jpg"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/stats4.png"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/stats5.jpg"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					
					<!-- post 6 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/stats6.jpg"/>
						</div>

					</div>
					<!-- end of post 6 by creator -->
					
					<!-- post 7 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/stats7.jpg"/>
						</div>

					</div>
					<!-- end of post 7 by creator -->
					
					</div>
					<!--end of statistics content view-->
					
					
					<!-- environmental studies content view -->
				<div class="subpost" id="evspost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/evs1.jpg"/>
						</div>

					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/evs2.jpg"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/evs3.png"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/evs4.jpg"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/evs5.jpg"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					
					<!-- post 6 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/evs6.jpg"/>
						</div>

					</div>
					<!-- end of post 6 by creator -->
					
					<!-- post 7 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/evs7.jpg"/>
						</div>

					</div>
					<!-- end of post 7 by creator -->
					
					</div>
					<!--end of environmental studies content view-->
					

					<!-- economics content view -->
				<div class="subpost" id="ecopost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/eco1.jpg"/>
						</div>

					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/eco2.jpg"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/eco3.jpg"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/eco4.jpg"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/eco5.jpg"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					
					<!-- post 6 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/eco6.jpg"/>
						</div>

					</div>
					<!-- end of post 6 by creator -->
					
					</div>
					<!--end of economics content view-->
					

					<!-- physics content view -->
				<div class="subpost" id="phypost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/phy1.png"/>
						</div>

					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/phy2.jpg"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/phy3.png"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/phy4.jpg"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/phy5.png"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					
					</div>
					<!--end of physics content view-->
					
					
					<!-- chemistry content view -->
				<div class="subpost" id="chempost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/chem1.jpg"/>
						</div>

					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/chem2.png"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/chem3.png"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/chem4.png"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/chem5.png"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					
					</div>
					<!--end of chemistry content view-->
					
					
					<!-- biology content view -->
				<div class="subpost" id="biopost">
					<!-- post 1 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/bio1.jpg"/>
						</div>

					</div>
					<!-- end of post 1 by creator -->
					
					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/bio2.jpg"/>
						</div>

					</div>
					<!-- end of post 2 by creator -->
					
					<!-- post 3 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/bio3.jpg"/>
						</div>

					</div>
					<!-- end of post 3 by creator -->
					
					<!-- post 4 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/bio4.jpg"/>
						</div>

					</div>
					<!-- end of post 4 by creator -->
					
					<!-- post 5 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="data/frnt10.jpg"/>
						</div>
					    <div class="username">
						<p class="name">Knowledge Booster</p>
					    </div>
						<p class="quotes">
						
						</p>
						<div class="post">
							<img class="postimg" src="data/bio5.jpg"/>
						</div>

					</div>
					<!-- end of post 5 by creator -->
					
					</div>
					<!--end of biology content view-->
					




		</div>
		</div>
	
</body>
</html>
