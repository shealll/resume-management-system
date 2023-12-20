<?php
	include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="style.css">
	<title>View Resume</title>
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
		require "dbh.php";
		$resume_id = $_GET['view'];
		$sql = "SELECT * FROM resume where resume_id = '$resume_id';";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	?>

	<div class="container-res">
		<div class="wrapper-res">
				<div class="left">
					<div class="title" id="skill">
							Skills
					</div>
					<div class="lefttext">
						<ul>
						<?php 
							$skill1 = $row['skill1'];
							$skill2 = $row['skill2'];
							$skill3 = $row['skill3'];
							$language = $row['language'];

							echo "<li>".$skill1."</li>";
							echo "<li>".$skill2."</li>";
							echo "<li>".$skill3."</li>";
							echo "<li>".$language."</li>";
						?>
					</ul>
					</div>
				</div>
				<div class="right">
					<div class="top">
						<h2><?php $fname = $row['fname'];
											$lname = $row['lname']; 
							echo $fname." ".$lname; ?></h2>
						<div class="pinfo">
							<ul>
							<?php $phone = $row['phone'];
										$email = $row['email']; 
										$url = $row['url']; 
							echo "<li>Phone Number:  ".$phone."</li>";
							echo "<li>Email Address:  ".$email."</li>";
							echo "<li>Portfolio Link:  ".$url."</li>";
							 ?>
							</ul>
						</div>
						</div>
						<div class="bottom">
								<div class="bottom-title">
									Experience
								</div>
								
								<div class="bottom-text">
									<ul>
										<?php $jobtitle = $row['jobtitle'];
													$com_name = $row['com_name']; 
													$start_job = $row['start_job'];
													$end_job = $row['end_job'];
													$descrip = $row['descrip'];

										echo "<div class=righttitle><b>".$jobtitle."</b></div>"; 
										echo "<li>Company: ".$com_name."</li>";
										echo "<li>Started At: ".$start_job."</li>";
										echo "<li>Ended At: ".$end_job."</li>";
										echo "<li>".$descrip."</li>";
										?>
										</ul>
								</div>

								<div class="bottom-title">
									Education
								</div>
								<div class="bottom-text">
										<?php $school = $row['school'];
													$degree = $row['degree'];
													$field = $row['field'];
													$cgpa = $row['cgpa'];
													$enddg = $row['enddg'];

										echo "<div class=righttitle><b>".$school."</b></div>"; 
										echo "<li>Degree: ".$degree."</li>";
										echo "<li>Field of Study: ".$field."</li>";
										echo "<li>CGPA: ".$cgpa."</li>";
										echo "<li>Graduate Date: ".$enddg."</li>";
										?>
								</div>
						</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

