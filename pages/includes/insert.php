<?php

	include_once "dbh.php";

	if(isset($_POST["submit"]))
	{
		if(empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['phone']) && empty($_POST['email']) && empty($_POST['url']) && empty($_POST['jobtitle']) && empty($_POST['com_name']) && empty($_POST['start_job']) && empty($_POST['end_job']) && empty($_POST['descrip']) && empty($_POST['school']) && empty($_POST['field']) && empty($_POST['degree']) && empty($_POST['enddg']) && empty($_POST['skill1'])  && empty($_POST['skill2'])&& empty($_POST['skill3'])&& empty($_POST['language']))
		{
			echo "Please fill in the blanks.";
		}
		else{

			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$url = $_POST['url'];
			$jobtitle = $_POST['jobtitle'];
			$com_name = $_POST['com_name'];
			$start_job = $_POST['start_job'];
			$end_job = $_POST['end_job'];
			$descrip = $_POST['descrip'];
			$school = $_POST['school'];
			$degree = $_POST['degree'];
			$field = $_POST['field'];
			$enddg = $_POST['enddg'];
			$skill1 = $_POST['skill1'];
			$skill2 = $_POST['skill2'];
			$skill3 = $_POST['skill13'];
			$language = $_POST['language'];
			

		$sql = "INSERT INTO resume(fname, lname, phone, email, url, jobtitle, com_name, start_job, end_job, descrip, school, field, degree, enddg, skill1, skill2, skill3, language) VALUES('$fname', '$lname', '$phone', '$email', '$url', '$jobtitle', '$com_name', '$start_job', '$end_job', '$descrip', '$school', '$degree', '$field', '$enddg', '$skill1', '$skill2', '$skill3', '$language');";
		mysqli_query($conn, $sql);

		header("Location: ../mainpage.php?insert=success");
		}
	}
	?>