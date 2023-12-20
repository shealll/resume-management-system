
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type = "text/javascript" src = "function.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Edit Resume</title>
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

<?php
	require 'dbh.php';
	require 'update.php';

	$resume_id = $_GET['edit'];
	$sql = "SELECT * FROM resume where resume_id = '$resume_id';";
	$result =mysqli_query($conn, "SELECT * FROM resume where resume_id = '$resume_id'");
	$row = mysqli_fetch_assoc($result);
	$_SESSION['resume_id'] = $resume_id;
?>

	<div class="container">
	<form name="forms" action="update.php" method="post">
		<h1>Update your resume.</h1><br><br>
		<fieldset>
			<legend>[ Personal Info ]</legend>
		<div class="enter">
			<label for="fname">First name:</label>
			<input type="text" name="fname" value="<?php echo $row['fname']; ?>"/>
			<label for="lname">Last name:</label>
			<input type="text" name="lname" value="<?php echo $row["lname"]; ?>">
			<label for="phone">Phone Number:</label>
			<input type="text" name="phone" value="<?php echo $row["phone"]; ?>">
			<label for="email">Email Address:</label>
			<input type="email" name="email" value="<?php echo $row["email"]; ?>">
			<label for="url">Portfolio/Blog Link:</label>
			<input type="text" name="url" value="<?php echo $row["url"]; ?>">
		</div>
		</fieldset>

		<fieldset>
			<legend>[ Experience ]</legend>
			<div class="enter">
				<label for="jobtitle">Job Title:</label>
				<input type="text" name="jobtitle" value="<?php echo $row["jobtitle"]; ?>">
				<label for="com_name">Company:</label>
				<input type="text" name="com_name" value="<?php echo $row["com_name"]; ?>">
				<label for="start_job">Start Date:</label>
				<input type="date" name="start_job" value="<?php echo $row["start_job"]; ?>">
				<label for="end_job">End Date:</label>
				<input type="date" name="end_job" value="<?php echo $row["end_job"]; ?>">
				<label for="descrip">Description:</label>
				<textarea name="descrip" rows="5"><?php echo $row["descrip"]; ?></textarea> 
			</div>
		</fieldset>

		<fieldset>
			<legend>[ Education ]</legend>
			<div class="enter">
				<label for="school">School Name:</label>
				<input type="text" name="school" value="<?php echo $row["school"]; ?>">
				<label for="degree">Degree:</label>
				<input type="text" name="degree" value="<?php echo $row["degree"]; ?>">
				<label for="field">Field of Study:</label>
				<input type="text" name="field" value="<?php echo $row["field"]; ?>">
				<label for="cgpa">CGPA:</label>
				<input type="text" name="cgpa" value="<?php echo $row["cgpa"]; ?>">
				<label for="enddg">Graduation Date:</label>
				<input type="date" name="enddg" value="<?php echo $row["enddg"]; ?>">
			</div>
		</fieldset>
		
		<fieldset>
			<legend>[ Skills ]</legend>
		<div class="enter">
			<label for="skill1">Skill 1:</label>
			<input type="text" name="skill1" value="<?php echo $row["skill1"]; ?>">

			<label for="skill2">Skill 2:</label>
			<input type="text" name="skill2" value="<?php echo $row["skill2"]; ?>">

			<label for="skill3">Skill 3:</label>
			<input type="text" name="skill3" value="<?php echo $row["skill3"]; ?>">

			<label for="language">Proficient Language:</label>
			<input type="text" name="language" value="<?php echo $row["language"]; ?>">
		</div>
	</fieldset>
	<input type="hidden" name="resume_id" value="<?php echo $row["resume_id"]; ?>">
	<div class="wrapper-button">
		<input class="edit" type="submit" name="submit" value="Update"><a href="../mainpage.php" id="link" class="edit">Cancel</a>
	</div>
	</form>
	</div>
</body>
</html>