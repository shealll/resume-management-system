<?php 

	if(!isset($_SESSION))
{
	session_start();
}

	require 'dbh.php';

if (isset($_POST['submit'])){

	$resume_id = $_SESSION['resume_id'];
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
	$cgpa = $_POST['cgpa'];
	$enddg = $_POST['enddg'];
	$skill1 = $_POST['skill1'];
	$skill2 = $_POST['skill2'];
	$skill3 = $_POST['skill3'];
	$language = $_POST['language'];
	
	$sql = "UPDATE resume SET fname ='$fname', lname = '$lname', phone = '$phone', email= '$email', url = '$url', jobtitle = '$jobtitle', com_name = '$com_name', start_job = '$start_job', end_job = '$end_job', descrip='$descrip', school = '$school', degree = '$degree', field = '$field', cgpa = '$cgpa', enddg = '$enddg', skill1 = '$skill1', skill2 = '$skill2', skill3 = '$skill3', language ='$language' WHERE resume_id ='$resume_id'";
	
	if ($conn->query($sql) === TRUE){
			header("location: ../mainpage.php");
	} 
	else{
			echo "Resume was not updated. Please try again.";
	}
}
?>