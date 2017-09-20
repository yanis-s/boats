<?php session_start(); ?>
<html>
<head>
	<title>Boat CRUD</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h1>Boat Manager</h1>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Logout</a><br/>
		<br/>
		<a href='view/view.php'>View and Add Boat</a>
		<br/><br/>
	<?php	
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
	}
	?>

</body>
</html>
