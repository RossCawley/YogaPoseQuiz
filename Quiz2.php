<!--Ross Cawley, 14511223 -->
<!DOCTYPE html>
<!--This file is much the same as quiz 1, with the exception of user input being used instead of multiple choice. As a result, the
	validation and check answers are slightly different. Everything else is pretty much the exact same, in terms of CSS/General Layout.-->
<html>
<head>
	<title>Yoga Pose Quiz</title>
	<style type="text/css">
	body{
		background-image:url(http://www.1080x1920wallpapers.com/1080x1920-backgrounds/1080x1920-wallpapers-1/1080x1920-HD-wallpapers-samsung-htc-android-smartphone-46443jrtg-1080P.jpg);
		background-size:cover;
	}
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #152b4b;
		border:2px solid white;
		border-radius:3px;
	}
	li {
		float: left;
	}
	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	li a:hover:not(.active) {
		background-color: #111;
	}
	.active {
		background-color: #ee9847;
	}
	#question-holder{
		border:2px solid white;
		margin:auto;
		padding:5px;
		text-align:auto;
		max-width:60%;
		position:relative;
		background-color: #152b4b;
		border-radius:3px;
	}
	#intro{
		font-family:Helvetica;
		color:white;
		padding:5px;
		text-align:left;
	}
	h1{
		font-family:Helvetica;
		color:white;
		padding:5px;
		text-align:center;
	}
	h3{
		font-family:Helvetica;
		color:white;
		padding:5px;
		text-align:left;
	}
	#questions{
		font-family:Helvetica;
		color:white;
		padding:5px;
		text-align:left;
	}
	.wrap{
		background-color:#ee9847;
		margin:10%;
		padding: 20px;
		border: 3px solid white;
		border-radius:3px;
		color:white;
		font-family:Helvetica;
	}
	#sanskrit{
		background-color:#152b4b;
		margin-left:25%;
		margin-right:25%;
		text-align:center;
		font-size:24px;
		padding: 10px;
		border: 3px solid white;
		border-radius:3px;
		color:white;
		font-family:Helvetica;
		cursor:pointer;
	}
	#sanskrit:hover{
		background-color:#111;
	}
	#input{
		margin-left:35%;
	}
	#btn{
		
		border:3px solid white;
		border-radius:3px;
		color:white;
		background-color:#ee9847;
	    padding: 20px 40px;
		text-align: center;
		font-size: 24px;
		cursor:pointer;
		margin-left:40%;
	}
	#btn:hover{
		background-color:#111;
	}
	#results{
		background-color:#ee9847;
		border:3px solid white;
		border-radius:3px;
		color:white;
		font-family:Helvetica;
		margin-left:30%;
		margin-right:30%;
		padding:10px;
	}
	#results .wrong{
		color:#FF0000;
	}
	#results .right{
		color:#458B00;
	}
	</style>
<body>
<h1>Yoga Pose Quiz!</h1>
<ul>
  <li><a href="YogaPoses.php">Home</a></li>
  <li><a href="Quiz1.php">Quiz 1</a></li>
  <li><a class="active" href="Quiz2.php">Quiz 2</a></li>
</ul><br>
<div id = "question-holder">
	<p id="intro">This quiz tests your <strong style="color:#ee9847">language</strong> based memory! You will be shown a number of sanskrit names and you must enter the english name for that pose. Good luck!</p>
	<h1>Translate the Sanskrit Word:</h1>
	<form name="inputForm" id="inputForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
	<div id="questions">
			<h3>1)</h3>
				<div class="wrap">
					<div id ="sanskrit">
						Savasana
					</div><br>
				<input type="text" name="question-1-answers" id = "input" placeholder="Enter your answer here!"/>
					
				</div>
			
			<h3>2)</h3>
				
				<div class="wrap">
					<div id ="sanskrit">
						Balasana
					</div><br>
					<input type="text" name="question-2-answers" id = "input" placeholder="Enter your answer here!"/>
				</div>
			
			
			<h3>3)</h3>
			
				<div class="wrap">
					<div id ="sanskrit">
						Chaturanga Dandasana
					</div><br>
					<input type="text" name="question-3-answers" id = "input" placeholder="Enter your answer here!"/>
				</div>
			
			
			<h3>4)</h3>
			
				<div class="wrap">
					<div id ="sanskrit">
						Anjaneyasana
					</div><br>
					<input type="text" name="question-4-answers" id = "input" placeholder="Enter your answer here!"/>
				</div>
			
			<h3>5)</h3>
				<div class="wrap">
					<div id ="sanskrit">
						Akarna Dhanurasana
					</div><br>
					<input type="text" name="question-5-answers" id = "input" placeholder="Enter your answer here!"/>		
				</div>
	
				<input type="submit" name="submit" value="Submit" id="btn" /><br><br><br>
				<div id = "results">
				<!-- Changing the string to lower case gives the user a bit of wiggleroom so that they don't get penalized for not inputting
					the exact answer down to the case. I tried making it so that if they input some section of the string (i.e only 'corpse'
					instead of the full 'corpse pose'), they'd get it correct. I couldn't get this working due to some strange errors, so I 
					settled on the below code. It's very similar to the same function in Quiz 1.-->
				<?php
					if(isset($_POST["submit"])){
						checkAnswers();
					}
					function checkAnswers(){
					
						$totalScore = 0;
						if(strtolower(trim($_POST["question-1-answers"]))=='corpse pose'){
							echo "<div class='right'>Question 1: You answered correctly!</div>";
							$totalScore++;
						}else{echo "<div  class='wrong'>Question 1: You answered incorrectly!</div>";}
						if(strtolower(trim($_POST["question-2-answers"]))=='child pose'){
							echo "<div class='right'>Question 2: You answered correctly!</div>";
							$totalScore++;
						}else{echo "<div  class='wrong'>Question 2: You answered incorrectly!</div>";}
						if(strtolower(trim($_POST["question-3-answers"]))=='four limb staff pose'){
							echo "<div class='right'>Question 3: You answered correctly!</div>";
							$totalScore++;
						}else{echo "<div  class='wrong'>Question 3: You answered incorrectly!</div>";}
						if(strtolower(trim($_POST["question-4-answers"]))=='lunge pose'){
							echo "<div class='right'>Question 4: You answered correctly!</div>";
							$totalScore++;
						}else{echo "<div  class='wrong'>Question 4: You answered incorrectly!</div>";}
						if(strtolower(trim($_POST["question-5-answers"]))=='formation of a bow'){
							echo "<div class='right'>Question 5: You answered correctly!</div><br>";
							$totalScore++;
						}else{echo "<div  class='wrong'>Question 5: You answered incorrectly!</div><br>";}
						
						echo "<div >You scored $totalScore/5!</div>";
					
					}
					
				?>
				</div><br>
		</div>
	</form>
</div>
<script>


	function validateForm() {
		
		for(i = 1; i<=5;i++){
			if(document.forms["inputForm"]["question-"+i+"-answers"].value == null || document.forms["inputForm"]["question-"+i+"-answers"].value == ""){
				alert("Please answer all questions before submitting the quiz.");
				return false;
			}
		}
		return true;
	}
	
</script>
</body>
</html>
<!-- END -- THANKS FOR READING!-->