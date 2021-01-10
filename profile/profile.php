<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="click.js"></script>
</head>
<body>
<div class="pro-container"><!-- whole body profile container -->
	<div class="pro-head">
		   <span></span><span class="_cpr">Profile</span>
	</div><!-- only contain profile writen and arrow go slide back -->
	<div class="pro-head-content"><!-- head content for scrolling effect -->
	     
	     <!-- user img editing below -->
		<div class="pro-img-box">
			
			<div class="pro-img"><img src="../image/home.jpg"><div class="change-image">Change image</div></div>
		
		</div><!-- user img editing here above -->

         <!-- user enter there name -->
		<div class="name-box">
			<label style="color:#00bfa5;font-size: 20px;">Your Name</label><br/>
			<div class="name-input">
	<input type="text" name="username" placeholder="Alex Rozard" class="username" required>
		<span class="someimga"><!--here code of image like arrow and pencile --></span>
			</div>
			
		</div><!-- user enter there name -->
		<span class="grb"><p style="padding: 20px;">This is not your username or pin. this name will be visible to your Whatsapp contacts.</p></span>
		<div class="name-box">
			<label style="color:#00bfa5; font-size: 20px;">About</label><br/>
			<div class="name-input">
				<input type="text" name="about" placeholder="Hey, what you think" class="username" required>
		<span class="someimga"><!--here code of image like arrow and pencile --></span>
			</div><!-- user give his thought of his mind -->
	</div>

	</div>

<!-- below delete when you mearge through php -->
<button class="user-img" style="position: fixed;left:30%;top:0;">trigger</button><!-- this test to slide to testing -->

</body>
</html>