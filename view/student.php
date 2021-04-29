<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><br><br>
		<h3>Student Login Page</h3><br>
		<form action="" method="post">
			Email:<input type="text" name="email" ><br><br>
			Password:<input type="password" name="password" ><br><br>
			<input type="submit" name="submit">
		</form><br>
		<?php
		if (isset($_POST['submit'])){
			$_SESSION['email']= $row['email'];
			$_SESSION['name']= $row['name'];	
			header("Location: admin_dash.php");
		}		
		?>
	</center>
</body>
</html>