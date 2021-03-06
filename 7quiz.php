<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/quizstyle.css">
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
				<li class="active"><a href="#">Quiz</a></li>
				<li><a href="4registration.php">Register</a></li>
				<li><a href="6about.php">About</a></li>
				<li><a href="5contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu-bg" id="menu-bg"></div>
	
	<div class="quizhome custom-box show">
		<h4>You'll have 15 seconds to answer each question.</h4>
		<!--<button type="button" class="startquiz btn">Start The Quiz</button>-->
		<h1>Select Category</h1>
		<div class="categorybox">
		</div>
	</div>
	
	<div class="quizbox custom-box">
		<h1 class="categorytext"></h1>
		<div class="stats">
			<div class="quiztime">
				<div class="remainingtime"></div>
				<span class="timeuptext">Time's Up</span>
			</div>
			<div class="scoreboard">
				<span class="scoretext">Score:</span>
				<span class="correctanswers"></span>
			</div>
		</div>
		<div class="questionbox">
			<div class="currentqtnno">
			
			</div>
			<div class="qtntext">
			
			</div>
		</div>
		<div class="optionbox">
			
		</div>
		<div class="answerdescription">
			
		</div>
		<div class="nextqtn">
			<button type="button" class="nextqtnbtn btn">Next Question</button>
			<button type="button" class="seeresultbtn btn">See Your Result</button>
		</div>
	</div>
	
	<div class="quizoverbox custom-box">
		<h1>Quiz Result</h1>
		<h4>Total Questions: <span class="totalqtns"></span></h4>
		<h4>Attempt: <span class="totalattempt"></span></h4>
		<h4>Correct: <span class="totalcorrect"></span></h4>
		<h4>Wrong: <span class="totalwrong"></span></h4>
		<h4>Percentage: <span class="percentage"></span></h4>
		<button type="button" class="startagainquiz btn">Start Again</button>
		<button type="button" class="gohome btn">Go To Home</button>
	</div>
	
	<script src="javascript/quiz.js"></script>
</body>
</html>
