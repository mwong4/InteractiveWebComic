<!-- PHP FILE -->

<!DOCTYPE html>

<html>
<!-- Header -->
	<head>
		<title>Square Square | Contact</title>
		
		<link rel="stylesheet" type="text/css" href="newStyles.css">
	</head>

  <!-- body -->
	<body>
  
		<!-- header -->
		<div class="secondaryHeader">

			<!-- the navigation bar -->
 			<div class="topnav">
				<img src="LogosquaresuqaredgooderWHITE.png" alt="temporary plant logo" height="42" width="42" id="logo">
				<div id="topGradient"></div>
				<a href="/InteractiveWebComic/index.html" id="homeButton">Home</a>
				<a href="/InteractiveWebComic/TeamPage.html">Team</a>
				<a href="/InteractiveWebComic/ContactPage.html">Contact</a>
				<a href="/InteractiveWebComic/AboutPage.html">About</a>
			</div>
			
			
			<h1 class="secondaryHeaderText">Contact</h1>
				<div id="#secondaryMiddleGradient"></div>
		

		</div>
		

		<div id="bottomGradient"></div>
		
		<div class="headerTheme">
			<h2 class="secondHeader"> Lets Chat <h2>
		</div>
		
		<div class="container">
				<form action="action_page.php">
		 
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="firstname" placeholder="Your first name..">
		 
				<label for"lname">Last Name</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">
		 
				<label for="country">Country</label>
				<select id="country" name="country">
				 <option value="unknown">Choose a country</option>
				 <option value="australia">Australia</option>
				 <option value="canada">Canada</option>
				 <option value="usa">USA</option>
				</select>
		 
				<label for="subject">Leave a Note For the Developers</label>
				<textarea id="subject" name="subject" placeholder="Leave a note.." style="height:200px"></textarea>

				<a style="text-decoration:none" class="button" >Submit</a>
		 
				<!--<button id="submitBtn" onclick="SubmitClick"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>-->
					  		 
			 </form>
			</div>	

		
		<script src="https://www.gstatic.com/firebasejs/5.8.3/firebase.js"></script>
		<script>
			  // Initialize Firebase
			  var config = {
				apiKey: "AIzaSyCoOktMj4ADFh6VYuToMKJhHqHToDXHr7Y",
				authDomain: "squaresquared-8e4ab.firebaseapp.com",
				databaseURL: "https://squaresquared-8e4ab.firebaseio.com",
				projectId: "squaresquared-8e4ab",
				storageBucket: "squaresquared-8e4ab.appspot.com",
				messagingSenderId: "833259003920"
			  };
		  firebase.initializeApp(config);
		</script>
	</Body>


</html>

