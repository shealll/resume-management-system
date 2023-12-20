<?php 

	include_once "dbh.php";

	$resume_id = $_GET['delete'];

	$del = mysqli_query($conn, "DELETE FROM resume where resume_id = '$resume_id'");

	if($del){
		mysqli_close($conn);
		header("Location: ../mainpage.php?delete=success");
	}
	else{
		echo "Resume was not deleted. Please try again.";
	}
?>