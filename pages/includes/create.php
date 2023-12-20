<?php
	include_once "dbh.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type = "text/javascript" src = "function.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Create Resume</title>
</head>
<body>
	<header>
	<div class="wrapper">
		<div class="logo">
			<h3>Resume System</h3>
		</div>
		<nav>
                <ul>
                 <li><a href ="../mainpage.php">Your Resume</a></li>
             </ul>
            </nav>
	</div>
	</header>

	<div class="container">
	<form name="forms" action="insert.php" method="POST">
		<h1>Fill in your resume.</h1><br><br>
		<fieldset>
			<legend>[ Personal Info ]</legend>
		<div class="enter">
			<label for="fname">First name:</label>
			<input type="text" name="fname">
			<label for="lname">Last name:</label>
			<input type="text" name="lname" >
			<label for="phone">Phone Number:</label>
			<input type="text" name="phone">
			<label for="email">Email Address:</label>
			<input type="email" name="email">
			<label for="url">Portfolio/Blog Link:</label>
			<input type="text" name="url">
		</div>
		</fieldset>

		<fieldset>
			<legend>[ Experience ]</legend>
			<div class="enter">
				<label for="jobtitle">Job Title:</label>
				<input type="text" name="jobtitle">
				<label for="com_name">Company:</label>
				<input type="text" name="com_name">
				<label for="start_job">Start Date:</label>
				<input type="date" name="start_job">
				<label for="end_job">End Date:</label>
				<input type="date" name="end_job">
				<label for="descrip">Job Description:</label>
				<textarea name="descrip"></textarea> 
			</div>
		</fieldset>

		<fieldset>
			<legend>[ Education ]</legend>
			<div class="enter">
				<label for="school">School Name:</label>
				<input type="text" name="school">
				<label for="degree">Degree:</label>
				<input type="text" name="degree">
				<label for="field">Field of Study:</label>
				<input type="text" name="field">
				<label for="cgpa">CGPA:</label>
				<input type="text" name="cgpa">
				<label for="enddg">Graduation Date:</label>
				<input type="date" name="enddg">
			</div>
		</fieldset>
		
		<fieldset>
			<legend>[ Skills ]</legend>
		<div class="enter">
			<label for="skill1">Skill 1:</label>
			<input type="text" name="skill1">

			<label for="skill2">Skill 2:</label>
			<input type="text" name="skill2">

			<label for="skill3">Skill 3:</label>
			<input type="text" name="skill3">

			<label for="language">Proficient Language:</label>
			<input type="text" name="language">
		</div>

	</fieldset>
	<div class="wrapper-button">
		<input class="edit" type="submit" name="submit" value="Submit"><a href="../mainpage.php" id="link" class="edit">Cancel</a>
	</div>
	
	</form>
	</div>

</body>
</html>