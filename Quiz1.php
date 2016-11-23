<!--Ross Cawley, 14511223 -->
<!DOCTYPE html>
<html>
<head>
<!--Much of the code is the same in all files, gotta keep consistency! -->
	<title>Yoga Pose Quiz</title>
	<style type="text/css">
	body{
		background-image:url(https://freephonewallpapersformobile.files.wordpress.com/2013/09/windows-phone-hd-for-mobile-phone-wallpapers-1080x1920-sunset.png);
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
	.pics{
		margin-left:150px;
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
  <li><a class="active" href="Quiz1.php">Quiz 1</a></li>
  <li><a href="Quiz2.php">Quiz 2</a></li>
</ul><br>
<div id = "question-holder">
	<p id="intro">This quiz tests your <strong style="color:#ee9847">image</strong> based memory! You will be shown a number of poses and you must choose the correct name for that pose. Good luck!</p>
	<h1>Identify the pose:</h1>
	<form name="inputForm" id="inputForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
	<div id="questions">
			<h3>1)</h3>
			<!--This quiz gives the user four options to pick from the shown picture 
				Note that I was going to try and block out the name of the pose by using an overlayed div
				but I ran out of time/thought it wasn't really worth the effort as it doesn't add any functionality.-->
				<div id="wrap1" class="wrap">
					<img name="1" class="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Half-Moon-Pose.jpg"/><br>
						
					<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
					<label for="question-1-answers-A">A) Downward Facing Pigeon Pose</label><br>
				
					<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
					<label for="question-1-answers-B">B) Half Moon Pose</label><br>
					
					<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
					<label for="question-1-answers-C">C) Side Headstand</label><br>
				
					<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
					<label for="question-1-answers-D">D) Tree Pose</label><br>
					

				</div>
			
			<h3>2)</h3>
				
				<div id="wrap 2" class="wrap">
					
					<img name="3" class="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Adho-Muka-Kapotasana.jpg"/><br>
					
					<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
					<label for="question-2-answers-A">A) Side Crane Pose</label><br>
					
					<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
					<label for="question-2-answers-B">B) Downward Facing Dog</label><br>
						
					<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
					<label for="question-2-answers-C">C) Extended Leg Headstand</label><br>
				
					<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
					<label for="question-2-answers-D">D) Downward Facing Pigeon Pose</label><br>
						
				</div>
			
			
			<h3>3)</h3>
			
				<div id="wrap 3" class="wrap">
				
					<img name="5" class="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/headstand-splits.jpg"/><br>
						
					<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
					<label for="question-3-answers-A">A) Extended Leg Headstand</label><br>
					
					<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
					<label for="question-3-answers-B">B) Corpse Pose</label><br>
					
					<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
					<label for="question-3-answers-C">C) Cobra Pose</label><br>
					
					<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
					<label for="question-3-answers-D">D) Child Pose</label><br>
						
				</div>
			
			
			<h3>4)</h3>
			
				<div id="wrap 4" class="wrap">
	
					<img name="7" class="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Anjaneyasana.jpg"/><br>
					
					<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
					<label for="question-4-answers-A">A) Half Revolved Belly Pose</label><br>
					
					<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
					<label for="question-4-answers-B">B) Lunge Pose</label><br>
					
					<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
					<label for="question-4-answers-C">C) Backbend</label><br>		
					
					<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
					<label for="question-4-answers-D">D) Boat Pose</label><br>
						
				</div>
			
			<h3>5)</h3>
				<div id="wrap 5" class="wrap">
				
					<img name="9" class="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/astavakrasana1.jpg"/><br>
					
					<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
					<label for="question-5-answers-A">A) Ancient Sage cursed with Crooked Limbs</label><br>
				
					<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
					<label for="question-5-answers-B">B) Four Limb Staff Pose</label><br>

					<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
					<label for="question-5-answers-C">C) Camel Pose</label><br>
					
					<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
					<label for="question-5-answers-D">D) Bow Pose</label>
					
				</div>
	
				<input type="submit" name="submit" value="Submit" id="btn" /><br><br><br>
				<div id = "results">
				<?php
					//when the submit button is pressed, we verify and call the check answers function to determine our score.
					if(isset($_POST["submit"])){
						checkAnswers();
					}
					//check scores simply takes in the POST for each question and compares to some letter(A,B,C,D).
					//The score is incremented each time an answer is correct.
					//I was going to use a JSON file to update the score as the user entered their answers but the
					//way the quiz is laid out, this wouldn't really work.
					
					//Also note that every time the page is visited, the div 'results' is already printed and on
					//subsequent visits, the score from the previous attempt shows up. Using JQuery/Ajax, I believe
					//it's possible to get around this problem but I didn't have the time to learn these enough that
					//i'd feel comfortable implementing their methods. 
					
					//Finally, to see your scores, scroll to the bottom of the page after submitting the form!
					function checkAnswers(){
						$totalScore = 0;
						if(trim($_POST["question-1-answers"])=="B"){
							echo "<div class='right'>Question 1: You answered correctly!</div>";
							$totalScore++;
						}else{echo "<div  class='wrong'>Question 1: You answered incorrectly!</div>";}
						if(trim($_POST["question-2-answers"])=="D"){
							echo "<div class='right'>Question 2: You answered correctly!</div>";
							$totalScore++;
						}else{echo "<div  class='wrong'>Question 2: You answered incorrectly!</div>";}
						if(trim($_POST["question-3-answers"])=="A"){
							echo "<div class='right'>Question 3: You answered correctly!</div>";
							$totalScore++;
						}else{echo "<div  class='wrong'>Question 3: You answered incorrectly!</div>";}
						if(trim($_POST["question-4-answers"])=="B"){
							echo "<div class='right'>Question 4: You answered correctly!</div>";
							$totalScore++;
						}else{echo "<div  class='wrong'>Question 4: You answered incorrectly!</div>";}
						if(trim($_POST["question-5-answers"])=="A"){
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

	//validating the form is a simple process. Simply check that the user has atleast attempted each of the questions by verifying that their
	//value is checked. If not, alert them with a prompt. 
	function validateForm() {
		
		for(i = 1; i<=5;i++){
			if(!(document.getElementById("question-"+i+"-answers-A").checked ||	document.getElementById("question-"+i+"-answers-B").checked ||
				document.getElementById("question-"+i+"-answers-C").checked ||	document.getElementById("question-"+i+"-answers-D").checked)){
					alert("Please enter all questions before submitting the quiz.");
					return false;
			}
		}
		return true;
	}
</script>
</body>

</html>
<!-- END -->