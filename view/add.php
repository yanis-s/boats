<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
require_once '../controller/BoatController.php';
?>

<html>
<head>
	<title>Add Boat</title>
    <link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$weight = $_POST['weight'];
	$loginId = $_SESSION['id'];
		
	if(empty($name) || empty($description) || empty($weight)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}
		
		if(empty($weight)) {
			echo "<font color='red'>Weight field is empty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
        $bc = new BoatController();

        $result = $bc->addBoat($name,$description,$weight,$loginId);
        header("Location: view.php");

	}
}
?>
</body>
</html>
