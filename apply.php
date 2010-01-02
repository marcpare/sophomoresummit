<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Sophomore Summit :: Apply</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
		<link rel="stylesheet" type="text/css" href="styles/formstyle.css" />
		<script type="text/javascript" src="scripts/validate.js"></script>		
	</head> 

	<body class="small">

		<a href="index.php"><div id="header-small" class="no-margin"></div></a>
		<?php require_once("modules/navigation.htmlf"); ?>
		
		<div id="content">
		
		<h1>We're so excited you've chosen to apply!</h1>
		<p>
		Please fill in the following information as accurately as possible and
		tell us a bit about yourself with some short response questions. Use the
		<a href="contact.php">Contact</a> page if you have any questions.
		</p>
		
		<h1>Timeline</h1>
		<img class="force-center" src="images/timeline.png"></img>
		
		<h1>Application</h1>
		
		<form method="post" onsubmit="return validate_form(this);" action="">
			<p class="label">
			Your Full Name
			</p>
			<div class="field">
			<input id="name" name="name" type="text" />
			</div>
			
			<p class="label">
			What name do you go by?
			</p>
			<div class="field">
			<input id="nickname" name="nickname" type="text" />
			</div>
			
			<p class="label">
			Phone Number
			</p>
			<div class="field">
			<input id="phone" name="phone" type="text" />		
			</div>
			
			<p class="label">
			Email Address (@gatech.edu preferred)
			</p>
			<div class="field">
			<input id="email" name="email" type="text" />
			</div>
			
			<p class="label">
			Your Major
			</p>
			<div class="field">
			<input id="major" name="major" type="text" />
			</div>
			
			<p class="label">
			Briefly list any of your current extracurricular activites
			</p>
			<div class="field">
			<textarea name="activities" rows="10" cols="70"></textarea>
			</div>
			
			<p class="label">
			Tell us about an issue facing Tech students today that is important to you.
			</p>
			<div class="field">
			<textarea name="issue" rows="10" cols="70"></textarea>
			</div>
			
			<p class="label">
			What will you contribute to Sophomore Summit?
			</p>
			<div class="field">
			<textarea name="bringto" rows="10" cols="70"></textarea>
			</div>
			
			<p class="label">
			If you were a superhero, what would be your name and power (and why)? 
			</p>
			<div class="field">
			<textarea name="superhero" rows="10" cols="70"></textarea>
			</div>
			
			<p class="label">
			Checking this box signifies your permission to verify your second-year status
			with the Registrar's Office.
			</p>
			<div class="field">
			<input type="checkbox" name="secondyear">I understand
			</div>
			
			<p class="label">
			<input type="submit" value="Submit My Application" name="submit">		
			</p>
		
		</form>
		
		<?php require_once("modules/footer.htmlf");  ?>
	
		</div>
		
	</body>
</html>