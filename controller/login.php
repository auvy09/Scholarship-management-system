<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><br><br>
		<h3>Student Scholership System</h3><br>
		<form action="" method="post">
			<input type="submit" name="admin_login" value="Admin Login"><br><br>
			<input type="submit" name="student_login" value="Student Login">
		</form>
		
		<?php
		if (isset($_POST['admin_login'])){
		header("Location: admin.php");
	               }
			if(isset($_POST['student_login'])){
				header("Location: student.php");
			}
			
			?>
				</center>
</body>
</html>