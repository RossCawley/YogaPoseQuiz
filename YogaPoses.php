<!--Ross Cawley, 14511223 -->
<!DOCTYPE html>
<html>
<head>
	<script>
	<!--Cookie code asks the user for their name on the first visit and greets them on subsequent visits. Copied straight from the great minds
	<!--at W3 schools.com!-->
	
	function setCookie(cname,cvalue,exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires=" + d.toGMTString();
		document.cookie = cname+"="+cvalue+"; "+expires;
	}

	function getCookie(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}

	function checkCookie() {
		var user=getCookie("username");
		if (user != "") {
			alert("Welcome again " + user);
		} else {
		   user = prompt("Please enter your name:","");
		   if (user != "" && user != null) {
			   setCookie("username", user, 30);
		   }
		}
	}

	</script>
	
	<title>Yoga Pose Quiz</title>
	<!--CSS is pretty basic stuff, nothing too groundbreaking here.-->
	<style type="text/css">
	body{
		background-image:url(http://www.hdbloggers.net/wp-content/uploads/2016/03/Sky-Sunset-Background.jpg);
		background-size:cover;
	}
	h1{
		font-family:Helvetica,sans-serif;
		color:white;
		text-align:center;
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
	#slideshow-holder{
		border:2px solid white;
		margin:auto;
		padding:5px;
		text-align:auto;
		max-width:40%;
		position:relative;
		background-color: #152b4b;
		border-radius:3px;
	}
	#slide-info{
		font-family:Helvetica;
		color:white;
		padding:5px;
		text-align:center;
	}
	#slideshow{
		padding-left:120px; 
		padding-right:120px;
	}
	.slide-button {
		background-color:#ee9847;
		color:white;
		border-radius:5px;
		width:40px;
		height:20px;
		cursor:pointer;
		font-family:Helvetica, sans-serif;
		margin:5px;
		padding:2px;
		text-align:center;
	}
	.slide-button:hover{
		background-color:#111;
	}
	.pics{
		text-align:center;
		margin:auto;
	}
	#thanks{
		color:white;
		font-size:12px;
		font-family:Helvetica;
	}
	
	</style>
<body onload="checkCookie()">
<h1>Yoga Pose Quiz!</h1>
<!--The link bar at the top of the screen is just an unordered list, styled in CSS to be horizontal -->
<ul>
  <li><a class="active" href="YogaPoses.php">Home</a></li>
  <li><a href="Quiz1.php">Quiz 1</a></li>
  <li><a href="Quiz2.php">Quiz 2</a></li>
</ul><br>

<!--The slideshow is held in a div element. Each picture has an id that is cycled through
when either of the directional buttons is pressed. -->
<div id = "slideshow-holder">	
	<p id ="slide-info">Study the pictures and when you are ready, test your knowledge! Click on the picture for more information on the pose.</p>
	<div id = "slideshow">
		<a href ="http://www.yogacards.com/yoga-postures-2/half-moon-pose.html">
			<img name="1" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Half-Moon-Pose.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/headstand-Sirsasana-side.html">
			<img name="2" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/headstand-side.jpg"/>
		<a>
		<a href="http://www.yogacards.com/yoga-postures-2/kapotasana-pigeon-pose-dw.html">
			<img name="3" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Adho-Muka-Kapotasana.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/tree-pose-vrksasana.html">
			<img name="4" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Vrksasana.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/headstand-Sirsasana-Splits.html">
			<img name="5" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/headstand-splits.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/akarna-dhanurasana-bow.html">
			<img name="6" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Akarna-Dhanurasana.jpg"/>	
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/the-lunge-pose.html">
			<img name="7" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Anjaneyasana.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/lying-twists-half.html">
			<img name="8" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Ardha-Jathara-Parivarttanas.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/astavakrasana.html">
			<img name="9" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/astavakrasana1.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/lean-back.html">
			<img name="10" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/back-bend-salute.jpg"/>		
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/navasana-boat-pose.html">
			<img name="11" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/boat.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/bow-pose-danurasana.html">
			<img name="12" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Bow-Pose.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/Ustrasana-Camel-Pose-2.html">
			<img name="13" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/camel-twist.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/Ustrasana-Camel-Pose.html">
			<img name="14" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/camel.jpg"/>	
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/chaturanga-dandasana.html">
			<img name="15" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Chaturanga-Dandasana.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/Balasana-child-pose.html">
			<img name="16" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/child.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/cobra-pose.html">
			<img name="17" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/cobra.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/savasana.html">
			<img name="18" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Corpse-Pose.jpg"/>	
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/crane-pose-bakasana-side.html">		
			<img name="19" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/dog-1leg.jpg"/>
		</a>
		<a href="http://www.yogacards.com/yoga-postures-2/downward-facing-dog.html">
			<img name="20" class ="pics" src="http://www.yogacards.com/yoga-postures-2/yoga-cards/dog.jpg"/>
		</a>
	
		<a class="slide-button" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)"/> 
			Prev
		</a>
		<a class="slide-button" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)"/> 
			Next
		<img src="">
		</a>
	</div><br>
	<div id="thanks">
		Thanks to YogaCards.com for providing and allowing the free use of their images!
	</div>
</div>
<script>
<!-- We always start on the first image every time the page is visited -->
var slideIndex = 1;
showDivs(slideIndex);
<!--When one of the directional buttons is pressed, we either move forward or backwards in the slideshow -->
function plusDivs(n) {
  showDivs(slideIndex += n);
}
<!--This function displays the slide we are on into the div created above. If the counter reaches the end, we simply go back to one, or vice versa if we go backwards from 1. -->
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("pics");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
<!-- END -->
</html>