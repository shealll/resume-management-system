<?php
	include_once 'includes/dbh.php';

	$sql = "SELECT * FROM resume;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="includes\style.css">
	<title>Resume System</title>
</head>
<body>
	<header>
	<div class="wrapper">
		<div class="logo">
			<h3>Resume System</h3>
		</div>
		<nav>
                <ul>
                 <li><a href ="mainpage.php">Your Resume</a></li>
                 <li><a href ="includes\create.php">Create Resume</a></li>
             </ul>
            </nav>
	</div>
	</header>

	<div class="container">
		<h3>Your Resume</h3><br>

	<?php
		if ($resultCheck > 0){
				echo "<table class=tab>
    					<tr>
    					<th>Resume No.</th>
    					<th id=pad>Name</th>
      				<th>Actions</th>
    					</tr>";

			while ($row = mysqli_fetch_assoc($result)){

				echo "<tr>";
				echo "<td>Resume_". $row['resume_id']."</td>";
				echo "<td>". $row["fname"] ." ". $row['lname']."</td>";
					$resume_id = $row['resume_id'];
				echo "<td><a href='includes/view.php?view=$resume_id' class=action>View</a>
							<a href='includes/edit.php?edit=$resume_id' class=action>Edit</a>
							<a href='includes/delete.php?delete=$resume_id' class=action>Delete</a></td>";
				echo "</tr>";
			}
		}
		mysqli_close($conn);

		if(mysqli_num_rows($result) == 0 ){

			echo "<br><h4>NO RESUME? CREATE ONE NOW!</h4>";
		}
	?>
	</table>
</div>
</body>
</html>